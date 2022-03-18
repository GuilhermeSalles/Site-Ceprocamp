<?php include 'header-menu.php' ?>

<br>
<div class="contianer">
    <div class="text-center">
        <h3 class="bold">Avisos</h3>
        <div class="container">
            <hr class="avisosADM">
        </div>
    </div>

    <?php include 'avisos.php' ?>

    <br>
    <br>

    <div class="text-center" data-anime="top">
        <h3 class="bold">Ferramentas</h3>
        <div class="container">
            <hr class="avisosADM">
        </div>
    </div>
    <div id="area">
        <div class="container">
            <div class="row" data-anime="top">
                <?php if ($_SESSION['nivel'] == "Administrativo" or $_SESSION['nivel'] == "CPD-OV") { ?>
                    <div class="col-md-4 project-box n">
                        <div class="card">
                            <img class="card-img-top" src="../../img/ferramentasADM/Imagem de teste.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title bold">ADICIONAR NOVOS USUÁRIOS
                                </h5>
                                <p class="card-text">Aqui você vai adicionar novos usuários com seus devidos níveis de acesso.</p>

                            </div>
                            <div class="card-footer">
                                <a href="AdicionaUser/" class=" btn btn-danger btn-block">ADICIONAR</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($_SESSION['nivel'] == "Administrativo" or $_SESSION['nivel'] == "CPD-OV") { ?>
                    <div class="col-md-4 project-box n">
                        <div class="card">
                            <img class="card-img-top" src="../../img/ferramentasADM/Imagem de teste.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title bold">ADICIONAR NOVOS ALUNOS E PROFESSORES</h5>
                                <p class="card-text">Aqui você vai adicionar alunos e professores com níveis de acesso.</p>

                            </div>
                            <div class="card-footer">
                                <a href="AdicionaAlunoProf/" class=" btn btn-danger btn-block">ADICIONAR</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($_SESSION['nivel'] == "CPD-OV") { ?>
                    <div class="col-md-4 project-box n">
                        <div class="card">
                            <img class="card-img-top" src="../../img/ferramentasADM/Imagem de teste.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title bold">DIÁRIO OFICIAL
                                </h5>
                                <p class="card-text">Aqui professor irá colocar as faltas e presenças de cada aluno, entre outros dados estabelecidos pelo ensino.</p>

                            </div>
                            <div class="card-footer">
                                <a href="../DiarioOficial/" class=" btn btn-danger btn-block">ACESSAR</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($_SESSION['nivel'] == "Administrativo" or $_SESSION['nivel'] == "CPD-OV") { ?>
                    <div class="col-md-4 project-box n">
                        <div class="card">
                            <img class="card-img-top" src="../../img/ferramentasADM/Imagem de teste.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title bold">ADICIONAR NOVOS ALUNOS E PROFESSORES</h5>
                                <p class="card-text">Aqui você vai adicionar alunos e professores com seus devido níveis de acessoa plataforma.</p>

                            </div>
                            <div class="card-footer">
                                <a href="Curso/Almoxarife" class=" btn btn-danger btn-block">ADICIONAR</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($_SESSION['nivel'] == "Administrativo" or $_SESSION['nivel'] == "CPD-OV") { ?>
                    <div class="col-md-4 project-box n">
                        <div class="card">
                            <img class="card-img-top" src="../../img/ferramentasADM/Imagem de teste.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title bold">ADICIONAR NOVOS USUÁRIOS A PLATAFORMA
                                </h5>
                                <p class="card-text">Aqui você vai adicionar novos usuários com seus devidos níveis de acesso.</p>

                            </div>
                            <div class="card-footer">
                                <a href="Curso/Almoxarife" class=" btn btn-danger btn-block">ADICIONAR</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($_SESSION['nivel'] == "Administrativo" or $_SESSION['nivel'] == "CPD-OV") { ?>
                    <div class="col-md-4 project-box n">
                        <div class="card">
                            <img class="card-img-top" src="../../img/ferramentasADM/Imagem de teste.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title bold">ADICIONAR NOVOS ALUNOS E PROFESSORES</h5>
                                <p class="card-text">Aqui você vai adicionar alunos e professores com seus devido níveis de acessoa plataforma.</p>

                            </div>
                            <div class="card-footer">
                                <a href="Curso/Almoxarife" class=" btn btn-danger btn-block">ADICIONAR</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <br>
    <?php include 'footer.php' ?>