<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\AuthenticationUtility;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class GuardianAuthentication extends Controller
{
    public function guardian_index()
    {
        return view("auth.guardian-login");
    }

    public function login_guardian(): RedirectResponse
    {
        $credentials = request()->validate([
            "email" => "required|email",
            "password" => "required|string|min:8",
        ]);
        return AuthenticationUtility::login($credentials, 'guardian', "guardian/dashboard");
    }

    public function logout(): RedirectResponse
    {
        return AuthenticationUtility::logout('guardian');
    }
}
