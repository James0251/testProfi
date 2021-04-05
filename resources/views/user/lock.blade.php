<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Карты</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://planograph.net/js/run.js" defer></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>

<body>

<div id="mainmenu">
    <ul>
        <li>
            <a href="{{ route('mapOne') }}" class="btn btn-primary">Карта 1</a>
        </li>
        <li>
            <a href="{{ route('mapTwo') }}" class="btn btn-primary">Карта2</a>
        </li>
        <li>
            <a href="{{ route('mapThree') }}" class="btn btn-primary">Карта3</a>
        </li>
    </ul>
</div>

@yield('content')


{{-- Делал так, не работает!!!!! Не знаю почему, одну карту показывает хорошо, вторую - сильно увеличивает, третью не показывает вообще. Не могу понять, где и в чем ошибка.
        Возможно у меня кривые руки потому, что я не знаю JS и почему остальные карты неправильно подгружаются или не подгружаются вообще. --}}
{{--<div class="container-fluid">--}}
{{--    <ul class="nav nav-tabs">--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link active" data-toggle="tab" href="#mapOne">Карта 1</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="tab" href="#mapTwo">Карта 2</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="tab" href="#mapThree">Карта 3</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--    <div class="tab-content p-3">--}}
{{--        <div class="tab-pane fade show active" id="mapOne">--}}
{{--            <div data-planograph="ddd077efcc69863f6dbac4acf778ae4b-khirurgiya1102212250499"></div>--}}
{{--        </div>--}}
{{--        <div class="tab-pane fade" id="mapTwo">--}}
{{--            <div data-planograph="ddd077efcc69863f6dbac4acf778ae4b-onkologiya1102212250499"></div>--}}
{{--        </div>--}}
{{--        <div class="tab-pane fade" id="mapThree">--}}
{{--            <div data-planograph="ddd077efcc69863f6dbac4acf778ae4b-dermatologiya1102212251499"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

