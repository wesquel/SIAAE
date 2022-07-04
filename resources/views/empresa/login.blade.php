@extends('layouts.loginLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/login_empresa.css') }}">
@endpush

@section('content')
    <div class="div-form-login">

        <img src="{{asset('images/logo_siaae_cinza.png')}}">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login.empresa') }}" class="flex-column">
            @csrf
            <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" class="form-control" placeholder="CPF/CNPJ">

            <input id="password" name="password" type="password" class="form-control" aria-describedby="emailHelp" placeholder="Senha">

            <div id="div-button">
                <button type="submit" class="system-button system-button-verde-escuro">Entrar</button>
            </div>
        </form>
        <a href="/empresa/registro" class="system-button system-button-branco">Registrar-se</a>
    </div>
@endsection
