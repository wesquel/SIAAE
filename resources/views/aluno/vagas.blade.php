@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/vagas_aluno.css') }}"
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
    <div id="div-lista-vagas">
        <table class="row">
            <thead>
                <tr class="row">
                    <td class="col-md-3">Titulo</td>
                    <td class="col-md-3">Data de publicação</td>
                    <td class="col-md-3">Tipo</td>
                    <td class="col-md-3" style="text-align: right">Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach($vagas as $vaga)
                    <tr class="row">
                        <td class="col-md-3">{{$vaga[0][0]['titulo']}}</td>
                        <td class="col-md-3">12/04/2021</td>
                        <td class="col-md-3">{{$vaga[0][0]['tipo']}}</td>
                        @if($vaga[1] == 2)
                            <td class="col-md-3" style="text-align: right">Aceito <label class="system-icon-circle aceito" ></label></td>
                        @endif
                        @if($vaga[1] == 1)
                            <td class="col-md-3" style="text-align: right">Em análise <label class="system-icon-circle em-analise" ></label></td>
                        @endif
                        @if($vaga[1] == 0)
                            <td class="col-md-3" style="text-align: right">Recusado <label class="system-icon-circle recusado" ></label></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
