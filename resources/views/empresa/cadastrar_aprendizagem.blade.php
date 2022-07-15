@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastraraprendizagem.css') }}">
@endpush

@section('content')
    <div class="divisao-superior" id="div-page-content">
        <h2 class="title-left">Cadastrar Vaga</h2>
        <h4 class="subtitle">Aprendizagem</h4>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{route('cadastrar.vaga.aprendizagem')}}">
            @csrf
            <div class="divisao-inputs">
                <div class="col ladoesq" id="conteudoesq">
                    <div id="linha-vertical">
                        <input id="titulo_vaga" name="titulo_vaga" class="@error('titulo_vaga') @enderror espacamento-inputs input-style form-control" value="{{ old('titulo_vaga') }}" placeholder="Título da Vaga">

                        @error('titulo_vaga')
                            <div class="">{{ 'O título da vaga deve ser preenchido!' }}</div>
                        @enderror

                        <div class="div-bolsa">
                            <label class="espacamento-inputs input-style form-control bolsa-input">Bolsa
                                <input type="checkbox">
                            </label>
                            <select name="auxilios" class="espacamento-inputs form-control" type="cadastro">
                                <option value="null">Auxílios</option>
                                <option value="Auxílio Transporte">Auxílio Transporte</option>
                                <option value="Auxílio Alimentação">Auxílio Alimentação</option>
                            </select>
                        </div>

                        <div class="div-turno">
                            <input  name="ch_semanal" class="espacamento-inputs input-style form-control turno-input" type="number" min="0" placeholder="Carga Horária Semanal">
                            <select class="espacamento-inputs form-control" name="turno" type="cadastro">
                                <option value="0">Turno</option>
                                <option value="1">Manhã</option>
                                <option value="2">Tarde</option>
                                <option value="3">Noite</option>
                            </select>
                        </div>
                        <select name="cursos" class="espacamento-inputs form-control" type="cadastro">
                            <option value="0">Cursos</option>
                            <option value="1">Superior em Engenharia de Computação</option>
                            <option value="2">Superior em Telemática</option>
                            <option value="3">Ensino Médio em Informática</option>
                        </select>
                        <div class="div-ch">
                            <input  name="ch_pratica" class="espacamento-inputs form-control chpratica-input" type="number" min="0" placeholder="Carga Horária Prática">
                            <input name="ch_teorica" class="espacamento-inputs form-control chteorica-input" type="number" min="0" placeholder="Carga Horária Teórica">
                        </div>
                        <div class="div-data">
                            <input  name="data_inicio" placeholder="Data Início" class="espacamento-inputs form-control dataini-input" type="text" onfocus="(this.type='date')">
                            <input name="data_fim" placeholder="Data Fim" class="espacamento-inputs form-control datafim-input" type="text" onfocus="(this.type='date')">
                        </div>
                        <div class="div-data">
                            <input name="data_limite" placeholder="Data Limite" class="espacamento-inputs form-control datalim-input" type="text" onfocus="(this.type='date')">
                            <input name="vagas" class="espacamento-inputs input-style form-control" type="number" min="0" placeholder="Quantidade de Vagas">
                        </div>
                    </div>
                </div>

                <!-- LADO DIREITO -->

                <div class="col ladodir" id="conteudodir">
                    <textarea name="pre_requisitos" placeholder="Pré-requisitos" class="espacamento-inputs form-control desc-input"></textarea>
                    <textarea name="atv_desempenhadas" placeholder="Atividades desempenhadas" class="espacamento-inputs form-control desc-input"></textarea>
                    <textarea name="desc" placeholder="Descrição da Vaga" class="espacamento-inputs form-control desc-input"></textarea>

                    <button type="submit" class="system-button system-button-verde botao-cadastrar-vaga">Publicar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

