<?php include 'header-menu.php' ?>

<style>
    h6 {
        font-weight: bold;
        color: rgb(75, 75, 75);
    }
    .at{
        font-weight: bold;
        color: rgb(75, 75, 75);
        text-decoration: none;
    }
    .at:hover{
        font-weight: bold;
        color: rgb(75, 75, 75);
        text-decoration: none;
    }
</style>

<br>

<div class="container">

    <div class="text-center">
        <h2 style="color: rgb(75, 75, 75);font-weight: bold;">CEPROCAMP - OURO VERDE</h2>
        <hr class="hr3">
        <br>
    </div>

    <img src="img/Avisos/inscriçãoOV.png" class="img-fluid" alt="Inscrições">


    <br>
    <br>
    <br>
    <h2 style="color: rgb(75, 75, 75);font-weight: bold;">Matricula</h2>
    <p style="color: rgb(75, 75, 75);">
        Se você tiver interesse em se matricular em algum desses cursos, você deve comparecer em alguma das unidades para efetuar sua matrícula:
    </p>

    <table class="table table-hover">
        <thead>
            <tr>
                <th colspan="3" class="text-center"><a style="color: rgb(75, 75, 75);">Locais para Matricula</a></th>
            </tr>
            <th scope="col"><a class="ml-2 at">OURO VERDE</a>
            </th>
            <th scope="col"><a class="ml-4 at">CENTRO</a>
            </th>
            <th scope="col"><a class="ml-4 at">JOSÉ ALVES</a>
            </th>
            <tr>
            <th class="ml-0" scope="col"><a class="linkNIT" href="ouroVerde" ><img src="../img/Icones dia/map-pin.svg" alt="Local">Como chegar</a>
            </th>
            <th class="ml-0" scope="col"><a class="linkNIT" href="\"><img src="../img/Icones dia/map-pin.svg" alt="Local">Como chegar</a>
            </th>
            <th class="ml-0" scope="col"><a class="linkNIT" href="joseAlves"><img src="../img/Icones dia/map-pin.svg" alt="Local">Como chegar</a>
            </th>
            </tr>
        </thead>
    </table>

    <p style="color: rgb(75, 75, 75);">
        Horário para matrícula <b>(segunda-feira à sexta-feira)</b>: <b>09:00</b> às <b>12:00</b>, <b>13:00</b> às <b>17:00</b> e <b>18:00</b> às <b>20:00</b>.
    </p>

    <h6 style="font-weight: bold; color: rgb(75, 75, 75);">Documentos necessários (original e cópia):</h6>
    <ul class="b ml-5">
        <li>RG;</li>
        <li>CPF;</li>
        <li>Comprovante de endereço;</li>
        <li>Comprovante de escolaridade;</li>
        <li>1 foto 3x4.</li>
    </ul>
    <br>
    <p style="color: rgb(75, 75, 75);">
        As matrículas serão realizadas por ordem de chegada e até o preenchimento das vagas oferecidas.
    </p>
    <hr class="hr3">
</div>
<br>
<!-- Filtro-->

<div id="area">
    <div class="container">
        <div class="text-center">
            <h2 style="color: rgb(75, 75, 75);font-weight: bold;">Cursos oferecidos</h2>
        </div>
        <div class="row">
            <div class="col-md-12" id="filter-btn-box">
                <button class="main-btn filter-btn active" style="margin-bottom: 10px; font-weight: bold;" id="all-btn">Todos</button>
                <button class="main-btn filter-btn" style="margin-bottom: 10px; font-weight: bold;" id="m-btn">Manhã</button>
                <button class="main-btn filter-btn" style="margin-bottom: 10px; font-weight: bold;" id="t-btn">Tarde</button>
                <button class="main-btn filter-btn" style="margin-bottom: 10px; font-weight: bold;" id="n-btn">Noite</button>
            </div>

            <div class="col-md-4 project-box m n">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/27.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">AUXILIAR DE LOGÍSTICA </h6>
                        <p class="card-text">Aprenda os processos de um departamento logístico, com uso de sistemas.
                        </p>
                        <a href="Curso/Auxiliar_de_logistica" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box m n">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/3.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">CUIDADOR DE IDOSOS</h6>
                        <p class="card-text">Aprenda a acompanhar e contribuir com a melhora da saúde de pessoas idosas.
                        </p>
                        <a href="Curso/Cuidador_de_idosos" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box m">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/35.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">ROBÓTICA</h6>
                        <p class="card-text">Aprenda Arduino - Fundamentos, programação e teste em sistema simples e complexo.
                        </p>
                        <a href="Curso/Robotica" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box m n">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/16.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">MICROEMPREENDEDOR</h6>
                        <p class="card-text" style="margin-bottom: 15px;">Aprenda técnicas de gestão empresarial para ser dono do seu próprio negócio.

                        </p>
                        <a href="Curso/Microempreendedor" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box t">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/17.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">AUXILIAR DE ESCRITÓRIO</h6>
                        <p class="card-text">Aprenda a manter as documentações e informações prontas para a tomada de decisão.
                        </p>
                        <a href="Curso/Auxiliar_de_escrtorio" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box m t n">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/32.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">CRIAÇÃO DE WEBSITES</h6>
                        <p class="card-text">Aprenda a criar páginas e estruture sites para diversas finalidades e usuários.
                            <br>
                        </p>
                        <a href="Curso/Criacao_de_websites" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box t n">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/34.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">DESENVOLVEDOR DE JOGOS DIGITAIS</h6>
                        <p class="card-text" style="margin-bottom: 40px;">Aprenda a criar jogos que executem em diversos aplicativos e na WEB!</p>
                        <a href="Curso/Desenvolvedor_de_jogos_digitais" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box t">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/2.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">CUIDADOR DE PESSOAS</h6>
                        <p class="card-text">Aprenda a dar assistência em saúde para crianças, pessoas com deficiência e idosos.
                        </p>
                        <a href="Curso/Cuidador_de_pessoas" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 project-box t">
                <div class="card">
                    <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/18.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="card-title">PORTEIRO/CONTROLADOR DE ACESSO</h6>
                        <p class="card-text">Aprenda a controlar o fluxo de pessoas e veículos, utilizando tecnologias adequadas.
                        </p>
                        <a href="Curso/Porteiro_controlador_de_acesso" class="btn btn-danger">Ver Mais</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Até: </b>
                            1 semestre</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<br>
<br>
<?php include 'footer.php' ?>