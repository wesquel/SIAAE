@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href=" {{ asset('css/candidaturas.css') }}" />
@endpush

@section('content')


    <div class="div-title">
        <p class="col">Candidaturas</p>
        <div class="div-button-previous">
            <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                    <i class="icon icon-arrow-left2"></i>Voltar
                </button>
            </a>
        </div>
    </div>

    <div class="row">
            @for($i = 0; $i < 8; $i++)
            <div class="col-md-4 col-sm-6 mb-4">

                <x-card-vaga
                        nomeEmpresa="Empresa X"
                        localEmpresa="João Pessoa"
                        contatoEmpresa="empresa@gmai"
                        cargo="Desenvolvedor Java"
                        tipo="Estágio"
                        modalidade="Remoto"
                        resumo="Estamos procurando um Desenvolvedor
            Java Júnior para gerenciar o ciclo de
            vida de desenvolvimento de softwares,
            desde o planejamento e priorização até
            as fases de teste e lançamento."
                        idVaga="idVaga"
                ></x-card-vaga>
            </div>
            @endfor

    </div>

@endsection
