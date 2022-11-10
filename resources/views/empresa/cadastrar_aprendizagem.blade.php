@extends('layouts.appLayout', ['userType' => 'empresa'])

@push('custom-styles')
    <link href="{{asset('css/multiSelect/bootstrap-multiselect.css')}}" rel="stylesheet"/>
    <script src="{{asset('css/multiSelect/bootstrap-multiselect.min.js')}}"></script>
@endpush

@section('content')
    <link rel="stylesheet" href="{{ asset('css/empresa/cadastroDeVagas.css') }}">
    <div class="divisao-superior col-lg" id="div-page-content">
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

        <form method="POST" action="{{route('cadastrar.vaga.aprendizagem', ["inclusao" => $inclusao])}}">
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
                                @error('bolsa')
                                <div class="error-text">{{ 'Formato Inválido.' }}</div>
                                @enderror
                            </div>
                            <div class="group meio-input-dir">
                                <select id="Auxilios" multiple name="auxilios" class="espacamento-inputs select-siaae">
                                    <option class="text-select-itens-siaae" value="null">Auxílios</option>
                                    <option value="Auxílio Transporte">Auxílio Transporte</option>
                                    <option value="Auxílio Alimentação">Auxílio Alimentação</option>
                                </select>
                                @error('auxilios')
                                <div class="error-text">{{ 'Erro Deseconhecido.' }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="div-turno next-input-siaae">
                            <div class="group meio-input-esq">
                                <input onfocus="(this.type='time')" name="ch_semanal"
                                       class="time input-siaae @error('ch_semanal') input-error-siaae @enderror"
                                       value="{{ old('ch_semanal') }}" required>
                                <label class="label-siaae">Carga Horaria Semanal:</label>
                                @error('ch_semanal')
                                <div class="error-text">{{ 'Horário inválido.' }}</div>
                                @enderror
                            </div>
                            <div class="group meio-input-dir">
                                <select class="espacamento-inputs select-siaae" name="turno" type="cadastro">
                                    <option value="0">Turno</option>
                                    <option value="1">Manhã</option>
                                    <option value="2">Tarde</option>
                                    <option value="3">Noite</option>
                                </select>
                                @error('turno')
                                <div class="error-text">{{ 'Esse campo é obrigatorio.' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="next-input-siaae group">
                            <select multiple id="Cursos" name="cursos[]" class="multiSelect-siaae">
                                @foreach($cursosAll as $campi)
                                    <optgroup style="width: 10px" label="{{$campi[0]}}">
                                        @foreach($campi[1] as $curso)
                                            <option value="{{$curso['nome']}}">{{$curso['nome']}}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                            @error('cursos')
                            <div class="error-text">{{ 'Selecione ao menos 1 curso.' }}</div>
                            @enderror
                        </div>

                        <div class="div-ch next-input-siaae">

                            <div class="group meio-input-esq">

                                <input onfocus="(this.type='time')" name="ch_pratica"
                                       class="time input-siaae @error('ch_pratica') input-error-siaae @enderror"
                                       value="{{ old('ch_pratica') }}"
                                       required>

                                <label class="label-siaae">Carga Horaria Pratica:</label>

                                @error('ch_pratica')
                                    <div class="error-text">{{ 'Horário inválido.' }}</div>
                                @enderror

                            </div>

                            <div class="group meio-input-dir">
                                <input onfocus="(this.type='time')" name="ch_teorica"
                                       class="time input-siaae @error('ch_teorica') input-error-siaae @enderror"
                                       value="{{ old('ch_teorica') }}"
                                       required>
                                <label class="label-siaae">Carga Horaria Teorica:</label>
                                @error('ch_teorica')
                                    <div class="error-text">{{ 'Horário inválido.' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="div-data next-input-siaae">
                            <div class="group meio-input-esq">
                                <input name="data_inicio" class="date input-siaae @error('data_inicio') input-error-siaae @enderror" value="{{ old('data_inicio') }}" onfocus="(this.type='date')"  required>
                                <label class="label-siaae">Data Início:</label>
                                @error('data_inicio')
                                <div class="error-text">{{ 'Data inválida.' }}</div>
                                @enderror
                            </div>
                            <div class="group meio-input-dir">
                                <input name="data_fim" class="date input-siaae @error('data_fim') input-error-siaae @enderror" value="{{ old('data_fim') }}" onfocus="(this.type='date')" required>
                                <label class="label-siaae">Data Fim:</label>
                                @error('data_fim')
                                <div class="error-text">{{ 'Data inválida.' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="div-data next-input-siaae">
                            <div class="group meio-input-esq">
                                <input name="data_limite" class="date input-siaae @error('data_limite') input-error-siaae @enderror" value="{{ old('data_limite')}}" onfocus="(this.type='date')" required>
                                <label class="label-siaae">Data Limite:</label>
                                @error('data_limite')
                                <div class="error-text">{{ 'Data inválida.' }}</div>
                                @enderror
                            </div>

                            <div class="group meio-input-dir">
                                <input name="vagas" maxlength="2" class="input-siaae @error('vagas') input-error-siaae @enderror" value="{{ old('vagas') }}" required>
                                <label class="label-siaae">Quantidade de vagas:</label>
                                @error('vagas')
                                    <div class="error-text">{{ 'O número de vagas tem que ser maior que 0.' }}</div>
                                @enderror
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
        let elementList = document.getElementsByClassName('input-siaae');
        let inputsTime = document.getElementsByClassName("time");
        let inputsDate = document.getElementsByClassName("date");

        timeConvert(inputsDate)
        timeConvert(inputsTime)

        function timeConvert(inputsTime){
            for (let input of inputsTime){
                input.addEventListener('focusout' , e => {
                    if (e.target.value === ""){
                        e.target.removeAttribute("type")
                    }
                })
            }
        }

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

    <script type="text/javascript">
        $('select[multiple]').multiselect();
    </script>


@endsection

