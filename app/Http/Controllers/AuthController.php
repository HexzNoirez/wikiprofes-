<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    $user = User::where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        // Manually log in the user
        Auth::login($user, $request->filled('remember'));

        return back();
    } else {
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);}
    }

    protected function logout(Request $request)
    {
        Auth::logout();
        return redirect()->back()->with('status', 'Logged out successfully');
    }
}
