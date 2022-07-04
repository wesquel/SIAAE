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
                    <input class="input-style form-control" name="cadastro" type="text" placeholder="Empresa LTDA" disabled>
                    <input class="espacamento-inputs input-style form-control" id="CPF_CNPJ" name="cadastro" type="text" placeholder="CPF - 111.111.111 - 11" disabled>
                    <input class="espacamento-inputs input-style form-control" id="telefone" name="cadastro" type="text" placeholder="Telefone - 83 3333 3333" disabled>
                    <input class="espacamento-inputs input-style form-control" id="email" name="cadastro" type="text" placeholder="Email - empresaltda@mail.com" disabled>
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
                <form>
                    <h4>A vaga é de inclusão?</h4>
                    <label class="container">Sim
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Não
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                    </label>
                </form><br>
                <form>
                    <h4>Qual é o tipo da vaga?</h4>
                    <label class="container1">Estágio
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark1"></span>
                    </label>
                    <label class="container1">Aprendizagem
                    <input type="radio" name="radio">
                    <span class="checkmark1"></span>
                    </label>
                </form>

                <button type="submit" class="system-button system-button-verde botao-cadastrar-vaga">Confirmar</button>

            </div>
        </div>
    </div>
@endsection

