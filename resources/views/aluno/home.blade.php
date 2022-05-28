@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/icons/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home_aluno.css') }}">
@endpush

@section('content')
    <div class="row">
        <div id="div-nav" class="col-md-3">
            <nav >
                <img src="{{ asset('images/logo_siaae.png') }}" height="50px"/>

                <h4>Bem vindo, {{ $alunoNome ?? 'Fulaninho' }}!</h4>
                <ul>
                    <li>
                        <a href="{{ route('candidaturas') }}"><span class="icon icon-plus"></span>CADASTRAR-SE À VAGAS</a>
                    </li>
                    <li>
                        <a><span class="icon icon-list"></span>LISTA DE VAGAS</a>
                    </li>
                    <li>
                        <a><span class="icon icon-cog"></span>CONFIGURAÇÔES</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="div-page-content" class="col-md-8">
            <img src="{{ asset('images/ilustracao_home.png') }}" width="600px" height="400px">
        </div>
    </div>
@endsection
