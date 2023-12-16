<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Api\ValidateRequest;
use App\Mail\OTPEmail;

class VerifyController extends Controller
{
    public function verify(ValidateRequest $request)
    {
        $value = $request->input('email') ?? $request->input('phone');
        
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $email = $value;
        }

        if (preg_match('/^[0-9]{10,15}$/', $value)) {
            $phone = $value;
        }

        $message = isset($email) ? $this->getOTPFromEmail($email) : $this->getOTPFromPhone($phone);

        return response()->json($message, 200);
    }

    private function getOTPFromEmail(string $email) {
        
        $otp = rand(100000, 999999);
        Mail::to($email)->send(new OTPEmail($otp));
        
        return [
            'otp' => $otp
        ];
        
    }

    private function getOTPFromPhone(int $phone) {

        $accountSid = 'AC9241a447db8259b6e224e753ed5a9ce1';
        $authToken = '843f4d787c95d2d4d5e3c79d31f94516';
        $twilioNumber = '+18326043949';
        $pwd = 'IEHFnJKq52L1k8mC';
        $mobileNumber = '+918208951282';

        $otp = rand(100000, 999999);

        $client = new Client($accountSid, $authToken);

        $message = $client->messages->create(
            $mobileNumber,
            [
                'from' => $twilioNumber,
                'body' => 'Your OTP is: ' . $otp,
            ]
        );

        return [
            'otp' => $otp
        ];
    }
}
