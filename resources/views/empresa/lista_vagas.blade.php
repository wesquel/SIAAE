@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/lista_vagas.css') }}">
@endpush

@section('content')

    <div class="div-title">
        <p class="col">Lista de Vagas</p>
        <div class="div-button-previous">
            <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                    <i class="icon icon-arrow-left2"></i>Voltar
                </button>
            </a>
        </div>
    </div>

    <div id="div-content">
        <div class="row">
            @foreach($vagas as $vaga)
                <div class="div-card col-md-3 mb-4">
                    <div class="card-vaga">
                        <p class="subtitle-card">Título</p>
                        <p>{{$vaga->titulo}}</p>

                        <p class="subtitle-card next-subtitle">Data de Publicação</p>
                        <p>{{$vaga->created_at}}</p>

                        <div class="row mt-2 mb-2">
                            <div class="col-md-6">
                                <strong>Status</strong>
                                <p>{{$vaga->status}}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Tipo</strong>
                                <p>{{$vaga->tipo}}</p>
                            </div>
                        </div>

                        <div id="div-acoes" class="row">
                            <a href="vagas/{{$vaga->id}}" class="col-md-12"><i class="icon icon-search"> </i> Candidatos</a>
                            <a href="editar/{{$vaga->id}}" class="col-md-12"><i class="icon icon-pencil" ></i> Editar</a>
                            <a href="inativar/{{$vaga->id}}" class="col-md-12"><i class="icon icon-blocked"></i> Inativar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
{{--        <div id="div-lista-vagas">--}}
{{--            <h4 class="title-page-content col-md-9 col-sm-9">Lista Vagas</h4>--}}
{{--            <table class="row">--}}
{{--                <thead>--}}
{{--                <tr class="row">--}}
{{--                    <td class="col-md-2">Nome</td>--}}
{{--                    <td class="col-md-2">Definir Status</td>--}}
{{--                    <td class="col-md-1">Idade</td>--}}
{{--                    <td class="col-md-2" style="text-align: right">Curso</td>--}}
{{--                    <td class="col-md-1">Período</td>--}}
{{--                    <td class="col-md-2">Disponibilidade</td>--}}
{{--                    <td class="col-md-1"></td>--}}
{{--                    <td class="col-md-1"></td>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @for($i = 0; $i < 5; $i++)--}}
{{--                    <tr class="row">--}}
{{--                        <td class="col-md-2" style="text-align: right"><label class="system-icon-circle aceito" ></label>João Pereira</td>--}}
{{--                        <td class="col-md-2">--}}
{{--                            <select>--}}
{{--                                <option selected value="em_analise">Em análise</option>--}}
{{--                                <option>Aceito</option>--}}
{{--                                <option>Recusado</option>--}}
{{--                            </select>--}}
{{--                        </td>--}}
{{--                        <td class="col-md-1">20</td>--}}
{{--                        <td class="col-md-2">Engenharia</td>--}}
{{--                        <td class="col-md-1">05</td>--}}
{{--                        <td class="col-md-2">Disponível</td>--}}
{{--                        <td class="col-md-1"><i class="icon icon-eye"></i></td>--}}
{{--                        <td class="col-md-1"><input type="checkbox"></td>--}}
{{--                    </tr>--}}
{{--                @endfor--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
    </div>


@endsection
