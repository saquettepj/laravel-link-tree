<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login() {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);





        $query = User::query();
        $user = $query->firstWhere('email', request()->email);

        if ($user and Hash::check(request()->password, $user->password)) {
            auth()->login($user);

            return to_route('dashboard');
        }

        return back()->with(['message' => 'Cadastro não encontrado']);
    }
}
