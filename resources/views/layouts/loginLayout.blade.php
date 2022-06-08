<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $pagetitle ?? 'SIAAE - Sistema Integrado de Estagio'}}</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">

    {{--    <link rel="stylesheet" href="{{asset('css/Aluno/termos_uso/app.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/login.css') }}">

    @stack('custom-styles')
</head>

<body>

    <div class="div-main">
        @extends('components.header')

        @yield('content')
    </div>

</body>
</html>
