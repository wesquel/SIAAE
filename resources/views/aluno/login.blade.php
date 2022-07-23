@extends('layouts.loginLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/aluno/login_aluno.css') }}"
@endpush

@section('content')
    <div class="div-form-login">
        <img src="{{asset('images/logo_siaae_cinza.png')}}">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="flex-column" method="POST" action="{{ route('login.aluno') }}">
            @csrf
            <input id="matricula" name="matricula" type="text" class="form-control" value="{{old('matricula')}}" placeholder="Matrícula">

            <input id="password" name="password" type="password" class="form-control" value="{{old('password')}}" placeholder="Senha">

            <button type="submit" class="system-button system-button-vermelho">Entrar</button>
        </form>
    </div>
@endsection

