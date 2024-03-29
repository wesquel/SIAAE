@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/configuracoes_aluno.css') }}">
@endpush
@section('content')

    <div id="div-button-voltar" class="row mb-4 mt-4">
        <button id="button-voltar" type="button" class="system-button system-button-verde col-md-3 col-sm-3">
            <i class="icon icon-arrow-left2"></i>Voltar
        </button>
    </div>
    <div class="row">
        <div id="dados_perfil" class="col-md-5">
            <form method="POST" action="{{ route('config.form.aluno') }}">
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
        </div>
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
