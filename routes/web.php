<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Регистрация, вход в ЛК, восстановление пароля
// форма регистрации
Route::get('register', 'Auth\RegisterController@register')->name('register');
// создание пользователя
Route::post('register', 'Auth\RegisterController@create')->name('create');
// форма входа
Route::get('login', 'Auth\LoginController@login')->name('login');
// аутентификация
Route::post('login', 'Auth\LoginController@authenticate')->name('auth');
// выход
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// форма ввода адреса почты
Route::get('forgot-password', 'Auth\ForgotPasswordController@form')->name('forgot-form');
// письмо на почту
Route::post('forgot-password', 'Auth\ForgotPasswordController@mail')->name('forgot-mail');
// форма восстановления пароля
Route::get(
        'reset-password/token/{token}/email/{email}',
        'Auth\ResetPasswordController@form')->name('reset-form');
// восстановление пароля
Route::post('reset-password', 'Auth\ResetPasswordController@reset')
    ->name('reset-password');
// сообщение о необходимости проверки адреса почты
Route::get('verify-message', 'Auth\VerifyEmailController@message')
    ->name('verify-message');
// подтверждение адреса почты нового пользователя
Route::get('verify-email/token/{token}/id/{id}', 'Auth\VerifyEmailController@verify')
    ->where('token', '[a-f0-9]{32}')
    ->where('id', '[0-9]+')
    ->name('verify-email');




// Переход на страницу /open
Route::get('/open', 'User\IndexController')->name('open');
// Переход на страницу /lock
Route::get('/lock', 'User\IndexController@lock')->name('lock');


// Карты
Route::get('/mapOne', 'MapsController@mapOne')->name('mapOne');
Route::get('/mapTwo', 'MapsController@mapTwo')->name('mapTwo');
Route::get('/mapThree', 'MapsController@mapThree')->name('mapThree');

