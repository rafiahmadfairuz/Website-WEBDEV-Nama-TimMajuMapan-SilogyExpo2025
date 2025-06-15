<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('Auth.register');
    }

    public function storeRegister(Request $request)
    {
        try {
            $validated = $request->validate([
                'username' => 'required|string|min:3|max:20|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $user = User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            Auth::login($user);

            return redirect()->route('home')
                ->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->username . '.');
        } catch (ValidationException $e) {
            return back()
                ->with('error', 'Validasi gagal. Mohon cek input Anda.')
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Gagal register: ' . $e->getMessage());

            return back()
                ->with('error', 'Terjadi kesalahan saat registrasi. Silakan coba lagi nanti.' . $e->getMessage())
                ->withInput();
        }
    }

    public function viewLogin()
    {
        return view('Auth.login');
    }

    public function storeLogin(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);

            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                return redirect()->intended(route('home'))
                    ->with('success', 'Berhasil login! Selamat datang kembali.');
            }

            return back()
                ->with('error', 'Email atau password salah.')
                ->withInput();
        } catch (ValidationException $e) {
            return back()
                ->with('error', 'Validasi gagal. Mohon cek input Anda.')
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());

            return back()
                ->with('error', 'Terjadi kesalahan saat login. Silakan coba lagi nanti.')
                ->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda berhasil logout.');
    }
}
