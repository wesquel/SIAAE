<style>
    #div-dados-empresa label{
        display: block;
        color: var(--cor-grafite);
    }
    .system-card {
        padding: 10px;
    }
    #div-titulo {
        display: flex;
        align-items: center;
    }
    h6 {
        font-weight: bolder;
    }

    #p-resumo-vaga {
        font-size: 0.8rem;
        color: var(--cor-grafite);
        height: 40%;
        overflow: hidden;
        margin-top: 5px;
    }
</style>

<div class="system-card">
    <div class="row">
        <div id="div-titulo" class="col-md-4 col-sm-4">
            <img src="{{ asset('images/logo_vaga.png') }}" width="50px" height="50px"/>
        </div>
        <div id="div-dados-empresa" class="col-md-8 col-sm-8">
            <label>{{ $nomeEmpresa }}</label>
            <label>{{ $localEmpresa }}</label>
            <label>{{ $contatoEmpresa }}</label>
        </div>
        <h6>{{ $cargo }}</h6>
        <label><strong>Tipo:</strong> {{ $tipo }}</label>
        <label><strong>Modalidade:</strong> {{ $modalidade }}</label>

        <p id="p-resumo-vaga">{{ $resumo }}</p>
        <a><button class="system-button system-button-verde">Saiba mais</button></a>
    </div>
</div>
