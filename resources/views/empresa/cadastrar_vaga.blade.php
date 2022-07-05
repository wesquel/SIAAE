@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastrarvaga.css') }}">
@endpush

@section('content')
    <div class="divisao-superior" id="div-page-content">
        <h2 class="title-left">Cadastrar vaga</h2>
        <div class="divisao-inputs">
            <div class="col ladoesq" id="conteudoesq">
                <div id="linha-vertical">
                    <input class="input-style form-control" name="cadastro" type="text" placeholder="{{Auth::user()->nome_empresa}}" disabled>
                    <input class="espacamento-inputs input-style form-control" id="CPF_CNPJ" name="cadastro" type="text" placeholder="{{Auth::user()->CPF_CNPJ}}" disabled>
                    <input class="espacamento-inputs input-style form-control" id="telefone" name="cadastro" type="text" placeholder="Telefone - 83 3333 3333" disabled>
                    <input class="espacamento-inputs input-style form-control" id="email" name="cadastro" type="text" placeholder="{{Auth::user()->email}}" disabled>
                    <input class="espacamento-inputs input-style form-control" id="CEP" name="cadastro" type="text" placeholder="CEP - 00000 - 000" disabled>
                    <input class="espacamento-inputs input-style form-control" id="Estado" name="cadastro" type="text" placeholder="Estado - PB" disabled>
                    <input class="espacamento-inputs input-style form-control" id="Cidade" name="cadastro" type="text" placeholder="Cidade - Campina Grande" disabled>
                    <div class="div-bairro-num">
                        <input class="espacamento-inputs input-style form-control bairro-input" id="Bairro" name="bairro" type="text" placeholder="Bairro" disabled>
                        <input class="espacamento-inputs input-style form-control numero-input" id="Numero" name="numero" type="text" placeholder="Nº - 233" disabled>
                    </div>
                    <input class="espacamento-inputs input-style form-control" id="Logradouro" name="cadastro" type="text" placeholder="Logradouro" disabled>
                </div>
            </div>
            <div class="col ladodir" id="conteudodir">
                <form method="POST" action="{{route('cadastrar.vaga.empresa.post')}}">
                    @csrf
                    <h4>A vaga é de inclusão?</h4>
                    <label class="container">Sim
                        <input id="inclusãoTtrue" value="sim" type="radio" name="radio_inclusao" checked>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Não
                        <input id="inclusãoFalse" value="nao" type="radio" name="radio_inclusao">
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

