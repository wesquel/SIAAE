@extends('layouts.loginLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/aluno/login_aluno.css') }}"
@endpush

@section('content')
    <div class="div-form-login">
        <img src="{{asset('images/logo_siaae_cinza.png')}}">
        @csrf
        <form class="flex-column" method="POST" action="{{ route('login') }}">

            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Matrícula">

            <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Senha">

            <a href="/termos_uso">
                <button type="submit" class="system-button system-button-vermelho">Entrar</button>
            </a>
        </form>
    </div>
@endsection

