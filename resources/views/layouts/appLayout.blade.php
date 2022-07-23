<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $pagetitle ?? 'SIAAE - Sistema Integrado de Estagio'}}</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre ExtraBold&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Futura+Bk BT&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/icomoon.css') }}">
    <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon-siaae.ico')}}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    @stack('custom-styles')
</head>

<body>

<div class="div-main row">

    @if(isset($userType) && $userType == 'empresa')
        @include('components.empresaNavBar')
    @else
        @include('components.alunoNavBar')
    @endif


    <div id="div-page-content" class="col-md-9">
        @yield('content')
    </div>
</div>

</body>
</html>
