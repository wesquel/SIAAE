@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastrarestagio.css') }}">
@endpush
@section('content')
    <div class="divisao-superior" id="div-page-content">
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
        <h4 class="subtitle">Estágio</h4>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{route('cadastrar.vaga.estagio')}}">
            @csrf
            <div class="divisao-inputs">
                <div class="col ladoesq" id="conteudoesq">
                    <input id="titulo_vaga" name="titulo_vaga" class="espacamento-inputs input-style form-control" placeholder="Título da Vaga">
                    <div id="linha-vertical">

                        <label class="espacamento-inputs input-style form-control">Bolsa
                            <input type="checkbox">
                        </label>


                        <div class="div-turno">
                            <input name="ch_semanal" class="espacamento-inputs input-style form-control turno-input" type="number" min="0" placeholder="Carga Horária Semanal">
                            <select name="turno" class="espacamento-inputs form-control " type="cadastro">
                                <option value="0">Turno</option>
                                <option value="1">Manhã</option>
                                <option value="2">Tarde</option>
                                <option value="3">Noite</option>
                            </select>
                        </div>
                        <select name="auxilios" class="espacamento-inputs form-control" type="cadastro">
                            <option value="0">Auxílios</option>
                            <option value="1">Auxílio Transporte</option>
                            <option value="2">Auxílio Alimentação</option>
                        </select>
                        <select name="cursos" class="espacamento-inputs form-control" type="cadastro">
                            <option value="0">Cursos</option>
                            <option value="1">Superior em Engenharia de Computação</option>
                            <option value="2">Superior em Telemática</option>
                            <option value="3">Ensino Médio em Informática</option>
                        </select>
                        <select name="modalidade" class="espacamento-inputs form-control" type="cadastro">
                            <option value="0">Modalidade</option>
                            <option value="1">Remoto</option>
                            <option value="2">Presencial</option>
                            <option value="3">Híbrido</option>
                        </select>

                        <div class="div-data">
                            <input name="data_inicio" placeholder="Data Início" class="espacamento-inputs form-control dataini-input" type="text" onfocus="(this.type='date')" id="date">
                            <input name="data_fim" placeholder="Data Fim" class="espacamento-inputs form-control datafim-input" type="text" onfocus="(this.type='date')" id="date">
                        </div>
                        <div class="div-data">
                            <input name="data_limite" placeholder="Data Limite" class="espacamento-inputs form-control datalim-input" type="text" onfocus="(this.type='date')" id="date">
                            <input name="vagas" class="espacamento-inputs input-style form-control" type="number" min="0" placeholder="Quantidade de Vagas">
                        </div>
                    </div>
                </div>

                <!-- LADO DIREITO -->

                <div class="col ladodir" id="conteudodir">
                    <textarea name="pre_requisitos" id="div-descricao" placeholder="Pré-requisitos" class="espacamento-inputs form-control desc-input"></textarea>
                    <textarea name="atv_desempenhadas" id="div-descricao" placeholder="Atividades desempenhadas" class="espacamento-inputs form-control desc-input"></textarea>
                    <textarea name="desc" id="div-descricao" placeholder="Descrição da Vaga" class="espacamento-inputs form-control desc-input"></textarea>

                    <button type="submit" class="system-button system-button-verde botao-cadastrar-vaga">Publicar</button>

                </div>
            </div>
        </form>
    </div>
    <script>
        let input_element = document.querySelector("input");

        input_element.addEventListener("keyup", () => {
            input_element.setAttribute("value", input_element.value);
        })
    </script>
@endsection



