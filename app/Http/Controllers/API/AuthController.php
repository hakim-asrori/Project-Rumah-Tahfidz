<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'password' => 'required'
        ]);

        $validated['role'] = 2;
        $validated['password'] = Hash::make($request->password);

        $cek = User::create($validated);

        if ($cek) {
            $json = array(
                'status' => 1,
                'message' => 'Anda berhasil registrasi!'
            );
        } else {
            $json = array(
                'status' => 0,
                'message' => 'Anda gagal registrasi!'
            );
        }

        return response()->json($json);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'telepon' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            $json = array(
                'role' => Auth::user()->role,
                'status' => 1,
                'message' => 'Anda berhasil login!'
            );
        } else {
            $json = array(
                'status' => 0,
                'message' => 'Anda gagal login!'
            );
        }

        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        $json = array(
            'status' => 1,
            'message' => 'Anda berhasil keluar'
        );

        return response()->json($json);
    }
}
