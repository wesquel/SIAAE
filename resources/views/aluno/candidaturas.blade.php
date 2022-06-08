@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href=" {{ asset('css/candidaturas.css') }}" />
@endpush

@section('content')


    <div class="row mb-4 mt-4">
        <h4 class="title-page-content col-md-9 col-sm-9">Oferta de Vagas</h4>
        <a href="{{ route('home-aluno') }}">
            <button id="button-voltar" type="button" class="system-button system-button-verde col-md-3 col-sm-3">
                <i class="icon icon-arrow-left2"></i>Voltar
            </button>
        </a>
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
