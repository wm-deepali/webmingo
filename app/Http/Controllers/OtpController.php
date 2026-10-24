<?php

namespace App\Http\Controllers;

use App\Services\Enquiry\EnquiryNotifier;
use App\Services\Otp\OtpService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class OtpController extends Controller
{
    /**
     * POST /otp/verify — check the OTP; on success notify admin (Yes) + send the thank-you email.
     */
    public function verify(Request $request, OtpService $otp): JsonResponse
    {
        $data = $request->validate([
            'token' => 'required|string|max:64',
            'otp' => 'required|string|max:10',
        ]);

        $result = $otp->verify($data['token'], $data['otp']);

        if ($result['status'] === 'verified') {
            // 'record' is present only for the one request that completed the verification
            if (!empty($result['record'])) {
                EnquiryNotifier::resolve($result['record'], true);
            }

            return response()->json(['success' => true] + Arr::except($result, ['record']));
        }

        return response()->json(['success' => false] + $result, 422);
    }

    /**
     * POST /otp/resend — send a fresh OTP (cooldown + resend limit enforced in the service).
     */
    public function resend(Request $request, OtpService $otp): JsonResponse
    {
        $data = $request->validate([
            'token' => 'required|string|max:64',
        ]);

        $result = $otp->resend($data['token']);

        if ($result['status'] === 'resent') {
            return response()->json(['success' => true] + $result);
        }

        return response()->json(['success' => false] + $result, 422);
    }

    /**
     * POST /otp/skip — visitor continues without verifying.
     * The enquiry is already saved; admin is notified with Mobile Verified: No.
     */
    public function skip(Request $request, OtpService $otp): JsonResponse
    {
        $data = $request->validate([
            'token' => 'required|string|max:64',
        ]);

        $row = $otp->expire($data['token']);

        if ($row && $row->verifiable) {
            EnquiryNotifier::resolve($row->verifiable, (bool) $row->verified_at);
        }

        return response()->json([
            'success' => true,
            'message' => "Thanks! We've received your details and will get back to you shortly.",
        ]);
    }
}