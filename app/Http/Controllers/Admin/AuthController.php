<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)
            ->orWhere('email', $request->username)
            ->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()
                ->withInput()
                ->with('error', 'Username atau password salah.');
        }

        session([
            'admin_id' => $admin->id_admin,
            'admin_username' => $admin->username,
            'admin_logged_in' => true,
        ]);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Login berhasil.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget([
            'admin_id',
            'admin_username',
            'admin_logged_in',
        ]);

        return redirect()->route('admin.login');
    }
}
