<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;

    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function handleGoogleCallback()
    // {
    //     $user = Socialite::driver('google')->user();

    //     // Handle the user data as needed

    //     return redirect()->route('home');
    // }

    // public function showOTPForm()
    // {
    //     return view('auth.otp');
    // }

    // public function verifyOTP(Request $request)
    // {
    //     $this->validate($request, [
    //         'otp' => 'required',
    //     ]);

    //     if (OTP::validate($request->otp, auth()->user())) {
    //         // OTP is valid
    //         return redirect()->route('home');
    //     }

    //     return redirect()->back()->with('error', 'Invalid OTP');
    // }

    function login() {
        return view('auth.login');;
    }
}
