@extends('layouts.applayout')

@push('custom-styles')

    <link rel="stylesheet" href="{{ asset('css/empresa/configuracoes_empresa.css') }}">
@endpush

@section('content')


    <div class="div-title">
        <p class="col">Informações da empresa</p>
        <div class="div-button-previous">
            <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                    <i class="icon icon-arrow-left2"></i>Voltar
                </button>
            </a>
        </div>
    </div>

    <div class="container">
    <form method="POST" class="container" action="{{ route('configuracoes.empresa') }}">
                                                                    <!--Verificar rota-->
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
                <input type="text" class="system-input" value="{{Auth::user()->nome_empresa}}" name="nome_empresa" placeholder="NOME EMPRESA" required>
                <input type="text" class="system-input" value="{{Auth::user()->nome_responsavel}}"  name="nome_responsavel" placeholder="NOME DO RESPONSÁVEL" required>
                <input type="tel" class="system-input" name="telefone" value="{{Auth::user()->telefone}}"  placeholder="TELEFONE" required>
                <input type="text" class="system-input" name="email" value="{{Auth::user()->email}}" placeholder="EMAIL" required>
            </div>
            <div class="col-md-6">
                <label>Endereço</label>
                <input type="text" class="system-input" name="cep" value="{{Auth::user()->endereco->cep}}" placeholder="CEP" required>
                <div class="row" style="margin-left: 0px; width: 100%">
                    <input id="cidade-input" type="text" class="system-input col-md-8" name="cidade" value="{{Auth::user()->endereco->cidade}}" placeholder="CIDADE" required>
                    <input id="estado-input" type="text" class="system-input col-md-4" name="estado" value="{{Auth::user()->endereco->estado}}" placeholder="ESTADO" required>
                </div>
                <div class="row" style="margin-left: 0px; width: 100%">
                    <input id="bairro-input" type="text" class="system-input col-md-8" name="bairro" value="{{Auth::user()->endereco->bairro}}" placeholder="BAIRRO" required>
                    <input id="numero-input" type="text" class="system-input col-md-4" name="numero" value="{{Auth::user()->endereco->numero}}" placeholder="NÚMERO" required>
                </div>
                <input type="text" class="system-input" name="logradouro" value="{{Auth::user()->endereco->logradouro}}" placeholder="LOGRADOURO" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Alterar Senha</label>
                <input type="password" class="system-input" name="password_atual" placeholder="SENHA ATUAL" required>
                <input type="password" class="system-input" name="password" placeholder="SENHA" required>
                <input type="password" class="system-input" name="password_confirmation" placeholder="CONFIRMAR SENHA" required>
            </div>
        </div>
        <button type="submit" class="system-button system-button-verde espaco-botao">Atualizar</button>
    </form>
    </div>

    <script>

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
