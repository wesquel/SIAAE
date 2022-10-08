@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/configuracoes_aluno.css') }}">
    <link rel="stylesheet" href="{{ asset('css/empresa/configuracoes_empresa.css') }}">
@endpush
@section('content')
    <div class="div-title">
        <p class="col">Configurações</p>
        <div class="div-button-previous">
            <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                    <i class="icon icon-arrow-left2"></i>Voltar
                </button>
            </a>
        </div>
    </div>

    <div class="container row tesdas">
        <form method="POST" class="col" action="{{ route('configuracoes.empresa.put') }}">
            <!--Verificar rota-->
            @csrf
            @method('PUT')
            <div>
                <div>
                    <label>Status do Perfil:</label>
                    <label class="switch">
                        <input id="input-status-perfil" class="system-input-toggle" type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <label id="text-status-perfil">Ativado</label>
                </div>
                <div class="">
                    <label>Contatos</label>

                    <div class="group">
                        <input name="nome_empresa" class="input-siaae @error('nome_empresa') input-error-siaae @enderror" value="{{Auth::user()->nome_empresa}}" required>
                        <label class="label-siaae">Nome da empresa:</label>
                    </div>
                    @error('nome_empresa')
                    <div class="error-text">{{ 'O nome da empresa deve ter no mínimo 5 caracteres.' }}</div>
                    @enderror

                    <div class="group next-input-siaae">
                        <input name="nome_responsavel" class="input-siaae @error('nome_responsavel') input-error-siaae @enderror" value="{{Auth::user()->nome_responsavel}}" maxlength="15" required>
                        <label class="label-siaae">Nome do Responsavel:</label>
                    </div>
                    @error('nome_responsavel')
                    <div class="error-text">{{ 'Formato do nome do responsavel incorreto.' }}</div>
                    @enderror

                    <div class="group next-input-siaae">
                        <input id="telefone" name="telefone" onkeydown="return mascaraTelefone(event)" maxlength="15" class="input-siaae @error('telefone') input-error-siaae @enderror" value="{{Auth::user()->telefone}}" required>
                        <label class="label-siaae">Telefone:</label>
                    </div>
                    @error('telefone')
                    <div class="error-text">{{ 'Formato do telefone incorreto.' }}</div>
                    @enderror

                    <div class="group next-input-siaae">
                        <input name="email" type="email" class="input-siaae @error('email') input-error-siaae @enderror" value="{{Auth::user()->email}}" required>
                        <label class="label-siaae">Email:</label>
                    </div>
                    @error('email')
                    <div class="error-text">{{ 'Email incorreto.' }}</div>
                    @enderror
                </div>
            <button type="submit" class="system-button system-button-verde espaco-botao">Atualizar</button>
        </form>

        <div class="col">
            <label>Endereço</label>

            <div class="group">
                <input id="cep" name="cep" class="input-siaae @error('cep') input-error-siaae @enderror" value="" required>
                <label class="label-siaae">CEP:</label>
            </div>
            @error('cep')
            <div class="error-text">{{ 'Formato do CEP incorreto.' }}</div>
            @enderror

            <div class="row next-input-siaae" style="">
                <div class="col">
                    <div class="group col">
                        <input name="cidade" class="input-siaae @error('cidade') input-error-siaae @enderror" value="" required>
                        <label class="label-siaae">Cidade:</label>
                    </div>
                    @error('cidade')
                    <div class="error-text">{{ 'Nome da cidade incorreto.' }}</div>
                    @enderror
                </div>

                <div class="group col-md-4">
                    <div class="group col">
                        <input name="estado" class="input-siaae @error('estado') input-error-siaae @enderror" value="" required>
                        <label class="label-siaae">Estado:</label>
                    </div>
                    @error('estado')
                    <div class="error-text">{{ 'Error estado.' }}</div>
                    @enderror
                </div>

            </div>
        </div>

    <div class="div-title">
        <p class="col">Configurações</p>
        <div class="div-button-previous">
            <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                    <i class="icon icon-arrow-left2"></i>Voltar
                </button>
            </a>
        </div>
    </div>

    <div class="container">
        <form method="POST" class="container" action="{{ route('config.form.aluno') }}">
            @csrf
            @method('PUT')
            <div>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <label>Status do Perfil:</label>
                <label class="switch">
                    <input id="input-status-perfil" class="system-input-toggle" type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
                <label id="text-status-perfil">Ativado</label>
            </div>
            <div>
                <label>Currículo:</label>
                <div class='input-wrapper'>
                    <label for='input-curriculo'>
                        Enviar Currículo(PDF,DOC,DOCX e RTF)
                    </label>
                    <input id='input-curriculo' type='file' value='' />
                    <span id='file-name'></span>
                </div>
            </div>
            <hr>
            <div class="form-group">

                <div class="group">
                    <input name="telefone"
                           class="input-siaae @error('telefone') input-error-siaae @enderror"
                           value="{{Auth::user()->telefone}}" onkeydown="return mascaraTelefone(event)" maxlength="15">
                    <label class="label-siaae">Telefone</label>
                </div>

                <div class="group next-input-siaae">
                    <input name="email"
                           class="input-siaae @error('email') input-error-siaae @enderror"
                           value="{{Auth::user()->email}}" type="email">
                    <label class="label-siaae">Email</label>
                </div>

                <div class="group next-input-siaae">
                    <input name="linkedin"
                           class="input-siaae @error('linkedin') input-error-siaae @enderror"
                           value="{{Auth::user()->linkedin}}">
                    <label class="label-siaae">Linkedin</label>
                </div>

                <div class="group next-input-siaae">
                    <input name="lattes"
                           class="input-siaae @error('lattes') input-error-siaae @enderror"
                           value="{{Auth::user()->lattes}}">
                    <label class="label-siaae">Lattes</label>
                </div>

                <div class="group next-input-siaae">
                    <input name="github"
                           class="input-siaae @error('github') input-error-siaae @enderror"
                           value="{{Auth::user()->github}}">
                    <label class="label-siaae">Github</label>
                </div>


                <textarea id="desc div-descricao" name="desc" placeholder="Descrição"
                          class="next-input-siaae form-control desc-input text-area-vaga">{{Auth::user()->desc}}</textarea>
            </div>
            <button id="button-atualizar" type="submit" class="system-button system-button-verde">Atualizar</button>
        </form>
        <div class="system-d-sm-none col-md-1">
            <div class="vl"></div>
        </div>
        <div id="dados_contatos" class="col-md-5">
            <div>
                <h6>Outros contatos</h6>
                <div id="contatos" class="mb-4">
                    @foreach($contatos as $contato)
                        <div class="div-contato">
                            <label class="col-md-3 col-sm-12" >{{$contato->titulo}}</label>
                            <input value="{{$contato->link}}" class="col-md-8 col-sm-12" readonly/>
                        </div>
                        <hr class="d-sm-flex d-md-none d-lg-none"/>
                    @endforeach
                    <div id="div-acoes-contato" class="mt-2">
                        @if($contatos->count() >= 1)
                        <button class="system-button system-button-vermelho">Remover</button>
                        @endif
                        <button id="button-adicionar" class="system-button"><i id="icon-add" class="icon icon-plus"></i></button>
                    </div>

                </div>
                <div id="show-contatos" style="display:none">
                    <hr/>
                    <form method="POST" class="row" action="{{ route('config.form.aluno.contato') }}">
                        @csrf
                        <div class="div-input col-md-4 col-sm-12">
                            <select name="tipo" class="system-input">
                                <option value="">Tipo</option>
                                <option value="link">Link</option>
                                <option value="telefone">Telefone</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                        <div class="div-input col-md-8 com-sm-12">
                            <input name="titulo" class="system-input" type="text" placeholder="TÍTULO CONTATO">
                        </div>
                        <diV class="div-input col-md-12 mt-4">
                            <input name="link" class="col-md-12 system-input" type="text" placeholder="Contato" />
                        </diV>
                        <button type="submit" class="system-button system-button-verde mt-4">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
        <button id="button-atualizar" type="submit" class="system-button system-button-verde">Atualizar</button>

    </div>

    <script>
        var fileInput = document.getElementById('input-curriculo');
        var fileNameLabel = document.getElementById('file-name');
        var inputStatusPerfil = document.getElementById('input-status-perfil');
        var textStatusPerfil = document.getElementById('text-status-perfil');

        const targetDiv = document.getElementById('show-contatos');
        const btnAdicionar = document.getElementById('button-adicionar');
        const iconeBtn = document.getElementById('icon-add');


        btnAdicionar.onclick = function () {
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
                iconeBtn.classList.remove("icon-plus");
                iconeBtn.setAttribute("class", "icon icon-plus")
            } else {
                targetDiv.style.display = "block";
                iconeBtn.classList.remove("icon-plus");
                iconeBtn.setAttribute("class", "icon icon-cross")
            }
        };

        fileInput.addEventListener('input', (event) => {
            let filename = "Arquivo adicionado";
            let regexFileName = /\\([^\\]*\..*)/.exec(event.target.value);
            if (regexFileName.length >= 1) {
                filename = regexFileName[1]
            }
            fileNameLabel.textContent = filename;
        });

        textStatusPerfil.textContent = "Ativado"
        inputStatusPerfil.addEventListener('change', (event) => {
            if (textStatusPerfil.textContent === "Ativado") {
                textStatusPerfil.textContent = "Desativado";
            } else {
                textStatusPerfil.textContent = "Ativado"
            }
        })

    </script>
@endsection
