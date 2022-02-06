<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function loginProccess(Request $request)
    {
        $validated = $request->validate([
            'telepon' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 1) {
                return redirect()->intended('admin');
            } else {
                return redirect()->intended('member');
            }
        } else {
            return back()->with('message', "Swal.fire('Ooops!','Login gagal, harap periksa kembali!','error')")->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('login');
    }
}
