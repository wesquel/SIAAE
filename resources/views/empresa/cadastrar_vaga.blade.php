@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastrarvaga.css') }}">
@endpush

@section('content')
    <div id="div-content">
    <div class="div-title">
        <p class="col">Cadastra Vaga</p>
        <div class="div-button-previous">
            <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                    <i class="icon icon-arrow-left2"></i>Voltar
                </button>
            </a>
        </div>
    </div>
    <div class="divisao-superior col-lg" id="div-page-content">
        <div class="divisao-inputs">
            <div class="col ladoesq" id="conteudoesq">
                <div id="linha-vertical">
                    <div class="input-contain">
                        <input class="input-new" name="cadastro" type="text" value="{{Auth::user()->nome_empresa}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">Nome empresa:</div>
                        </label>
                    </div>
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{Auth::user()->CPF_CNPJ}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">CPF/CNPJ:</div>
                        </label>
                    </div>
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{Auth::user()->telefone}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">Telefone:</div>
                        </label>
                    </div>
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{Auth::user()->email}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">Email:</div>
                        </label>
                    </div>
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{$endereco[0]->cep}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">CEP:</div>
                        </label>
                    </div>
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{$endereco[0]->estado}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">Estado:</div>
                        </label>
                    </div>
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{$endereco[0]->cidade}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">Cidade:</div>
                        </label>
                    </div>
                    <div class="div-bairro-num">
                        <div class="input-contain bairro-input">
                            <input class="input-new" name="cadastro" type="text" value="{{$endereco[0]->bairro}}" disabled>
                            <label class="placeholder-text" for="cadastro">
                                <div class="text">Bairro:</div>
                            </label>
                        </div>
                        <div class="input-contain linha-vertical numero-input">
                            <input class="input-new" name="cadastro" type="text" value="{{$endereco[0]->numero}}" disabled>
                            <label class="placeholder-text" for="cadastro">
                                <div class="text">Número:</div>
                            </label>
                        </div>
                    </div>
                    @if($endereco[0]->logradouro)
                    <div class="input-contain linha-vertical">
                        <input class="input-new" name="cadastro" type="text" value="{{$endereco[0]->logradouro}}" disabled>
                        <label class="placeholder-text" for="cadastro">
                            <div class="text">Logradouro:</div>
                        </label>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col ladodir" id="conteudodir">
                <form method="POST" action="{{route('cadastrar.vaga.empresa.post')}}">
                    @csrf
                    <h4>A vaga é de inclusão?</h4>
                    <label class="container">Sim
                        <input id="inclusãoTtrue" value="sim" type="radio" name="radio_inclusao">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Não
                        <input id="inclusãoFalse" value="nao" type="radio" name="radio_inclusao" checked>
                        <span class="checkmark"></span>
                    </label>

                    <h4>Qual é o tipo da vaga?</h4>
                    <label class="container1">Estágio
                        <input id="tipoEstagio" value="estagio" type="radio" name="radio_tipo" checked>
                        <span class="checkmark1"></span>
                    </label>
                    <label class="container1">Aprendizagem
                        <input id="tipoAprendizagem" value="aprendizagem" type="radio" name="radio_tipo">
                        <span class="checkmark1"></span>
                    </label>

                    <button type="submit" class="system-button system-button-verde botao-cadastrar-vaga">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
