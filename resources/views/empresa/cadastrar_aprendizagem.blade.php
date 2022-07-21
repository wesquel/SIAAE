@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastraraprendizagem.css') }}">
@endpush

@section('content')
    <div class="divisao-superior" id="div-page-content">
        <div class="div-title">
            <p class="col">Cadastra Vaga</p>
            <div class="div-button-previous">
                <a style="margin-right: 0;" class="col" href="{{ url()->previous() }}">
                    <button id="button-voltar" type="button" class="system-button-previous system-button-verde">
                        <i class="icon icon-arrow-left2"></i>Voltar
                    </button>
                </a>
            </div>
        </div>
        <h4 class="subtitle">Aprendizagem</h4>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{route('cadastrar.vaga.aprendizagem')}}">
            @csrf
            <div class="divisao-inputs">
                <div class="col ladoesq" id="conteudoesq">
                    <div id="linha-vertical">

                        <div class="group">
                            <input name="titulo_vaga" class="input-siaae @error('titulo_vaga') input-error-siaae @enderror" value="{{ old('titulo_vaga') }}" required>
                            <label class="label-siaae">Titulo da Vaga:</label>
                        </div>
                        @error('titulo_vaga')
                            <div class="error-text">{{ 'O título da vaga deve ter no mínimo 5 caracteres.' }}</div>
                        @enderror

                        <div class="div-bolsa next-input-siaae">
                            <div class="group meio-input-esq">
                                <span class="checkBox-input">
                                    <input id="checkBoxBolsa"  name="checkBoxBolsa" @if(old('checkBoxBolsa') != "") checked @endif type="checkbox"/>
                                </span>
                                <input id="bolsa" name="bolsa" maxlength="10" class="input-siaae @error('bolsa') input-error-siaae @enderror" value="{{ old('bolsa') }}" @if(old('checkBoxBolsa') == "") disabled @endif>
                                <label class="label-siaae">Bolsa:</label>
                            </div>
                            <div class="group meio-input-dir">
                                <select name="auxilios" class="espacamento-inputs tes">
                                    <option class="text-select-itens-siaae" value="null">Auxílios</option>
                                    <option value="Auxílio Transporte">Auxílio Transporte</option>
                                    <option value="Auxílio Alimentação">Auxílio Alimentação</option>
                                </select>
                            </div>
                        </div>

                        <div class="div-turno next-input-siaae">
                            <div class="group meio-input-esq">
                                <input name="ch_semanal" class="input-siaae @error('ch_semanal') input-error-siaae @enderror" value="{{ old('ch_semanal') }}" required>
                                <label class="label-siaae">Carga Horaria Semanal:</label>
                            </div>
                            <div class="group meio-input-dir">
                                <select class="espacamento-inputs tes" name="turno" type="cadastro">
                                    <option value="0">Turno</option>
                                    <option value="1">Manhã</option>
                                    <option value="2">Tarde</option>
                                    <option value="3">Noite</option>
                                </select>
                            </div>
                        </div>
                        <div class="next-input-siaae">
                            <select name="cursos" class="tes" type="cadastro">
                                <option value="0">Cursos</option>
                                <option value="1">Superior em Engenharia de Computação</option>
                                <option value="2">Superior em Telemática</option>
                                <option value="3">Ensino Médio em Informática</option>
                            </select>
                        </div>

                        <div class="div-ch next-input-siaae">
                            <div class="group meio-input-esq">
                                <input name="ch_pratica" class="input-siaae @error('ch_pratica') input-error-siaae @enderror" value="{{ old('ch_pratica') }}" required>
                                <label class="label-siaae">Carga Horaria Pratica:</label>
                            </div>
                            <div class="group meio-input-dir">
                                <input name="ch_teorica" class="input-siaae @error('ch_teorica') input-error-siaae @enderror" value="{{ old('ch_teorica') }}" required>
                                <label class="label-siaae">Carga Horaria Teorica:</label>
                            </div>
                        </div>
                        <div class="div-data next-input-siaae">
                            <div class="group meio-input-esq">
                                <input name="data_inicio" class="input-siaae @error('data_inicio') input-error-siaae @enderror" value="{{ old('data_inicio') }}" onfocus="(this.type='date')"  required>
                                <label class="label-siaae">Data Início:</label>
                            </div>
                            <div class="group meio-input-dir">
                                <input name="data_fim" class="input-siaae @error('data_fim') input-error-siaae @enderror" value="{{ old('data_fim') }}" onfocus="(this.type='date')" required>
                                <label class="label-siaae">Data Fim:</label>
                            </div>
                        </div>
                        <div class="div-data next-input-siaae">
                            <div class="group meio-input-esq">
                                <input name="data_limite" class="input-siaae @error('data_limite') input-error-siaae @enderror" value="{{ old('data_fim')}}" onfocus="(this.type='date')" required>
                                <label class="label-siaae">Data Limite:</label>
                            </div>

                            <div class="group meio-input-dir">
                                <input name="vagas" maxlength="2" class="input-siaae @error('vagas') input-error-siaae @enderror" value="{{ old('vagas') }}" required>
                                <label class="label-siaae">Quantidade de vagas:</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LADO DIREITO -->

                <div class="col ladodir" id="conteudodir">
                    <textarea name="pre_requisitos" placeholder="Pré-requisitos" class="form-control desc-input text-area-vaga"></textarea>
                    <textarea name="atv_desempenhadas" placeholder="Atividades desempenhadas" class="espacamento-inputs form-control desc-input text-area-vaga"></textarea>
                    <div>
                        <textarea name="desc" placeholder="Descrição da Vaga" class="espacamento-inputs form-control desc-input text-area-vaga-desc"></textarea>
                        <button type="submit" class="system-button system-button-verde botao-cadastrar-vaga">Publicar</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script>
        // variaveis
        let checkBoxBolsa = document.getElementById('checkBoxBolsa')
        let inputBolsa = document.getElementById('bolsa')
        let valueBolsa = ''
        elementList = document.getElementsByClassName('input-siaae');


        // label remove.
        for (let i = 0; i < elementList.length; i++){
            if (elementList[i].value !== ""){
                elementList[i].focus()
                elementList[i].blur()
            }
        }

        // habilita e desabilita input de bolsa ao click na checkBox
        checkBoxBolsa.addEventListener('change', e => {
                if(e.target.checked === true) {
                    inputBolsa.removeAttribute('disabled')
                    inputBolsa.value = valueBolsa
                }
                if(e.target.checked === false) {
                    inputBolsa.setAttribute('disabled', true)
                    valueBolsa = inputBolsa.value
                    inputBolsa.value = ''
                }
            }
        )


        // usa vírgula como separador decimal, ponto como separador de milhar, sempre com 2 casas decimais
        const formatter = new Intl.NumberFormat('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

        function mascaraMoeda(e) {
            const input = e.target;
            // elimina tudo que não é dígito
            input.value = input.value.replace(/\D+/g, '');
            if (input.value.length === 0) // se não tem nada preenchido, não tem o que fazer
                return;
            // verifica se ultrapassou a quantidade máxima de dígitos (pegar o valor no dataset)
            const maxDigits = parseInt(input.dataset.maxDigits);
            if (input.value.length > maxDigits) {
                // O que fazer nesse caso? Decidi pegar somente os primeiros dígitos
                input.value = input.value.substring(0, maxDigits);
            }
            // lembrando que o valor é a quantidade de centavos, então precisa dividir por 100
            input.value = formatter.format(parseInt(input.value) / 100);
        }
        document.getElementById('bolsa').addEventListener('input', mascaraMoeda);
    </script>

@endsection

