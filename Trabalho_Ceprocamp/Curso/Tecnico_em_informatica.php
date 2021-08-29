<?php include 'header-menu.php' ?>

<br>

<div class="container">
    <div class="row">

        <div class="col-9">
            <h2 style="font-weight: bold; color: #FE5722FF;"> <img class="mb-1" src=" ../img/Icones dia/book.svg">
                Técnico em Informática</h2>
        </div>

        <div class="col-3 mt-3">
            <h6><span style="font-weight: bold; color: #FE5722FF"> <img src="../img/Icones dia/clock.svg"> Duração:
                </span>200 horas</h6>
        </div>

    </div>

    <hr class="hr3 mt-0">
    <img style="margin-top: 0%;" src="../img/CAPA PARA CURSO/30.png" class="img-fluid rounded">

</div>

<br>
<br>

<div class="container">

    <div class="text-center">

        <h2 style="font-weight: bold; color: #FE5722FF" class="fw-bolder font-monospace">Perfil profissional
        </h2>
        <hr class="hr3">

    </div>

    <p class="text-justify"> Consertam e instalam aparelhos eletrônicos, desenvolvem dispositivos de circuitos eletrônicos, fazem manutenções corretivas, preventivas e preditivas, sugerem mudanças no processo de produção, criam e implementam dispositivos de automação. Treinam, orientam e avaliam o desempenho de operadores. Estabelecem comunicação oral e escrita para agilizar o trabalho, redigem documentação técnica e organizam o local de trabalho.
    </p>

    <br>
    <br>

    <div class="row">

        <div class="col-sm-12 col-md-8 col-xs-8" data-anime="left">

            <h2 style="font-weight: bold; color: rgb(75, 75, 75);">Como me inscrever</h2>
            <hr class="imgR-small hr5r mt-0">

            <p class="text-justify">Para se inscrever nos cursos oferecidos o candidato deverá ficar atento a
                publicação do Edital.
                Ele estabelece os critérios e procedimentos relativos ao ingresso de alunos, contendo todas as
                disposições e detalhes sobre os cursos oferecidos pelo CEPROCAMP.</p>

            <br>

            <h6 style="font-weight: bold; color: rgb(75, 75, 75);">Requisitos Gerais:</h6>
            <ul class="b ml-5">
                <li>Morador de Campinas e da Região Metropolitana de Campinas.</li>
                <li>Possua seu próprio CPF.</li>
                <li>Possuir endereço eletrônico (e-mail) válido.</li>
            </ul>


            <h6 style="font-weight: bold; color: rgb(75, 75, 75);">Requisitos Específicos:</h6>
            <ul class="b ml-5">
                <li>Possuir 16 anos completos até o último dia da inscrição.</li>
                <li>Possuir o pré-requisito exigido para cada curso, de forma a aproveitar totalmente a aprendizagem
                    oferecida.</li>
                <li>Ensino Médio Concluído ou Cursando a 2ª ou 3ª Série.</li>
            </ul>

            <br>

            <h6 style="font-weight: bold;color: #fe5722;">Previsão 2° Semestre de 2021</h6>
            <ul class="b ml-5">
                <li> Os cursos oferecidos são semestrais o período para os cursos do segundo semestre é de <span style="color: #fe5722;">22/07</span> a <span style="color: #fe5722;">22/12</span>.</li>
            </ul>

            <br>
            <br>

        </div>

        <div class="col-sm-12 col-md-4 col-xs-4">

            <a href="https://www.instagram.com/p/CP1OOqcLN1C/"><img style="margin-top: 0%;" src="../img/POST INSTA/30.png" class="img-fluid rounded"></a>

            <?php include 'interesse.php' ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: rgb(75, 75, 75);">Registro de interesse</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="POST">
                                <div class="form-group">
                                    <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Nome">Digite seu nome:</label>
                                    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome completo" style="border-radius: 10px;">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold; color: rgb(75, 75, 75);" for="email">Digite seu e-mail:</label>
                                    <input type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Digite e-mail para contato" style="border-radius: 10px;">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold; color: rgb(75, 75, 75);" for="curso">Curso:</label>
                                    <input type="input" class="form-control" id="curso" name="Curso" aria-describedby="emailHelp" placeholder="Digite e-mail para contato" style="border-radius: 10px;" value="Técnico em Informática" readonly>
                                </div>

                                <div class="form-group">
                                    <label style="font-weight: bold; color: rgb(75, 75, 75);" for="unidade">Selecione a unidade mais perto de você:</label>
                                    <select class="form-control" id="unidade" style="border-radius: 10px;" name="Unidade">
                                        <option selected>-- Selecione a unidade --</option>
                                        <option>CASI - </option>
                                        <option>CAMBARÁ - </option>
                                        <option>CAMPO GRANDE - </option>
                                        <option>CENTRO - </option>
                                        <option>CIC VIDA NOVA - </option>
                                        <option>JOSÉ ALVES - </option>
                                        <option>OURO VERDE - </option>
                                        <option>VILA UNIÃO - </option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" id="submit" class=" bhouver btn btn-danger btn-outline-danger" style="color: white;" value="Enviar">
                                    <button type="button" class="btn btn-secondary" style="box-shadow: 2px 2px 2px gray;" data-dismiss="modal">Fechar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<br>
<br>
<!-- 
<div class="container" data-anime="top">

    <div class="text-center">

        <h3 style="font-weight: bold; color: rgb(75, 75, 75);">Locais e turnos disponíveis para este curso.</h3>
        <hr class="divisao">

    </div>

    <div class="row pequeno">
        <div class="col-sm-10 col-md-12 col-xs-12">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="ml-0" scope="col"><img src="../img/Icones dia/map-pin.svg" alt="Local"> Local
                        </th>
                        <th class="ml-0" scope="col"><img src="../img/Icones dia/sun.svg" alt="Sol"> Manhã</th>
                        <th class="ml-0" scope="col"><img src="../img/Icones dia/sunset.svg" alt="Tarde"> Tarde</th>
                        <th class="ml-0" scope="col"><img src="../img/Icones dia/moon.svg" alt="Noite"> Noite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="../cambara" style="color: rgb(75, 75, 75);">Cambará</a></th>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                    </tr>
                    <tr>
                    <th scope="row"><a href="../index" style="color: rgb(75, 75, 75);">Centro</a></th>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="../joseAlves" style="color: rgb(75, 75, 75);">José Alves</a></th>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="../myrian" style="color: rgb(75, 75, 75);">Myrian</a></th>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row grande">
        <div class="col-sm-10 col-md-12 col-xs-12">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center"><a href="../cambara" style="color: rgb(75, 75, 75);">Cambará</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col"><img src="../img/Icones dia/sun.svg" alt="Sol"> Manhã</th>
                        <th scope="col"><img src="../img/Icones dia/sunset.svg" alt="Tarde"> Tarde</th>
                        <th scope="col"><img src="../img/Icones dia/moon.svg" alt="Noite"> Noite</th>
                    </tr>
                    <tr>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row grande">
        <div class="col-sm-10 col-md-12 col-xs-12">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center"><a href="../index" style="color: rgb(75, 75, 75);">Centro</a></th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col"><img src="../img/Icones dia/sun.svg" alt="Sol"> Manhã</th>
                        <th scope="col"><img src="../img/Icones dia/sunset.svg" alt="Tarde"> Tarde</th>
                        <th scope="col"><img src="../img/Icones dia/moon.svg" alt="Noite"> Noite</th>
                    </tr>
                    <tr>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row grande">
        <div class="col-sm-10 col-md-12 col-xs-12">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center"><a href="../joseAlves" style="color: rgb(75, 75, 75);">José Alves</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col"><img src="../img/Icones dia/sun.svg" alt="Sol"> Manhã</th>
                        <th scope="col"><img src="../img/Icones dia/sunset.svg" alt="Tarde"> Tarde</th>
                        <th scope="col"><img src="../img/Icones dia/moon.svg" alt="Noite"> Noite</th>
                    </tr>
                    <tr>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row grande">
        <div class="col-sm-10 col-md-12 col-xs-12">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center"><a href="../myrian" style="color: rgb(75, 75, 75);">Myrian</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col"><img src="../img/Icones dia/sun.svg" alt="Sol"> Manhã</th>
                        <th scope="col"><img src="../img/Icones dia/sunset.svg" alt="Tarde"> Tarde</th>
                        <th scope="col"><img src="../img/Icones dia/moon.svg" alt="Noite"> Noite</th>
                    </tr>
                    <tr>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/x-circle.svg" alt="Turno da aula"> Indisponível</td>
                        <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<br>
<br>

<?php include 'footer.php' ?>