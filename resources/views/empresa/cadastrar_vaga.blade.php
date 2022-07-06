@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastrar_vaga') }}"
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Cadastrar Vaga</h3>
            <input type="text" class="system-input" placeholder="NOME" value="{{ $nomeEmpresa ?? 'Nome da empresa' }}" readonly>
            <input type="text" class="system-input" placeholder="CPF/CNPJ" value="{{ $nomeEmpresa ?? 'Nome da empresa' }}" readonly>
            <input type="text" class="system-input" placeholder="TELEFONE" value="{{ $nomeEmpresa ?? 'Nome da empresa' }}" readonly>
            <input type="text" class="system-input" placeholder="EMAIL" value="{{ $nomeEmpresa ?? 'Nome da empresa' }}" readonly>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5"></div>

    </div>
@endsection
