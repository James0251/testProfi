@extends('layout.site', ['title' => 'Open'])

@section('content')
    <h1>Добрый день {{ auth()->user()->name }}!</h1>
@endsection
