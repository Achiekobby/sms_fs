<?php

namespace App\Helpers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticationUtility
{

    public static function logout(string $guard): RedirectResponse
    {
        try {
            Auth::guard($guard)->logout();

            request()->session()->invalidate();

            request()->session()->regenerateToken();

            return redirect('/');

        } catch (\Exception $e) {
            return redirect()->back()->with("errors", $e->getMessage());
        }

    }

    public static function login(array $request_data, string $guard, string $dashboard): RedirectResponse
    {
        try {
            if (Auth::guard($guard)->attempt($request_data)) {

                request()->session()->regenerate();

                return redirect()->intended($dashboard);
            }
            return back()->withErrors([
                "email" => "The provided credentials do not match our records.",
                "password" => "Password is too short",
            ])->onlyInput("email");

        } catch (\Exception $e) {
            return redirect()->back()->with("errors", $e->getMessage());
        }
    }
}
