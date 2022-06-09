<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>SIAAE - Sistema Integrado de Apoio a Aprendizagem e Estágios</title>
    <!-- CSS only -->
    <link rel="stylesheet" type='text/css' media='screen' href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type='text/css' media='screen' href="{{asset('css/main.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon-siaae.ico')}}">
<header>
    <div class="nav-bar">
        <div class="area-logo">
            <img class="logo-img" alt="SIAAE - Sistema Integrado de Apoio a Aprendizagem e Estágios" src="images/logo-reta.png">
        </div>
        <div class="area-menu">
            <a class="btn-no-styled" href="#sobre">Sobre</a>
            <a class="btn-no-styled" href="#como-funciona">Como Funciona</a>
            <a class="btn-no-styled" href="#funcionalidades">Funcionalidades</a>
            <a href="#contatos"><button type="button" class="btn btn-primary color-styled">Entre em contato</button></a>
        </div>
    </div>
</header>
<body>
    <div class="page-1 centralize w-75">
        <div class="area-img-1">
            <img class="img-1" src={{asset('/images/menina_1.png')}}>
        </div>
        <div class="area-button-logo">
            <div class="box-btn">
                <img class="img-2" src={{asset('/images/logo-bloco.png')}}>
                <div class="area-btn">
                    <a href="/login_aluno"><button type="button" class="btn btn-primary floatLeft color-styled" href="">Sou aluno</button></a>
                    <a href="/login_empresa"><button type="button" class="btn btn-primary floatLeft color-styled" href="">Empresa</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="video-area">
        <video class="video-part" controls>
            <source src="{{asset('video/demo.mp4')}}" type="video/mp4">
          Your browser does not support the video tag.
          </video>
    </div>
    <div class="page-2 centralize w-75">
        <div class="area-text-2">
            <div class="centralize">
                <h2 id="sobre">Sobre</h2>
                <p>O Sistema Integrado de Apoio à Aprendizagem e Estágios (SIAAE), é um sistema web que atua na promoção de meios para os interessados em ofertar vagas e publicizar essa informação a toda comunidade acadêmica dos Institutos Federais.
                O SIAAE visa centralizar e facilitar as divulgações e informações prestadas acerca das vagas de estágio e/ou aprendizagem, a fim de melhorar a experiência de busca e divulgação destas atividades de prática profissional.
                </p>
                <h2 id="como-funciona">Como Funciona ?</h2>
                <p>
                    No SIAAE os usuários terão acesso à interface, por meio de um login,  vinculado com suas credenciais cadastradas no sistema SUAP. Os alunos dos Institutos Federais e empresas cadastradas, poderão acessar o sistema de acordo com suas necessidades, seja para divulgação de vagas pelas empresas e docentes ou para busca por parte dos alunos.
                </p>
            </div>
            <h2 class="passo-text">Passo a Passo</h2>
            <div class="passos-area">
                <h3 class="empresa-title">Empresa</h3>
                <div class="passos-empresa format-passos col">
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-empresa-1.svg')}}" alt="">
                        <p>1- Entre usando seu login e senha do SUAP</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-empresa-2.svg')}}" alt="">
                        <p>2- Crie uma nova vaga através da opção "Criar nova vaga" no menu lateral, preenchendo os campos requisitados, e prossiga clicando em "Confirmar", e por fim, em "Finalizar"</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-empresa-3.svg')}}" alt="">
                        <p>3- Acompanhe suas publicações de vagas através da opção "Lista de vagas" no menu lateral;</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-empresa-4.svg')}}" alt="">
                        <p>4- Visualize os candidatos às vagas, clicando em "Candidatos";</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-empresa-5.svg')}}" alt="">
                        <p>5- Escolha os candidatos que mais se adequa à sua publicação, a atualizar seus status de acordo com sua opção.
                        </p>
                    </div>
                </div>
                <div class="centro-passos centralize format-passos"></div>
                <h3 class="aluno-title">Aluno</h3>
                <div class="passos-aluno format-passos col">
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-aluno-1.svg')}}" alt="">
                        <p>1- Entre usando seu login e senha do SUAP</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-aluno-2.svg')}}" alt="">
                        <p>2- Busque vagas através da opção "Cadastre-se à vagas" no menu lateral</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-aluno-3.svg')}}" alt="">
                        <p>3-Escolha uma das ofertas e clique em "Saiba mais"</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-aluno-4.svg')}}" alt="">
                        <p>4- Após ter acesso aos detalhes da vaga, clique em  "Candidatar-se"</p>
                    </div>
                    <div class="item-passo">
                        <img class="icon align-item" src="{{asset('images/icon/icon-aluno-5.svg')}}" alt="">
                        <p>5- Acompanhe o status da sua candidatura através da opção "Lista de vagas" no menu lateral</p>
                    </div>
                </div>
            </div>
            <h2 class="title-funcionalidades">Funcionalidades</h2>
            <div id="funcionalidades" class="area-funcionalidades">
                <div class="funcionalidade-col-1 col">
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Divulgação de vagas de projetos, estágios e trabalho sem intermediários;</span>
                    </div>
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Listagem de candidatos para seleção de vagas através do sistema;</span>
                    </div>
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Alcance direto a atualizações sobre a disponibilidade ou não da vaga;</span>
                    </div>
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Mecanismos inteligentes de filtragem de candidatos com base em metadados (e.g., formação, localidade, idade);</span>
                    </div>
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Vagas disponibilizadas com direcionamento aos alunos dos Institutos Federais;</span>
                    </div>
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Centralização e melhor organização da lista de disponibilidades;</span>
                    </div>
                    <div class="item-funcionalidade">
                        <img class="check-icon" src="{{asset('images/icon/check_icon.svg')}}" alt="">
                        <span>Geração de dados e indicadores para gestão da prática profissional (i.e. aprendizagem e estágio);</span>
                    </div>
                </div>
                <div class="col centralize image-area-2">
                    <img class="image-2" src="{{asset('images/menina_2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="page-3">
        <div class="faq-text">
            <p class="faq-title">F.A.Q</p>
            <p>Perguntas Frequêntes</p>
            <div class="mini-bar"></div>
            <div class="button-faq">
                <button type="button" class="btn btn-secondary">Estágio</button>
                <button type="button" class="btn btn-secondary">Aprendizagem</button>
            </div>
        </div>
    </div>
    <div class="accordion-principal">
        <div class="accordion-area w-75">
            <button class="accordion">O que é Aprendizagem Profissional?</button>
            <div class="panel">
                <p>Lorem ipsum...</p>
            </div>

            <button class="accordion">O que é o contrato de Aprendizagem Profissional? </button>
            <div class="panel">
                <p>Lorem ipsum...</p>
            </div>

            <button class="accordion">Quais os requisitos de validade do contrato de Aprendizagem Profissional?</button>
            <div class="panel">
                <p>Lorem ipsum...</p>
            </div>
        </div>
    </div>
    <div id="contatos" class="page-4">
        <div class="big-bar-background"><span class="big-bar-text">ENTRE EM CONTATO</span></div>
        <div class="form-area">
            <form class="contato-form w-50">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="name" class="form-control" id="inputName" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Assunto">
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="resize: none" id="exampleFormControlTextarea1" rows="5" placeholder="Mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-light">Enviar mensagem</button>
            </form>
            <div class="area-logo-white">
                <img class="mini-logo-white" src="{{asset('images/SIAAE_MINI_LOGO_WHITE.png')}}">
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="col">coecg@ifpb.edu.br</p>
        <p class="col">(83) 2102-6208 - Coordenação de Estágio</p>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
