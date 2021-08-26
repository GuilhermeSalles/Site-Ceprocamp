<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Principal.css">

    <title>CEPROCAMP - Centro de Educação Profissional de Campinas |</title>

</head>

<body>

    <!-- Logos antes do menu -->
    <div class="container">
        <div class="row">
            <div class="col-sm-2 d-lg-block d-none ">
                <img src="img/logo_campinasP.png" class="img d-block">
            </div>

            <div class="col-sm-8 d-lg-block d-none mt-4">
                <h1 style="color: #fe5522a8; font-weight: bolder;" class="text-center display-2">CEPROCAMP</h1>
            </div>

            <div class="col-sm-2 d-lg-block d-none ">
                <img src="img/logo-direita.png" class="img d-block">
            </div>
        </div>
    </div>
    <!-- Menu -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-toggle="affix">
        <div class="container">
            <div class="justify-content-left">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon">
                        <h4 style="margin-left: 80px;">CEPROCAMP</h4>
                    </span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSite">
                <a class="navbar-brand h1 mb-1 justify-content-right" href="index">Inicio</a>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item" href="index">Centro</a>
                            <a class="dropdown-item" href="joseAlves">José Alves</a>
                            <a class="dropdown-item" href="ouroVerde">Ouro Verde</a>
                            <a class="dropdown-item" href="cambara">Cambará</a>
                            <a class="dropdown-item" href="campoGrande">Campo Grande</a>
                            <a class="dropdown-item" href="casi">CASI</a>
                            <a class="dropdown-item" href="myrian">Myrian</a>
                            <a class="dropdown-item" href="Unidades-Parceiras/Parceiras">Parceiras</a>

                            <!--
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">sub menu</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                    <li><a class="dropdown-item" href="#">Another submenu action</a></li>
                                </ul>
                            </li> -->

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="CursosQualificacao">Cursos</a>
                    </li>

                    <li class="nav-item">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                    CEPROCAMP
                                </a>
                                <div class="dropdown-menu">

                                    <a class="dropdown-item" href="Doc/calendario_homologado_2021.pdf" target="_blank">Calendário</a>
                                    <a class="dropdown-item" href="https://fumec.sp.gov.br/eja/eja-profissoes" target="_blank">EJA Profissões</a>
                                    <a class="dropdown-item" href="https://www.fumec.sp.gov.br/matriz%20curricular " target="_blank">Matrizes dos cursos</a>
                                    <a class="dropdown-item" href="QuemSomos" target="_blank">Missão,
                                        Visão e Valores</a>
                                    <a class="dropdown-item" href="https://www.fumec.sp.gov.br/ceprocamp/aluno/planos-ensino" target="_blank">Planos de ensino</a>
                                    <a class="dropdown-item" href="https://www.fumec.sp.gov.br/node/634" target="_blank">Professores Orientadores de Área - POA's</a>
                                    <a class="dropdown-item" href="Doc/projeto_pedagogico_2018-2021.pdf" target="_blank">Projeto Pedagógico</a>
                                    <a class="dropdown-item" href="Doc/regimento_escolar_site_-_com_sumario.pdf" target="_blank">Regimento escolar</a>

                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Aluno</a>

                                <div class="dropdown-menu">

                                    <a class="dropdown-item" href="https://www.fumec.sp.gov.br/ceprocamp/acesso-plataforma-google-class" target="_blank">Acesso à Plataforma Google Class</a>
                                    <a class="dropdown-item" href="Doc/HORARIOS DE AULAS.pdf" target="_blank">Horarios
                                        de aula</a>
                                    <a class="dropdown-item" href="https://www.fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/manual_do_aluno_reformulado_2021_0.pdf" target="_blank">Manual do Aluno</a>
                                    <a class="dropdown-item" href="Doc/Auxilio transporte.pdf" target="_blank">Regulamento - Auxílio Transporte</a>

                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.fumec.sp.gov.br/" target="_blank">FUMEC</a>
                    </li>

                    <li class="nav-item">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">NIT</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="nit">Sobre NIT</a>
                                    <a class="dropdown-item" href="/Sistemas">Sistemas</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                    Redes Sociais
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://www.facebook.com/fumec.cepro/">Facebook</a>
                                    <a class="dropdown-item" href="https://www.instagram.com/fumec.cepro/">Instagram</a>
                                    <a class="dropdown-item" href="https://www.youtube.com/channel/UC1He1mXyJyfIkIh2RvG7A7Q">Youtube</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="PerguntasFrequentes">Perguntas Frequentes</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="Fale_conosco">Fale
                            Conosco</a>
                    </li>
                    -->
                </ul>
            </div>
    </nav>

    <!-- Fim do Menu -->