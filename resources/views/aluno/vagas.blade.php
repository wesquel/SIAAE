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
                    <td class="col-md-3">Nome</td>
                    <td class="col-md-3">Data de publicação</td>
                    <td class="col-md-3">Titulo</td>
                    <td class="col-md-3" style="text-align: right">Status</td>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 5; $i++)
                    <tr class="row">
                        <td class="col-md-3">Desenvolvedor Java</td>
                        <td class="col-md-3">12/04/2021</td>
                        <td class="col-md-3">Estágio</td>
                        <td class="col-md-3" style="text-align: right">Aceito <label class="system-icon-circle aceito" ></label></td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
