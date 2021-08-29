<?php include 'header-menu.php' ?>


<div id="carouselSite" class="carousel slide d-block" data-ride="carousel" data-interval="7000">
    <!-- Lista de riscos brancos do carrossel -->
    <div class="carousel-inner">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>
            <li data-target="#carouselSite" data-slide-to="4"></li>
        </ol>
        <!-- Imagens com texto do carrossel -->
        <div class="carousel-item active">
            <img src="img/CeprocampCentro.png" class="img-fluid d-block">
            <div class="carousel-caption">
                <h1 class="d-sm-block d-none">CENTRO</h1>
                <h5>Centro - Cursos de Qualificação e Técnicos.</h5>
                <a class="btn btn-light" href="index" role="button">Saiba mais</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/ouroverde.jpeg" class="img-fluid d-block">
            <div class="carousel-caption text-center">
                <h1 class="d-sm-block d-none">Ouro Verde</h1>
                <h5>Ouro Verde - Cursos de Qualificação.</h5>
                <a class="btn btn-light" href="ouroVerde" role="button">Saiba mais</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/joseAlves.jpeg" class="img-fluid d-block">
            <div class="carousel-caption text-center">
                <h1 class="d-sm-block d-none">José Alves</h1>
                <h5>José Alves - Cursos de Qualificação.</h5>
                <a class="btn btn-light" href="joseAlves" role="button">Saiba mais</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/cambara.jpeg" class="img-fluid d-block">
            <div class="carousel-caption text-center">
                <h1 class="d-sm-block d-none">Cambará</h1>
                <h5>Cambará - Cursos de Qualificação.</h5>
                <a class="btn btn-light" href="cambara" role="button">Saiba mais</a>
            </div>
        </div>

    </div>


    <!-- Botões de anterior e proximo do carrossel -->
    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
    </a>


    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Avançar</span>
    </a>

</div>
<br>
<!-- Fim carrossel -->

<!-- parte de avisos em um carrossel que passa de 5 em 5 segundos -->
<br>
<?php include 'avisos.php' ?>

<!-- Parte sobre os cursos QP -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h4 class="display-4">Cursos Qualificação Profissional</h4>
            <hr class="Qp">
            <p> Visam preparar o candidato para a vida profissional e
                social, assim como promover a inclusão de jovens e adultos no mercado de trabalho. São
                cursos oferecidos de acordo com a demanda do mercado de trabalho e tem em média a duração de
                2 a 12 meses.</p>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color: rgba(187, 101, 9, 0.145);" data-anime="left">
    <div class="container">
        <div class="tab-content " id="nav-pills-content">
            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="row mb-4">
                            <div class="card-deck">
                                <div class="card m-3">

                                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/6.png" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title">AGENTE DE SEGURANÇA DO TRABALHO E HIGIENE
                                            OCUPACIONAL
                                        </h5>
                                        <p class="card-text">Dê assistência na elaboração de procedimentos de segurança em diversos segmentos.
                                        </p>
                                        <a href="Curso/Agente_de_segurança_do_trabalho_e_higiene_ocupacional" class="btn btn-danger">Ver Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><b>Período:</b> Manhã. <br><b>Duração: </b>
                                            240 h/a = 200 horas</small>
                                    </div>
                                </div>

                                <div class="card m-3">
                                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/26.png" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title">ALMOXARIFE</h5>
                                        <p class="card-text">Aprenda a controlar a entrada/saída de produtos e materiais de um almoxarifado.</p>
                                        <a href="Curso/Almoxarife" class="btn btn-danger">Ver Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><b>Período:</b> Manhã. <br><b>Duração: </b>
                                            400 h/a = 333 horas </small>
                                    </div>
                                </div>

                                <div class="card m-3">
                                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/19.png" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title">AUXILIAR DE DEP. PESSOAL/RH</h5>
                                        <p class="card-text">Aprenda a executar atividades relacionadas a administração de pessoas.
                                        </p>
                                        <a href="Curso/Auxiliar_de_departamento_pessoal_RH" class="btn btn-danger">Ver
                                            Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><b>Período: </b>Noite.
                                            <br><b>Duração:</b> 240 h/a = 200
                                            horas </small>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center mb-4">
                                    <a class="btn btn-danger" href="CursosQualificacao" role="button">Clique
                                        aqui para mais cursos de Qualificação</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Parte sobre os cursos Técnicos -->

<div class="container" id="tec">
    <div class="row">

        <div class="col-12 text-center mb-4" data-anime="top">
            <h4 class="display-4">Cursos Técnicos</h4>
            <hr class="tec">
            <p> Cursos de nível médio que buscam proporcionar conhecimentos teóricos e
                práticos nas diversas atividades do setor produtivo. Esses cursos tem uma média de duração
                de 1 a 2 anos.</p>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color: rgba(9, 29, 179, 0.145);" data-anime="left">
    <div class="container">
        <div class="tab-content " id="nav-pills-content">
            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="row mb-4">
                            <div class="card-deck">

                                <div class="card m-3">
                                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/25.png" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title">TÉCNICO EM LOGÍSTICA</h5>
                                        <p class="card-text">Atue na gestão de setores logísticos garantindo o armazenamento, separação, envio e trajeto adequados.
                                        </p>
                                        <a href="Curso/Tecnico_em_Logistica" class="btn btn-danger">Ver Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><b>Período:</b> Noite.
                                            <br><b>Duração:</b> 03 semestres</small>
                                    </div>
                                </div>

                                <div class="card m-3">
                                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/14.png" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title">TÉCNICO EM ADMINISTRAÇÃO</h5>
                                        <p class="card-text">Atue em empresas de diversos segmentos aplicando procedimentos para garantir o funcionamento completo destas organizações.</p>
                                        <a href="Curso/Tecnico_em_Administracao" class="btn btn-danger">Ver
                                            Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><b>Período:</b> Tarde, Noite.
                                            <br><b>Duração:</b> 03 semestres</small>
                                    </div>
                                </div>

                                <div class="card m-3">
                                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/10.png" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title">TÉCNICO EM MEIO AMBIENTE</h5>
                                        <p class="card-text">Atue na elaboração de planos e ações ambientais, estudos técnicos e estratégias para controlar o impacto ambiental.</p>
                                        <a href="Curso/Tecnico_em_Meio_Ambiente" class="btn btn-danger">Ver
                                            Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><b>Período:</b> Tarde, Noite.
                                            <br><b>Duração:</b> 04 semestres</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Parte cinza claro sobre o Local que deve colocar o google maps e alterar a descrissão-->
<br>
<div class="jumbotron jumbotron-fluid" data-anime="left">
    <div class="container">
        <div class="tab-content" id="nav-pills-content">
            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                <div class="row">
                    <div class="col-sm-5">
                        <!-- Parte da descrissão -->
                        <h1>Ceprocamp - Centro </h1>
                        <br>
                        <span style="font-weight: bold;">Endereço: </span>Avenida 20 de Novembro,
                        145. <br>
                        Campinas-SP (ao lado da Estação Cultura). <br><span style="font-weight: bold;">CEP:</span>
                        13013-140.
                        <p><span style="font-weight: bold;">Gestor:</span> Laderlei Luiz Marangoni
                        </p>
                        <p style="font-weight: bold">Para mais informações:</p><span style="font-weight: bold;">Telefone:</span>
                        (19) 3731.3650. <br>
                        <span style="font-weight: bold;">E-mail:</span> <a style="color: #fe5722;" href="mailto:fumec.ceprocamp@campinas.sp.gov.br">fumec.ceprocamp@campinas.sp.gov.br</a>
                        <!-- <span style="color: darkgreen;">Whatsapp:</span> (19) 99802-2423. <br> -->
                        </p>
                    </div>
                    <div class="col-sm-7">
                        <!-- Parte aonde deve colocar o google maps -->
                        <div id="mapf" class="col-sm">
                            <iframe class="map-big" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1611.6004010871873!2d-47.066509884600116!3d-22.908321123006417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8b700170993%3A0x448db64c645985ad!2sCEPROCAMP!5e1!3m2!1spt-BR!2sbr!4v1620853110117!5m2!1spt-BR!2sbr" width="650" height="450" style="border: 1px solid black; border-radius: 5px;" allowfullscreen="" loading="lazy"></iframe>
                            <iframe class="map-small" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1611.6004010871873!2d-47.066509884600116!3d-22.908321123006417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8b700170993%3A0x448db64c645985ad!2sCEPROCAMP!5e1!3m2!1spt-BR!2sbr!4v1620853110117!5m2!1spt-BR!2sbr" width="250" height="150" style="border:1px solid black; border-radius: 5px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>