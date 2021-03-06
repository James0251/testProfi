<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller {

    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Форма входа в личный кабинет
     */
    public function login() {
        return view('auth.login');
    }

    /**
     * Аутентификация пользователя
     */
    public function authenticate(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            /*
             * Адрес почты не подтвержден
             */
            if (is_null(Auth::user()->email_verified_at)) {
                Auth::logout();
                return redirect()
                    ->route('verify-message')
                    ->withErrors('Адрес почты не подтвержден');
            }
            return redirect()
                ->route('open')
                ->with('success', 'Вы вошли на главную страницу');
        }

        return redirect()
            ->route('login')
            ->withErrors('Неверный логин или пароль');
    }

    /**
     * Выход из личного кабинета
     */
    public function logout() {
        Auth::logout();
        return redirect()
            ->route('login')
            ->with('success', 'Вы вышли из главной страницы');
    }
}
