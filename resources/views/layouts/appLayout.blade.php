<html lang="en">

<head>
    <meta charset="utf-8">

    <title>{{ $pagetitle ?? 'SIAAE - Sistema Integrado de Estagio'}}</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre ExtraBold&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Futura+Bk BT&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{--    <link rel="stylesheet" href="{{asset('css/Aluno/termos_uso/app.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('custom-styles')
</head>

<body>

    <div class="div-main">
        @yield('content')
    </div>

</body>
</html>
