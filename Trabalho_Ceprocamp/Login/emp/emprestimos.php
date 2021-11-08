<?php
include_once("../../ConexaoBd/config.php");
$result_cursos = "SELECT * FROM emprestimo";
$result = mysqli_query($conexao, $result_cursos);
?>
<?php include 'header-menu.php' ?>

<body>
    <br>
    <br>

    <div class="container col-11">

        <div class="row">
            <div class="ml-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastrar">Cadastrar</button>
                <!-- Modal cadastrar -->
                <div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title bold " id="cadastrarLabel" style="margin-left: 130px;">Cadastro emprestimo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span> </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="processa_cad.php" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label bold">Nome:</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-local" class="col-form-label bold">Local:</label>
                                        <input type="text" class="form-control" id="recipient-local" name="local">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-sala" class="col-form-label bold">Sala:</label>
                                        <input type="text" class="form-control" id="recipient-sala" name="sala">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-data" class="col-form-label bold">Data:</label>
                                        <input type="text" class="form-control" id="recipient-data" name="data">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-devolveu" class="col-form-label bold">Devolveu:</label>
                                        <select class="form-control" id="recipient-devolveu" name="devolveu">
                                            <option value="Sim">Sim</option>
                                            <option selected value="Não">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-notebooks" class="col-form-label bold">Notebooks:</label>
                                        <input type="text" class="form-control" id="recipient-notebooks" name="notebooks">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-success">Salvar</button>
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Modal -->
            </div>
            <br>
            <br>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome Professor</th>
                    <th>Local</th>
                    <th>Sala</th>
                    <th>Data</th>
                    <th>Devolveu</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($rows_cursos = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $rows_cursos['nomeProfessor']; ?></td>
                        <td><?php echo $rows_cursos['local']; ?></td>
                        <td><?php echo $rows_cursos['sala']; ?></td>
                        <td><?php echo $rows_cursos['data']; ?></td>
                        <td><?php echo $rows_cursos['devolveu']; ?></td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#visualizar<?php echo $rows_cursos['id']; ?>">Visualizar</button>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar" data-id="<?php echo $rows_cursos['id']; ?>" data-nome="<?php echo $rows_cursos['nomeProfessor']; ?>" data-local="<?php echo $rows_cursos['local']; ?>" data-sala="<?php echo $rows_cursos['sala']; ?>" data-data="<?php echo $rows_cursos['data']; ?>" data-devolveu="<?php echo $rows_cursos['devolveu']; ?>" data-notebooks="<?php echo $rows_cursos['notebooks']; ?>">Editar</button>
                        </td>
                    </tr>
                    <!-- Modal Visualizar -->
                    <div class="modal fade" id="visualizar<?php echo $rows_cursos['id']; ?>" tabindex="-1" aria-labelledby="visualizarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="visualizarLabel"><span class="bold">Visualizando</span> <?php echo $rows_cursos['nomeProfessor'];; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <p><span class="bold">Local: </span><?php echo $rows_cursos['local']; ?></p>
                                    <p><span class="bold">Sala: </span><?php echo $rows_cursos['sala']; ?></p>
                                    <p><span class="bold">Notebooks: </span><?php echo $rows_cursos['notebooks']; ?></p>
                                    <p><span class="bold">Data: </span><?php echo $rows_cursos['data']; ?></p>
                                    <p><span class="bold">Devolveu: </span><?php echo $rows_cursos['devolveu']; ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal -->
                <?php } ?>
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Emprestimo </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="processa.php" enctype="multipart/form-data">
                        <input name="id" type="hidden" id="id">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label bold">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="recipient-local" class="col-form-label bold">Local:</label>
                            <input type="text" class="form-control" id="recipient-local" name="local">
                        </div>
                        <div class="form-group">
                            <label for="recipient-sala" class="col-form-label bold">Sala:</label>
                            <input type="text" class="form-control" id="recipient-sala" name="sala">
                        </div>
                        <div class="form-group">
                            <label for="recipient-data" class="col-form-label bold">Data:</label>
                            <input type="text" class="form-control" id="recipient-data" name="data">
                        </div>
                        <div class="form-group">
                            <label for="recipient-devolveu" class="col-form-label bold">Devolveu:</label>
                            <select class="form-control" id="recipient-devolveu" name="devolveu">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-notebooks" class="col-form-label bold">Notebooks:</label>
                            <input type="text" class="form-control" id="recipient-notebooks" name="notebooks">
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#editar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('id') // Extract info from data-* attributes
            var recipientnome = button.data('nome')
            var recipientlocal = button.data('local')
            var recipientsala = button.data('sala')
            var recipientdata = button.data('data')
            var recipientdevolveu = button.data('devolveu')
            var recipientnotebooks = button.data('notebooks')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Emprestimo: ' + recipient)
            modal.find('#id').val(recipient)
            modal.find('#recipient-name').val(recipientnome)
            modal.find('#recipient-local').val(recipientlocal)
            modal.find('#recipient-sala').val(recipientsala)
            modal.find('#recipient-data').val(recipientdata)
            modal.find('#recipient-devolveu').val(recipientdevolveu)
            modal.find('#recipient-notebooks').val(recipientnotebooks)

        })
    </script>
    <br>
</body>



<?php include 'footer.php' ?>