<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\AuthenticationUtility;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function admin_index()
    {
        return view("auth.admin-login", ['u_type' => "admin"]);
    }

    public function login_admin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        return AuthenticationUtility::login($credentials, 'admin', "admin/dashboard");
    }

    public function logout(): RedirectResponse
    {
        return AuthenticationUtility::logout('admin');
    }
}
