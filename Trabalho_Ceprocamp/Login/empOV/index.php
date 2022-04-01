<?php
include_once("../../ConexaoBd/config.php");
$result_cursos = "SELECT * FROM emprestimos order by id DESC";
$result = mysqli_query($conexao, $result_cursos);

$tabela_salas = "SELECT * FROM salas order by id";
$result_salas = mysqli_query($conexao, $tabela_salas);

$tabela_notebooks = "SELECT * FROM quais_nots";
$result_notebooks = mysqli_query($conexao, $tabela_notebooks);

$tabela_quemPediu = "SELECT * FROM Professores_existentes order by Nome_Matricula";
$result_QuemPediu = mysqli_query($conexao, $tabela_quemPediu);

$tabela_QuemAutorizou = "SELECT * FROM quemAutorizou order by id";
$result_QuemAutorizou = mysqli_query($conexao, $tabela_QuemAutorizou);

$tabela_arduino = "SELECT * FROM qtdArduino order by id";
$result_arduino = mysqli_query($conexao, $tabela_arduino);

$tabela_mouse = "SELECT * FROM qtdMouses order by id";
$result_mouse = mysqli_query($conexao, $tabela_mouse);

$tabela_carregador = "SELECT * FROM qtdCarregadores order by id";
$result_carregador = mysqli_query($conexao, $tabela_carregador);

?>
<?php include 'header-menu.php' ?>
<style>
    .noteTamanho {
        max-width: 15ch;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .noteTamanhomodal {
        max-width: 45ch;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>

<body>
    <br>
    <br>

    <div class="container">

        <div class="text-center">
            <h4 class="bold">Lista de cadastros Ouro verde!</h4>
            <hr class="hr3">
        </div>
        <div class="row">
            <div class="ml-3">

                <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#cadastrar">Cadastrar</button>
                <br>

                <!-- Modal cadastrar -->
                <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" class="bold">Cadastro emprestimo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="processa.php" enctype="multipart/form-data">


                                    <div class="form-group">
                                        <label for="recipient-nameProf" class="col-form-label bold">Nome de quem pediu:</label>
                                        <select class="form-control" id="recipient-nomeEmatriculaProf" name="nomeEmatriculaProf">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_QuemPediu)) { ?>

                                                <option value="<?php echo $row['Nome_Matricula']; ?>"><?php echo $row['Nome_Matricula']; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-nomeQuemAutorizou" class="col-form-label bold">Nome de quem autorizou:</label>
                                        <select class="form-control" id="recipient-nomeQuemAutorizou" name="nomeQuemAutorizou">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_QuemAutorizou)) { ?>

                                                <option value="<?php echo $row['QuemAutorizou']; ?>"><?php echo $row['QuemAutorizou']; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-sala" class="col-form-label bold">Sala:</label>
                                        <select class="form-control" id="recipient-sala" name="sala">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_salas)) { ?>

                                                <option value="<?php echo $row['sala']; ?>"><?php echo $row['sala']; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2 style="margin-bottom: 15px; color: rgb(75, 75, 75);">Equipamentos de aula</h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-controleDS" class="col-form-label bold">Controle DataShow:</label>
                                        <select class="form-control" id="recipient-controleDS" name="controleDS">
                                            <option value="Sim">Sim</option>
                                            <option selected value="Não">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-canetaDS" class="col-form-label bold">Caneta DataShow:</label>
                                        <select class="form-control" id="recipient-canetaDS" name="canetaDS">
                                            <option value="Sim">Sim</option>
                                            <option selected value="Não">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-controleAr" class="col-form-label bold">Controle do Ar:</label>
                                        <select class="form-control" id="recipient-controleAr" name="controleAr">
                                            <option value="Sim">Sim</option>
                                            <option selected value="Não">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-notebooks" class="col-form-label bold">Notebooks:</label>
                                        <select class="form-control" id="recipient-notebooks" name="notebooks">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_notebooks)) { ?>

                                                <option value="<?php echo $row['notebooks']; ?>"><?php echo $row['curso'];?>:  <?php echo $row['notebooks'];?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-KitArduino" class="col-form-label bold">Kit Arduino:</label>
                                        <select class="form-control" id="recipient-KitArduino" name="KitArduino">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_arduino)) { ?>

                                                <option value="<?php echo $row['arduino']; ?>"><?php echo $row['arduino']; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2 style="margin-bottom: 0px; color: rgb(75, 75, 75);">Periféricos</h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-mouse" class="col-form-label bold">Mouse:</label>
                                        <select class="form-control" id="recipient-mouse" name="mouse">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_mouse)) { ?>

                                                <option value="<?php echo $row['mouses']; ?>"><?php echo $row['mouses']; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-carregadorNot" class="col-form-label bold">Carregador:</label>
                                        <select class="form-control" id="recipient-carregadorNot" name="carregadorNot">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_carregador)) { ?>

                                                <option value="<?php echo $row['carregadores']; ?>"><?php echo $row['carregadores']; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2 style="margin-bottom: 0px; color: rgb(75, 75, 75);">Devolução</h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-devolveu" class="col-form-label bold">Devolveu:</label>
                                        <select class="form-control" id="recipient-devolveu" name="devolveu">
                                            <option value="Sim">Sim</option>
                                            <option selected value="Não">Não</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Modal -->
            </div>
            <br>
            <br>
        </div>
        <div class="row">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th class="text-center">Nome Professor(a)</th>
                        <th class="text-center">Sala</th>
                        <th class="text-center">Devolveu</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $rows['nomeEmatriculaProf']; ?></td>
                            <td class="text-center"><?php echo $rows['sala']; ?></td>
                            <td class="text-center"><?php echo $rows['devolveu']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning text-center" data-toggle="modal" data-target="#editar" data-id="<?php echo $rows['id']; ?>"
                                 data-sala="<?php echo $rows['sala']; ?>"
                                 data-notebooks="<?php echo $rows['notebooks']?>" data-nome="<?php echo $rows['nomeEmatriculaProf']; ?>" data-data="<?php echo $rows['data']; ?>" data-devolveu="<?php echo $rows['devolveu']; ?>">Editar</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Editar -->
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" class="bold">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="edita.php" enctype="multipart/form-data">
                        <input name="id" type="hidden" id="id">
                        <div class="form-group">
                            <label for="recipient-sala" class="col-form-label bold">Sala:</label>
                            <input type="text" class="form-control" id="recipient-sala" name="sala">
                        </div>
                        <div class="form-group">
                            <label for="recipient-data" class="col-form-label bold">Data:</label>
                            <input type="text" class="form-control" id="recipient-data" name="data">
                        </div>
                        <div class="form-group">
                            <label for="recipient-notebooks" class="col-form-label bold">Notebooks:</label>
                            <input type="text" class="form-control" id="recipient-notebooks" name="notebooks">
                        </div>
                        
                        <hr>

                        <div class="text-center">
                            <h2 style="margin-bottom: 0px; color: rgb(75, 75, 75);">Devolução</h2>
                        </div>
                        <div class="form-group">
                            <label for="recipient-devolveu" class="col-form-label bold">Devolveu:</label>
                            <select class="form-control" id="recipient-devolveu" name="devolveu">
                                <option value="Sim">Sim</option>
                                <option selected value="Não">Não</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $('#editar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('id') // Extract info from data-* attributes
            var recipientnome = button.data('nome')
            var recipientsala = button.data('sala')
            var recipientsnotebooks = button.data('notebooks')
            var recipientsdata = button.data('data')
            var recipientdevolveu = button.data('devolveu')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Emprestimo: ' + recipientnome)
            modal.find('#id').val(recipient)
            modal.find('#recipient-sala').val(recipientsala)
            modal.find('#recipient-data').val(recipientsdata)
            modal.find('#recipient-notebooks').val(recipientsnotebooks)
            modal.find('#recipient-devolveu').val(recipientdevolveu)

        })
    </script>
    <br>
</body>

<?php include 'footer.php' ?>