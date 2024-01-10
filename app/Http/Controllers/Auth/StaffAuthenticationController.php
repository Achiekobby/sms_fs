<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\AuthenticationUtility;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class StaffAuthenticationController extends Controller
{
    public function staff_index()
    {
        return view("auth.staff-login");
    }

    public function login_staff(): RedirectResponse
    {
        $credentials = request()->validate([
            "email" => "required|string|email",
            "password" => "required|string|min:8",
        ]);

        return AuthenticationUtility::login($credentials, 'staff', "staff/dashboard");
    }

    public function logout(): RedirectResponse
    {
        return AuthenticationUtility::logout("staff");
    }
}
