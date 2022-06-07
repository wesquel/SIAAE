<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>SIAAE - Login Aluno</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{asset('css/Aluno/login_aluno/app.css')}}" />--}}
    <link rel="stylesheet" href="{{asset('css/login_aluno.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background: #E5E5E5;
        }
    </style>

</head>

<body>

@extends('components.header')

<div class="div-main">
    <div class="div-form-login">

        <img src="{{asset('images/logo_siaae_cinza.png')}}">
        <form>
            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Matrícula">

            <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Senha">

            <a href="/termos_uso">
                <button type="submit" class="system-button system-button-vermelho">Entrar</button>
            </a>
        </form>
    </div>

</div>
</body>
</html>
