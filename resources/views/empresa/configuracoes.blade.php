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
    <form method="POST" class="container" action="{{ route('configuracoes.empresa.put') }}">
        <!--Verificar rota-->
        @csrf
        @method('PUT')
        <div class="row" >
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
            <div class="col">
                <label>Dados</label>

                <div class="group">
                    <input name="nome_empresa" class="input-siaae @error('nome_empresa') input-error-siaae @enderror" value="{{Auth::user()->nome_empresa}}" required>
                    <label class="label-siaae">Nome da empresa:</label>
                </div>
                @error('nome_empresa')
                    <div class="error-text">{{ 'O nome da empresa deve ter no mínimo 5 caracteres.' }}</div>
                @enderror

                <div class="group next-input-siaae">
                    <input name="nome_responsavel" class="input-siaae @error('nome_responsavel') input-error-siaae @enderror" value="{{Auth::user()->nome_responsavel}}" maxlength="15" required>
                    <label class="label-siaae">Nome do Responsavel:</label>
                </div>
                @error('nome_responsavel')
                    <div class="error-text">{{ 'Formato do nome do responsavel incorreto.' }}</div>
                @enderror

                <div class="group next-input-siaae">
                    <input id="telefone" name="telefone" onkeydown="return mascaraTelefone(event)" maxlength="15" class="input-siaae @error('telefone') input-error-siaae @enderror" value="{{Auth::user()->telefone}}" required>
                    <label class="label-siaae">Telefone:</label>
                </div>
                @error('telefone')
                    <div class="error-text">{{ 'Formato do telefone incorreto.' }}</div>
                @enderror

                <div class="group next-input-siaae">
                    <input name="email" type="email" class="input-siaae @error('email') input-error-siaae @enderror" value="{{Auth::user()->email}}" required>
                    <label class="label-siaae">Email:</label>
                </div>
                @error('email')
                    <div class="error-text">{{ 'Email incorreto.' }}</div>
                @enderror
            </div>
            <div class="col">
                <label>Endereço</label>

                <div class="group">
                    <input id="cep" name="cep" class="input-siaae @error('cep') input-error-siaae @enderror" value="{{Auth::user()->endereco->cep}}" required>
                    <label class="label-siaae">CEP:</label>
                </div>
                @error('cep')
                    <div class="error-text">{{ 'Formato do CEP incorreto.' }}</div>
                @enderror

                <div class="row next-input-siaae" style="">
                    <div class="col">
                        <div class="group col">
                            <input name="cidade" class="input-siaae @error('cidade') input-error-siaae @enderror" value="{{Auth::user()->endereco->cidade}}" required>
                            <label class="label-siaae">Cidade:</label>
                        </div>
                        @error('cidade')
                        <div class="error-text">{{ 'Nome da cidade incorreto.' }}</div>
                        @enderror
                    </div>

                    <div class="group col-md-4">
                        <div class="group col">
                            <input name="estado" class="input-siaae @error('estado') input-error-siaae @enderror" value="{{Auth::user()->endereco->estado}}" required>
                            <label class="label-siaae">Estado:</label>
                        </div>
                        @error('estado')
                            <div class="error-text">{{ 'Error estado.' }}</div>
                        @enderror
                    </div>

                </div>


                <div class="row next-input-siaae">

                    <div class="col">
                        <div class="group col">
                            <input name="bairro" class="input-siaae @error('bairro') input-error-siaae @enderror" value="{{Auth::user()->endereco->bairro}}" required>
                            <label class="label-siaae">Bairro:</label>
                        </div>
                        @error('bairro')
                            <div class="error-text">{{ 'Bairro incorreto.' }}</div>
                        @enderror
                    </div>

                    <div class="group col-md-4">
                        <div class="group col">
                            <input name="numero" class="input-siaae @error('numero') input-error-siaae @enderror" value="{{Auth::user()->endereco->numero}}" required>
                            <label class="label-siaae">Número:</label>
                        </div>
                        @error('numero')
                            <div class="error-text">{{ 'Número incorreto.' }}</div>
                        @enderror
                    </div>

                </div>
                <div class="group next-input-siaae">
                    <input name="logradouro" class="input-siaae @error('logradouro') input-error-siaae @enderror" value="{{Auth::user()->endereco->logradouro}}">
                    <label class="label-siaae">Logradouro:</label>
                </div>
                @error('logradouro')
                <div class="error-text">{{ 'Error.' }}</div>
                @enderror
            </div>
        </div>

        <div class="row" style="margin-top: 1em;">
            <div class="col-md-6">
                <label>Alterar Senha</label>

                <div class="group">
                    <input name="password_atual" class="input-siaae @error('password_atual') input-error-siaae @enderror">
                    <label class="label-siaae">Senha atual:</label>
                </div>
                @error('password_atual')
                    <div class="error-text">{{ 'Senha atual incorreta.' }}</div>
                @enderror

                <div class="group next-input-siaae">
                    <input name="password" class="input-siaae @error('password') input-error-siaae @enderror">
                    <label class="label-siaae">Senha:</label>
                </div>
                @error('password')
                    <div class="error-text">{{ 'As senhas não coencidem.' }}</div>
                @enderror

                <div class="group next-input-siaae">
                    <input name="password_confirmation" class="input-siaae @error('password_confirmation') input-error-siaae @enderror">
                    <label class="label-siaae">Confirmar Senha:</label>
                </div>
                @error('password_confirmation')
                    <div class="error-text">{{ 'As senhas não coencidem.' }}</div>
                @enderror

            </div>
        </div>
        <button type="submit" class="system-button system-button-verde espaco-botao">Atualizar</button>
    </form>
    </div>


    <script src="{{asset('js/mask.js')}}"></script>
    <script>

        $(document).ready(function(){
            $("#cep").mask("99999-999");
        });

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
