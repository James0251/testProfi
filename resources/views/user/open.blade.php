@extends('layout.site', ['title' => 'Open'])

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="text-center">Заголовок</h2>
        </div>
        <div class="card-body">
            <p class="mt-3 mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium asperiores consectetur cumque, deserunt earum, eligendi enim fuga iste laborum, maiores neque numquam obcaecati omnis placeat sapiente ut veniam voluptatem!
            </p>
        </div>

        {{-- Только для зарегистрированных пользователей --}}
        @if(auth()->check())
            <div class="card-footer">
                <div class="clearfix">
                    <span class="float-right">
                        <a href="{{ route('lock') }}" class="btn btn-primary">
                            Переход к картам
                        </a>
                        <br>
                    </span>
                </div>
            </div>
        @endif
    </div>
@endsection
