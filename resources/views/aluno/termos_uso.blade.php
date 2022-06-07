@extends('layouts.loginLayout', ['pagetitle' => 'SIAAE - Termos de uso'])


@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/termos_uso.css') }}">
@endpush


@section('content')
    <div class="page-content">

        <div id="div-termos-de-uso">
            <h4 class = "h4">Termos e Políticas de Privacidade</h4>

            <div id="div-termos-de-uso-text">


                <h4 class = "h4">FUNDAMENTOS E PRINCÍPIOS DA LEI GERAL DE PROTEÇÃO DE DADOS</h4>
                <p class = "e561_2347">
                    O desenvolvimento do tratamento autônomo de proteção dos dados deu lugar a diversas
                    leis que passaram a regulamentar o assunto com o fim de obter um modelo jurídico rico e
                    complexo (DONEDA, 2011, p. 98).
                </p>
                <p>
                    A despeito disso, o direito fundamental autônomo a proteção de dados deriva, no Brasil,
                    da constatação dos riscos que o tratamento inadequado dos dados traz à proteção da
                    personalidade da pessoa humana, não decorre de reconhecimento expresso na Constituição
                    Federal da fundamentalidade do direito, como exemplificado no tópico precedente.
                </p>
                <p>
                    Hodiernamente, a Lei Geral de Proteção de dados (Lei nº 13. 709/ 2018) regulamenta
                    a proteção de dados em âmbito nacional no país, conciliando a proteção da pessoa, interesse
                    público e incentivo ao desenvolvimento econômico e tecnológico ligados à circulação da
                    informação.
                </p>
                <p>
                    Após anos de debates, a LGPD reflete aquilo que vem a ser a espinha dorsal das
                    regulamentações existentes acerca da proteção de dados que tratam das questões principais com
                    as quais o ordenamento irá ter que lidar.
                </p>
                <p>
                    Ao longo do artigo 2º, a LGPD expõe seus fundamentos, respeito à privacidade e
                    autodeterminação informativa; liberdade de expressão, informação, comunicação e opinião;
                    inviolabilidade da intimidade, da honra e imagem; desenvolvimento econômico e tecnológico;
                    inovação, livre iniciativa, concorrência e defesa do consumidor; direitos humanos, o livre
                    desenvolvimento da personalidade, dignidade e o exercício da cidadania.
                </p>
                <p>
                    Em síntese, ao proteger a inviolabilidade da intimidade, honra, imagem e vida privada,
                    a LGPD vislumbra a salvaguarda da privacidade; ao contemplar o direito ao controle e
                    proteção de dados pessoais, tutela a autodeterminação informativa. Também, preserva a
                    liberdade de expressão, informação, comunicação, livre opinião, a liberdade de iniciativa e livre
                    concorrência, com a defesa do consumidor; tutela a democracia, os direitos mais sensíveis da
                    personalidade da pessoa humana e sua dignidade (SERPRO, 2020).
                </p>
                <p>
                    Não obstante, seu maior objetivo encontra-se na garantia de que a pessoa se cientifique
                    acerca de quais dados estão sendo acessados, coletados e armazenados, para qual fim e por
                    quem, o que fica evidente a partir da análise dos princípios que regulamentam a proteção de
                    dados no país dispostos no art. 6º da Lei — boa-fé, finalidade, adequação, necessidade, livre
                    acesso, qualidade dos dados, transparência, segurança, prevenção, não discriminação,
                    responsabilização e prestação de contas.
                </p>
                <p>
                    O princípio da boa-fé institui padrão ético de conduta pautado nos ideais de honestidade,
                    lealdade e lisura, de modo a garantir a legitima confiança e expectativa (SILVA; SANTOS,
                    2011, p. 128).
                </p>
                <p>
                    Somado a ele, o princípio da finalidade impõe que a utilização dos dados se dê nos
                    exatos moldes que haviam sido elencados no momento do recolhimento, com finalidade
                    legitima, em conformidade com as normas que regulamentam o tratamento de dados do início
                    ao fim (GEDIEL; CORRÊA, 2008, p. 147).
                </p>
                <p>
                    O princípio em questão delimita a transmissão dos dados a terceiros e institui critérios
                    para a tratativa de dados, propósitos legítimos, específicos, explícitos e informados ao usuário,
                    impedindo finalidades genéricas e indeterminadas por meio da realização de um juízo de
                    ponderação entre a “utilização de determinados dados para certa finalidade" (DONEDA, 2011,
                    p. 100).
                </p>
                <p>
                    Somado a isso, a motivação deverá condizer com a informação solicitada, presentes a
                    pertinência e adequação com relação finalidade informada, conforme traça o princípio da
                    adequação. O tratamento, ainda, deverá se limitar ao mínimo indispensável ao atendimento
                    das finalidades com dados apropriados, não excessivos e proporcionais à finalidade, nos moldes
                    do princípio da necessidade (art. 6º, III, da LGPD).
                </p>
                <p>
                    O princípio da proporcionalidade no uso de dados para alcance dos fins os quais se
                    almeja deverá ser, igualmente, atendido.
                </p>
                <p>
                    Também, os dados armazenados precisam condizer com a realidade, assim a coleta e
                    tratamento devem ser feitos de modo adequado com cuidado, correção e devida atualização
                    (DONEDA, 2011).
                </p>
                <p>
                    Não obstante, o princípio do livre acesso assegura, como o próprio nome já diz, o livre
                    acesso do titular e consulta facilitados à totalidade de seus dados, particularmente, com
                    relação a forma e duração do tratamento. O dono dos dados terá acesso às informações
                    armazenadas, facultada a cópia dos registros e viabilizado o controle dos dados, podendo,
                    inclusive, osretificar, suprimir e complementar com novas informações (BEDENDO;JUNIOR,
                    2010, p. 11).
                </p>
                <p>
                    Além disso, o responsável deverá informar o titular dos dados indicando as informações
                    relevantes para o tratamento de dados, até mesmo quanto às especificidades, tais como às
                    relacionadas à forma, fim e tempo de armazenamento dos dados (GEDIEL; CORRÉA, 2008,
                    p. 147), nos exatos termos do trazido pelo princípio da transparência (ou da publicidade). Não
                    só, como também, a LGPD assegura exatidão, clareza, relevância e atualização dos dados, de
                    acordo com a necessidade e para o cumprimento da finalidade deseu tratamento, conforme o
                    princípio da qualidade dos dados impõe.
                </p>
                <p>
                    Malgrado, o princípio da segurança física e lógica impõe a necessidade de utilização
                    de medidas técnicas e administrativas eficientes à proteção dos dados. Trata-se da
                    implementação e gerenciamento de um sistema eficiente e abrangente de governança e gestão
                    de riscos de segurança da informação que leve em conta a complexidade da problemática da
                    proteção de dados.
                </p>
                <p>
                    O princípio da prevenção impõe, ainda, ao responsável pelos dados, a obrigação de que
                    essas medidas e politicas qualitativas se deem previamente de modo qualitativo com o fim de
                    evitar eventuais danos oriundos do tratamento dos dados.
                    Outrossim, os dados pessoais não poderão ser usados com o fim de promover
                    discriminação do titular dos dados de qualquer natureza, raça, sexo, cor, idade e quaisquer
                    outras formas (art. 3º, III e IV).
                </p>
                <p>
                    Caso o uso acarrete prejuízo ou viole quaisquer regras do ordenamento jurídico,ensejará
                    responsabilização civil, nos termos do princípio da responsabilização que exige ainda, o
                    acompanhamento pelas autoridades competentes do processamento dos dados impondo sanções
                    quando houver descumprimento da lei. Paralelamente, o princípio da prestação de contas trata
                    da necessidade de comprovação da adoção das medidas adequadas.
                </p>
                <p>
                    Conforme destaca ALMEIDA (et al., 2020, p. 2490), a “conformidade com as leis
                    gerais de proteção de dados, portanto, requer tecnologia, infraestrutura e pessoal especializado
                    para que os dados sejam tratados de forma lícita, justa e responsável em relação aos titulares”.
                    Os dados abrangidos pela LGPD são quaisquer dados que estejam relacionados à pessoa
                    situada no Brasil quando da coleta, independentemente da nacionalidade, do meio aplicado,
                    país-sede do operador ou localidade dos dados. Além disso, abarca todos os setores da
                    economia, com aplicação transversal, multisetorial e extraterritorial.
                </p>
                <p>
                    O âmbito de proteção da lei é tão alargado que ao conceituar o que vem a ser dado
                    pessoal a LGPD engloba qualquer informação relacionada à pessoa natural identificada ou
                    identificável, seja dado sensível ou não.
                </p>
                <p>
                    A exceção do alcance da lei fica por conta do rol do art. 4 da LGPD, excepcionados os
                    fins exclusivamente particulares e não econômicos e os exclusivamente jornalísticos, artísticos,
                    acadêmicos, bem como os exclusivos de segurança pública, defesa nacional, segurança de
                    Estado ou atividade de investigação e repressão de infrações penais, além dos dados advindos
                    de fora do país e que não sejam objeto de transferência internacional, desde que o país de onde
                    derivarem disponha de proteção adequada.
                </p>
                <p>
                    Evidencia-se, assim, que a Lei Geral de Proteção de Dados trata-se de marco para a
                    regulamentação dos dados pessoais no Brasil.
                </p>
                <p>
                    Entretanto, apesar de instituir importantes princípios e direitos aos seus titulares a
                    vacatio legis, que em 2018 era de dois anos, foi postergada para agosto de 2020 por meio da
                    Medida Provisória 696/2019, convertida na Lei 13.853/2019.
                </p>
                <p>
                    Na sequência, a grave recessão causada pela pandemia do COVID-19 levou a edição do
                    PL 1.179/2020 que estabelece regime jurídico emergencial, ficando decidida, em sede de
                    primeira votação, postergação para janeiro de 2021, a exceção da vacatio das multas esanções
                    que ficariam para agosto de 2021.
                </p>
                <p>
                    O imbróglio não parou por aí, a Medida Provisória 959/2020 que passou a vigorar na
                    data de sua publicação, 29 de abril do ano corrente, adiou a vigência da lei para maio de 2021.
                    Até 27 de agosto do ano corrente a Medida deverá ser convertida em lei para que não caduque.
                    Quando ao PL 1.179/2020, o Senado acabou por suprimir o dispositivo que prorrogava
                    a vigência da Lei, ficando mantida a prorrogação apenas no que se refere às sanções.
                </p>
                <p>
                    Neste contexto, verifica-se cenário de insegurança com dois resultados possíveis: “sem
                    a MP convertida em lei a LGPD entraria em vigor em 16 de agosto de 2020 (vigência que era
                    prevista antes do início da pandemia) ou, com a conversão em lei da MP, a LGPD entraria em
                    vigor em 3 de maio de 2021” (TUMELERO, 2020).
                </p>
                <p>
                    Além disso, até o presente momento o executivo não criou a Autoridade nacional de
                    proteção de Dados (ANPD) que tem a finalidade de fiscalizar a aplicação da LGPD.
                    Especialmente, em situações emergenciais e de interesse público, como no caso da
                    pandemia do COVID-19, os dados se mostram essenciais para a adoção de políticas de
                    enfrentamento, tornando-se a LGPD importante marco regulatório cuja vigência não pode
                    mais ser postergada, dado os prejuízos aos direitos e garantias fundamentais que tutela, isso
                    sem falar nos prejuízos econômicos.
                </p>
            </div>
            </div>

            <form
                action="{{ route('home-aluno') }}">
                <div>
                    <input type="checkbox" id="horns" name="horns" class = "checkbox_t" required/>
                    <label>Declaro que li e aceito os termos e politica de privacidade</label>
                </div>
                <button type="submit" class="system-button system-button-vermelho">
                    Continuar
                </button>
            </form>

        </div>
@endsection
