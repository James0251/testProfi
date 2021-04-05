@extends('layout.site', ['title' => 'Вход на главную страницу'])

@section('content')
    <h1>Вход на главную страницу</h1>
    <form method="post" action="{{ route('auth') }}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Адрес почты"
                   required maxlength="255" value="{{ old('email') ?? '' }}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Ваш пароль"
                   required maxlength="255" value="">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                Запомнить меня
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info text-white">Войти</button>
        </div>
        <a href="{{ route('forgot-form') }}">Забыли пароль?</a>
    </form>
@endsection
