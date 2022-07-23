<style>
    .div-main {
        height: 100%;
    }

    #div-nav {
        background-color: var(--cor--cinza);
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #div-nav span {
        margin-bottom: 20px;
    }

    #div-nav img {
        margin: 20px;
        height: 40px;
        width: auto;
    }

    #div-nav nav{
        margin-bottom: 10px;
        list-style: none;
        text-align: left;
    }

    #div-nav a {
        text-decoration: none;
        color: #000;
    }

    #div-nav-itens {
        align-items: flex-start;
        padding-left: 20px;
    }

    #div-nav-itens .icon {
        color: var(--cor-vermelho);
        margin-right: 5px;
    }

    @media (max-width: 767px) {
        #div-nav {
            height: fit-content;
            flex-direction: row;
        }

        #div-nav .navbar-brand {
            width: 50%;
        }

        #div-nav button {
            position: absolute;
            right: 40px;
            font-size: 30px;
        }
    }

</style>

<nav id="div-nav" class="nav navbar-expand-md col-md-3 ">

    <a class="navbar-brand" href="{{route('home_empresa')}}">
        <img src="{{ asset('images/logo_siaae.png') }}" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#div-nav-itens" aria-controls="div-nav-itens" aria-expanded="false" aria-label="Alterna navegação">
        <span class="icon icon-menu"></span>
    </button>

    <div id="div-nav-itens" class="collapse navbar-collapse flex-column">
        <span style="align-self: center">Bem vindo, {{ Auth::user()->getNome() ?? 'Fulaninho' }}!</span>
        <a class="nav-link active" href="{{ route('candidaturas') }}"><i class="icon icon-plus"></i>CADASTRAR-SE À VAGAS</a>
        <a class="nav-link" href="{{ route('lista-vagas') }}"><i class="icon icon-list"></i>LISTA DE VAGAS</a>
        <a class="nav-link" href="{{ route('config.aluno') }}"><i class="icon icon-cog"></i>CONFIGURAÇÔES</a>
    </div>
</nav>

