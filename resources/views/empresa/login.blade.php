@extends('layouts.loginLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/login_empresa.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('css/icons/icomoon.css') }}">--}}
@endpush

@section('content')
    <div class="div-form-login">

        <img src="{{asset('images/logo_siaae_cinza.png')}}">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login.empresa') }}" class="flex-column">
            @csrf
            <input id="CPF_CNPJ" name="CPF_CNPJ" value="{{old('CPF_CNPJ')}}" type="text" class="form-control CPF_CNPJ" placeholder="CPF/CNPJ">

            <input id="password" name="password" type="password" class="form-control" aria-describedby="emailHelp" placeholder="Senha">

            <div id="div-button">
                <button type="submit" class="system-button system-button-verde-escuro">Entrar</button>
                <button type="button" class="system-button system-button-branco" onclick="openModalRegistrar()">Registrar-se</button>
            </div>
        </form>
    </div>

    <div id="modal-form-registrar" >
        <div id="div-form-registrar">
            <div id="header-modal-registrar" class="row">
                <i class="icon icon-cross" onclick="closeModalRegistrar()"></i>
            </div>
            <h4>Cadastrar Empresa</h4>
            <form method="POST" action="{{ route('registro.empresa') }}">
                @csrf
                <div class="row">
                    <div id="div-input-logo">
                        <div class='input-wrapper'>
                            <label id="label-input-logo" for='input-logo-empresa'>
                                <img src="{{ asset('images/logomarca_siaae_cinza.png') }}">
                            </label>
                            <label id="label-text-input-logo" for="input-logo-empresa">Alterar</label>
                            <input id='input-logo-empresa' type='file' value='' />
                            <span id='file-name'></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Dados</label>
                        <input type="text" class="system-input" name="nome_responsavel" placeholder="NOME DO RESPONSÁVEL" value="{{old('nome_responsavel')}}" required>
                        <input type="text" class="system-input" name="nome_empresa" placeholder="NOME EMPRESA" value="{{old('nome_empresa')}}" required>

                        <input type="text" class="system-input CPF_CNPJ" name="CPF_CNPJ" placeholder="CPF ou CNPJ" value="{{old('CPF_CNPJ')}}" maxlength="14" required>
                        <input type="tel" onkeydown="return mascaraTelefone(event)" class="system-input" maxlength="15" id="telefone" name="telefone" placeholder="TELEFONE" value="{{old('telefone')}}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Endereço</label>
                        <input type="text" class="system-input" name="cep" placeholder="CEP" value="{{old('cep')}}" required>
                        <input type="text" class="system-input" name="estado" placeholder="ESTADO" value="{{old('estado')}}" required>
                        <input type="text" class="system-input" name="cidade" placeholder="CIDADE" value="{{old('cidade')}}" required>
                        <div class="row" style="margin-left: 0px; width: 100%">
                            <input id="bairro-input" type="text" class="system-input col-md-8" name="bairro" placeholder="BAIRRO" value="{{old('bairro')}}" required>
                            <input id="numero-input" type="text" class="system-input col-md-4" name="numero" placeholder="NÚMERO" value="{{old('numero')}}" required>
                        </div>
                        <input type="text" class="system-input" name="logradouro" placeholder="LOGRADOURO" value="{{old('logradouro')}}" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <input type="email" class="system-input" name="email" placeholder="EMAIL" value="{{old('email')}}" required>
                        <input type="email" class="system-input" name="email_confirmation" placeholder="CONFIRMAR EMAIL" value="{{old('email_confirmation')}}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="system-input" name="password" placeholder="SENHA" required>
                        <input type="password" class="system-input" name="password_confirmation" placeholder="CONFIRMAR SENHA" required>
                    </div>
                </div>
                <button type="submit" class="system-button system-button-verde" >Registrar</button>
            </form>
        </div>
    </div>
    <script src="{{asset('js/mask.js')}}"></script>
    <script>

        let modalFormRegistrar = document.getElementById('modal-form-registrar');
        let openModalRegistrar = function () {
            modalFormRegistrar.style.display = 'flex';
        }
        let closeModalRegistrar = function() {
            modalFormRegistrar.style.display = 'none';
        }

        var fileInput = document.getElementById('input-curriculo');

        fileInput.addEventListener('input', (event) => {
            let filename = "Arquivo adicionado";
            let regexFileName = /\\([^\\]*\..*)/.exec(event.target.value);
            if (regexFileName.length >= 1) {
                filename = regexFileName[1]
            }
            fileNameLabel.textContent = filename;
        });
    </script>

@endsection
