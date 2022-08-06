@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/lista_vagas.css') }}">
@endpush

@section('content')

    <div id="div-content">
        <div class="div-title">
            <p class="col">Lista de Candidatos</p>
            <div class="div-button-previous">
                <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                    <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                        <i class="icon icon-arrow-left2"></i>Voltar
                    </button>
                </a>
            </div>
        </div>
        <div id="div-lista-vagas">
            <table class="row">
                <thead>
                <tr class="row">
                    <td class="col-md-2 text-col">Nome</td>
                    <td class="col-md-2 text-col">Definir Status</td>
                    <td class="col-md-1 text-col">Idade</td>
                    <td class="col-md-2 text-col">Curso</td>
                    <td class="col-md-1 text-col">Período</td>
                    <td class="col-md-2 text-col">Disponibilidade</td>
                    <td class="col-md-1 text-col">Dados</td>
                    <td class="col-md-1 text-col">Selecionar</td>
                </tr>
                </thead>
                <tbody>
                @foreach($candidatos as $aluno)
                    <tr class="row">
                        <td class="col-md-2">
                            <label class="system-icon-circle" >
                                {{$aluno[0]['matricula']}}
                            </label>
                        </td>
                        <td class="col-md-2">
                            <select class="status-select">
                                <option selected value="em_analise">Em análise</option>
                                <option>Aceito</option>
                                <option>Recusado</option>
                            </select>
                        </td>
                        <td class="col-md-1">20</td>
                        <td class="col-md-2">Engenharia</td>
                        <td class="col-md-1">05</td>
                        <td class="col-md-2">Disponível</td>
                        <td class="col-md-1 teste"><i class="icon icon-eye"></i></td>
                        <td class="col-md-1"><input type="checkbox" class="check-box-select"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
