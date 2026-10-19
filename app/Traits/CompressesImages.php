<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait CompressesImages
{
    /**
     * Resize (by max width), compress and store an uploaded image on the public disk.
     * Returns the path relative to the public disk, e.g. "blogs/abc123.jpg"
     */
    protected function compressAndStore(UploadedFile $file, string $folder, int $maxWidth = 1200, int $quality = 80): string
    {
        $extension = strtolower($file->getClientOriginalExtension());
        $fileName  = $folder . '/' . Str::random(20) . '.' . $extension;

        // Formats GD can't safely re-encode: store as-is
        if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
            return $file->store($folder, 'public');
        }

        $sourcePath = $file->getRealPath();

        switch ($extension) {
            case 'png':
                $image = imagecreatefrompng($sourcePath);
                break;
            case 'webp':
                $image = imagecreatefromwebp($sourcePath);
                break;
            default:
                $image = imagecreatefromjpeg($sourcePath);
        }

        if (!$image) {
            return $file->store($folder, 'public');
        }

        $width  = imagesx($image);
        $height = imagesy($image);

        // Downscale only if wider than max
        if ($width > $maxWidth) {
            $newHeight = (int) round($height * ($maxWidth / $width));
            $resized   = imagecreatetruecolor($maxWidth, $newHeight);

            // Preserve transparency for png/webp
            if (in_array($extension, ['png', 'webp'])) {
                imagealphablending($resized, false);
                imagesavealpha($resized, true);
            }

            imagecopyresampled($resized, $image, 0, 0, 0, 0, $maxWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $resized;
        }

        ob_start();
        switch ($extension) {
            case 'png':
                // PNG quality is compression level 0-9
                imagepng($image, null, (int) round((100 - $quality) / 11.11));
                break;
            case 'webp':
                imagewebp($image, null, $quality);
                break;
            default:
                imagejpeg($image, null, $quality);
        }
        $contents = ob_get_clean();
        imagedestroy($image);

        Storage::disk('public')->put($fileName, $contents);

        return $fileName;
    }
}