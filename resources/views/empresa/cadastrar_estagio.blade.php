@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastrarestagio.css') }}">
@endpush
@section('content')
    <div class="divisao-superior" id="div-page-content">
        <h2 class="title-left">Cadastrar Vaga</h2>
        <h4 class="subtitle">Estágio</h4>
        <div class="divisao-inputs">
            <div class="col ladoesq" id="conteudoesq">
                <div id="linha-vertical">
                    <input class="espacamento-inputs input-style form-control" name="titulovaga" type="cadastro" placeholder="Título da Vaga">
                    <label class="espacamento-inputs input-style form-control">Bolsa
                        <input type="checkbox">
                    </label>
                    <div class="div-turno">
                        <input class="espacamento-inputs input-style form-control turno-input" name="CHSemanal" type="number" min="0" placeholder="Carga Horária Semanal">
                        <select class="espacamento-inputs form-control " type="cadastro">
                            <option value="0">Turno</option>
                            <option value="1">Manhã</option>
                            <option value="2">Tarde</option>
                            <option value="3">Noite</option>
                        </select>
                    </div>
                    <select class="espacamento-inputs form-control" type="cadastro">
                        <option value="0">Auxílios</option>
                        <option value="1">Auxílio Transporte</option>
                        <option value="2">Auxílio Alimentação</option>
                    </select>
                    <select class="espacamento-inputs form-control" type="cadastro">
                        <option value="0">Cursos</option>
                        <option value="1">Superior em Engenharia de Computação</option>
                        <option value="2">Superior em Telemática</option>
                        <option value="3">Ensino Médio em Informática</option>
                    </select>
                    <select class="espacamento-inputs form-control" type="cadastro">
                        <option value="0">Modalidade</option>
                        <option value="1">Remoto</option>
                        <option value="2">Presencial</option>
                        <option value="3">Híbrido</option>
                    </select>

                    <div class="div-data">
                        <input placeholder="Data Início" class="espacamento-inputs form-control dataini-input" type="text" onfocus="(this.type='date')" id="date">
                        <input placeholder="Data Fim" class="espacamento-inputs form-control datafim-input" type="text" onfocus="(this.type='date')" id="date">
                    </div>
                    <div class="div-data">
                        <input placeholder="Data Limite" class="espacamento-inputs form-control datalim-input" type="text" onfocus="(this.type='date')" id="date">
                        <input class="espacamento-inputs input-style form-control" name="quantvaga" type="number" min="0" placeholder="Quantidade de Vagas">
                    </div>
                </div>
            </div>

            <!-- LADO DIREITO -->

            <div class="col ladodir" id="conteudodir">
                <textarea id="div-descricao" placeholder="Pré-requisitos" class="espacamento-inputs form-control desc-input"></textarea>
                <textarea id="div-descricao" placeholder="Atividades desempenhadas" class="espacamento-inputs form-control desc-input"></textarea>
                <textarea id="div-descricao" placeholder="Descrição da Vaga" class="espacamento-inputs form-control desc-input"></textarea>

                <button type="submit" class="system-button system-button-verde botao-cadastrar-vaga">Confirmar</button>

            </div>
        </div>
    </div>
@endsection

