<html lang="en">

<head>
    <meta charset="utf-8">

    <title>{{ $pagetitle ?? 'SIAAE - Sistema Integrado de Estagio'}}</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre ExtraBold&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Futura+Bk BT&display=swap" rel="stylesheet">

    {{--    <link rel="stylesheet" href="{{asset('css/Aluno/termos_uso/app.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('custom-styles')
</head>

<body>

@extends('components.header')

<div class="div-main">
    @yield('content')
</div>

</body>
</html>
