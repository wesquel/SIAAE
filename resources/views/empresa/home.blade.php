@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/main/home.css') }}">
@endpush

@section('content')
    <div id="div-page-content">
        <img src="{{ asset('images/ilustracao_home.png') }}" width="600px" height="400px">
    </div>
@endsection
