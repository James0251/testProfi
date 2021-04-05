@extends('layout.site', ['title' => 'Lock'])

@section('content')
    <h1>Добрый день {{ auth()->user()->name }}-Lock!</h1>
@endsection
