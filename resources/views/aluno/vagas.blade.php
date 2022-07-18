@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/vagas_aluno.css') }}"
@endpush

@section('content')

    <div id="div-page-content" class="col-md-12">
        <div class="row mb-4 mt-4">
            <button id="button-voltar" type="button" class="system-button system-button-verde col-md-3 col-sm-3">
                <i class="icon icon-arrow-left2"></i>Voltar
            </button>
        </div>
    </div>
    <div id="div-lista-vagas">
        <h4 class="title-page-content col-md-9 col-sm-9">Lista Vagas</h4>
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
