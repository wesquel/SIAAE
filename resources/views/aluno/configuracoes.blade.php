@extends('layouts.appLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/configuracoes_aluno.css') }}"
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
                    <label>Telefone: </label>
                    <input id="telefone" name="telefone"  value="{{Auth::user()->telefone}}" type="text" placeholder="Telefone" class="system-input mb-4">
                    <label>Email: </label>
                    <input id="email" name="email"  type="email" value="{{Auth::user()->email}}" placeholder="Email" class="system-input mb-4">
                    <label>Linkedin: </label>
                    <input id="linkedin" name="linkedin" type="text" value="{{Auth::user()->linkedin}}" placeholder="Linkedin" class="system-input mb-4">
                    <label>Lattes: </label>
                    <input id="lattes" name="lattes" type="text" value="{{Auth::user()->lattes}}" placeholder="Lattes" class="system-input mb-4">
                    <label>Github: </label>
                    <input id="github" name="github" type="text" value="{{Auth::user()->github}}" placeholder="Github" class="system-input mb-4">
                    <label>Descrição: </label>
                    <textarea id="desc div-descricao" name="desc" placeholder="Descrição" class="system-input mb-4">{{Auth::user()->desc}}</textarea>
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
                    @for($i = 0; $i < 3; $i++)
                        <div class="div-contato">
                            <label class="col-md-3 col-sm-12" >Facebook</label>
                            <label class="col-md-8 col-sm-12" >http://linkface.com</label>
                        </div>
                        <hr class="d-sm-flex d-md-none d-lg-none"/>
                    @endfor
                    <div id="div-acoes-contato" class="mt-2">
                        <button class="system-button system-button-vermelho">Remover</button>
                        <button id="button-adicionar" class="system-button"><i class="icon icon-plus"></i></button>
                    </div>

                </div>
                <hr/>
                <div>
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

        fileInput.addEventListener('input', (event) => {
            console.log(event.target);
            console.log(event.target.value);
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
