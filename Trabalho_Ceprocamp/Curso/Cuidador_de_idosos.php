<?php include 'header-menu.php' ?>

<br>

<div class="container">
    <div class="row">

        <div class="col-9">
            <h2 style="font-weight: bold; color: #fe5722;"> <img class="mb-1" src=" ../img/Icones dia/book.svg">
                Cuidador de Idosos</h2>
        </div>

        <div class="col-3 mt-3">
            <h6><span style="font-weight: bold; color: #FE5722FF"> <img src="../img/Icones dia/clock.svg"> Até:
                </span>1 Semestre</h6>
        </div>

    </div>

    <hr class="hr3 mt-0">
    <img style="margin-top: 0%;" src="../img/CAPA PARA CURSO/3.png" class="img-fluid rounded">

</div>

<br>
<br>

<div class="container">

    <div class="text-center">

        <h2 style="font-weight: bold; color: #fe5722" class="fw-bolder font-monospace">Perfil profissional</h2>
        <hr class="hr3">

    </div>

    <p class="fs-5 lh-sm font-monospace text-justify">O aluno será capaz de compreender o processo de envelhecimento, suas características e será envolvido em todas as habilidades necessárias para cuidar da pessoa idosa.
    </p>

    <br>
    <br>


    <div class="row">

        <div class="col-sm-12 col-md-8 col-xs-8" data-anime="left">

            <h2 class="bold">Como me inscrever</h2>
            <hr class="imgR-small hr5r mt-0">

            <p class="text-justify">Para se inscrever nos cursos oferecidos o candidato deverá ficar atento a
                publicação do Edital.
                Ele estabelece os critérios e procedimentos relativos ao ingresso de alunos, contendo todas as
                disposições e detalhes sobre os cursos oferecidos pelo CEPROCAMP.</p>

            <br>

            <h6 class="bold">Requisitos Gerais:</h6>
            <ul class="b ml-5">
                <li>Morador de Campinas e da Região Metropolitana de Campinas.</li>
                <li>Possua seu próprio CPF.</li>
                <li>Possuir endereço eletrônico (e-mail) válido.</li>
            </ul>


            <h6 class="bold">Requisitos Específicos:</h6>
            <ul class="b ml-5">
                <li>Possuir 18 anos completos até o último dia da inscrição.</li>
                <li>Possuir o pré-requisito exigido para cada curso, de forma a aproveitar totalmente a aprendizagem
                    oferecida.</li>
                <li>8ª Série / 9º Ano do Ensino Fundamental Concluído.</li>
            </ul>

            <br>

            <h6 style="font-weight: bold;">Previsão 2° Semestre de 2021</h6>
            <ul class="b ml-5">
                <li> <span style="font-weight: bold; color: #fe5722;">Segundo Periodo</span> - Referente ao Bimestre
                    dos cursos da
                    Unidade <span style="font-weight: bold;">Ouro Verde</span> de <span style="color: #fe5722;">04/10</span> a <span style="color: #fe5722;">22/12</span>.</li>
            </ul>

            <br>
            <br>

        </div>

        <div class="col-sm-12 col-md-4 col-xs-4">

            <a href="https://www.instagram.com/p/CP5g4f7ru_E/"><img style="margin-top: 0%;" src="../img/POST INSTA/3.png" class="img-fluid rounded"></a>

            <?php include 'interesse.php' ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" class="bold">Registro de interesse</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="POST">
                                <div class="form-group">
                                    <label class="bold" for="Nome">Digite seu nome:</label>
                                    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome completo" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group">
                                    <label class="bold" for="email">Digite seu e-mail:</label>
                                    <input type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Digite e-mail para contato" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group">
                                    <label class="bold" for="telefone">Digite seu telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="Telefone" aria-describedby="emailHelp" placeholder="(xx) xxxx-xxxx" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group">
                                    <label class="bold" for="curso">Curso:</label>
                                    <input type="input" class="form-control" id="curso" name="Curso" aria-describedby="emailHelp" placeholder="Digite e-mail para contato" style="border-radius: 10px;" required value="Cuidador de Idosos" readonly>
                                </div>

                                <div class="form-group">
                                    <label class="bold" for="unidade">Selecione a unidade mais perto de você:</label>
                                    <select class="form-control" id="unidade" style="border-radius: 10px;" required name="Unidade">
                                        <option selected>-- Selecione a unidade --</option>
                                        <option>CASI - Campo Belo</option>
                                        <option>Cambará - DIC IV</option>
                                        <option>Campo grande - Praça Concórdia</option>
                                        <option>Centro - Estação Cultura</option>
                                        <option>CIC/ESPRO - Vida Nova</option>
                                        <option>José Alves - Satélite Iris 1</option>
                                        <option>Ouro Verde - HortoShopping</option>
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

    <br>
    <br>

    <div class="container" data-anime="top">

        <div class="text-center">

            <h3 class="bold">Locais e turnos disponíveis para este curso.</h3>
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
                            <th scope="row"><a href="../ouroVerde" title="Clique para saber mais sobre o local."  style="color: rgb(75, 75, 75);">Ouro Verde</a></th>
                            <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
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
                            <th colspan="4" class="text-center"><a href="../ouroVerde" title="Clique para saber mais sobre o local."  style="color: rgb(75, 75, 75);">Ouro Verde</a></th>
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
                            <td><img src="../img/Icones dia/check.svg" alt="Turno da aula"> Disponível</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<?php include 'footer.php' ?>