@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/lista_vagas.css') }}">
@endpush

@section('content')
    <div id="div-content">
        <div class="row mb-4">
            <div id="div-subtitulo" class="col-md-6">
                <h4>Listagem de Vagas</h4>
            </div>
            <div id="div-button-voltar" class="col-md-6">
                <button href="{{url()->previous()}}" class="system-button system-button-verde">Voltar</button>
            </div>
        </div>
        <div id="div-lista-vagas">
            <h4 class="title-page-content col-md-9 col-sm-9">Lista Vagas</h4>
            <table class="row">
                <thead>
                <tr class="row">
                    <td class="col-md-2">Nome</td>
                    <td class="col-md-2">Definir Status</td>
                    <td class="col-md-1">Idade</td>
                    <td class="col-md-2" style="text-align: right">Curso</td>
                    <td class="col-md-1">Período</td>
                    <td class="col-md-2">Disponibilidade</td>
                    <td class="col-md-1"></td>
                    <td class="col-md-1"></td>
                </tr>
                </thead>
                <tbody>
                @foreach($candidatos as $aluno)
                    <tr class="row">
                        <td class="col-md-2" style="text-align: right;">
                            <label class="system-icon-circle" >
                                {{$aluno[0]['matricula']}}
                            </label>
                        </td>
                        <td class="col-md-2">
                            <select>
                                <option selected value="em_analise">Em análise</option>
                                <option>Aceito</option>
                                <option>Recusado</option>
                            </select>
                        </td>
                        <td class="col-md-1">20</td>
                        <td class="col-md-2">Engenharia</td>
                        <td class="col-md-1">05</td>
                        <td class="col-md-2">Disponível</td>
                        <td class="col-md-1"><i class="icon icon-eye"></i></td>
                        <td class="col-md-1"><input type="checkbox"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
