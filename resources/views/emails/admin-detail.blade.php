<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
</head>
<body style="margin:0;padding:24px 12px;background:#f1f2f4;font-family:Arial,Helvetica,sans-serif;color:#202223;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:620px;margin:0 auto;background:#ffffff;border:1px solid #e3e5e8;border-radius:8px;overflow:hidden;">
        <tr>
            <td style="background:#303d89;color:#ffffff;padding:18px 24px;font-size:13px;letter-spacing:.04em;text-transform:uppercase;">
                {{ $brand }}
            </td>
        </tr>
        <tr>
            <td style="padding:24px 24px 8px;">
                <div style="font-size:18px;font-weight:700;line-height:1.4;">{{ $title }}</div>
                <div style="margin-top:12px;">
                    <span style="font-size:12px;font-weight:700;color:#6d7175;margin-right:6px;">Mobile Verified:</span>
                    @if($mobileVerified)
                        <span style="display:inline-block;font-size:12px;font-weight:700;padding:3px 10px;border-radius:20px;background:#e3f1ec;color:#007a5e;border:1px solid #9fcfc3;">Yes</span>
                    @else
                        <span style="display:inline-block;font-size:12px;font-weight:700;padding:3px 10px;border-radius:20px;background:#fce8e8;color:#c0392b;border:1px solid #f5b8b8;">No</span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding:16px 24px 24px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;font-size:14px;">
                    @foreach($rows as $label => $value)
                        @if(filled($value))
                            <tr>
                                <td style="width:36%;padding:10px 12px;border:1px solid #e3e5e8;background:#fafafa;font-weight:700;color:#6d7175;vertical-align:top;">{{ $label }}</td>
                                <td style="padding:10px 12px;border:1px solid #e3e5e8;vertical-align:top;line-height:1.6;">{!! nl2br(e($value)) !!}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding:14px 24px;background:#fafafa;border-top:1px solid #e3e5e8;font-size:12px;color:#8c9196;">
                Automated notification from {{ $brand }}.
            </td>
        </tr>
    </table>
</body>
</html>