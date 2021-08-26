<?php include 'header-menu.php' ?>

<div class="container ">
    <br>
    <br>
    <div class="text-center">
        <h3 style="color: rgb(75, 75, 75); font-weight: bold;">Preencha o formulário.</h3>
        <hr style="width: 100%;
                    border: solid;
                    color: #FE5722FF;
                    border-radius: 10px;
                    margin-top: 0%;">
    </div>

    <br>

    <form method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="MatriculaS">Matricula Solicitante:</label>
                <input type="text" class="form-control" id="MatriculaS" name="MatriculaS" style="border-radius: 10px;">
            </div>
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="MatriculaA">Matricula de Autorização:</label>
                <input type="MatriculaA" class="form-control" id="MatriculaA" name="MatriculaA" style="border-radius: 10px;">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Local">Local de uso:</label>
                <input type="input" class="form-control" id="Local" name="Local" placeholder="Digite o local de uso(ex: sala 05)" style="border-radius: 10px;">
            </div>
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Unidade">Selecione a Unidade:</label>
                <select class="form-control" id="Unidade" style="border-radius: 10px;" name="Unidade">
                    <option selected>-- Selecione a unidade --</option>
                    <option>CASI</option>
                    <option>CAMBARÁ</option>
                    <option>CAMPO GRANDE</option>
                    <option>CENTRO</option>
                    <option>CIC VIDA NOVA</option>
                    <option>JOSÉ ALVES</option>
                    <option>OURO VERDE</option>
                    <option>VILA UNIÃO</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Datashow">Datashow:</label>
                <input type="text" class="form-control" id="Datashow" name="Datashow" style="border-radius: 10px;">
            </div>
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="ControleDatashow">Pegou controle datashow:</label>
                <select id="ControleDatashow" name="ControleDatashow" class="form-control" style="border-radius: 10px;">
                    <option selected>Não</option>
                    <option>Sim</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="DataE">Data:</label>
                <input type="date" class="form-control" id="DataE" name="DataE" style="border-radius: 10px;">
            </div>
            <div class="form-group col-md-4">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Hora">Hora:</label>
                <input type="input" class="form-control" id="Hora" name="Hora" style="border-radius: 10px;">
            </div>
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Notebooks">Notebooks:</label>
                <input type="input" class="form-control" id="Notebooks" name="Notebooks" style="border-radius: 10px;">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Qtd1">Qtd Periféricos:</label>
                <select id="Qtd1" name="Qtd1" class="form-control" style="border-radius: 10px;">
                    <option selected>NENHUM</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option> 
                </select>
            </div>
            <div class="form-group col-md-4">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Perif1">Periféricos:</label>
                <select id="Perif1" name="Perif1" class="form-control" style="border-radius: 10px;">
                    <option selected>NENHUM</option>
                    <option> CABO DE REDE</option>
                    <option> MOUSE</option>
                    <option> TECLADO</option>
                    <option> EXTENSÃO</option>
                    <option> MOUSE E TECLADO</option>
                    <option> TECLADO E CABO DE REDE</option>
                    <option> MOUSE E CABO DE DE REDE</option>
                    <option> MOUSE, TECLADO E CABO DE REDE</option>
                    <option> TECLADO, CABO DE REDE E EXTENSÃO</option>
                    <option> MOUSE, CABO DE DE REDE E EXTENSÃO</option>
                    <option> MOUSE, TECLADO, CABO DE REDE E EXTENSÃO
                    </option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Qtd2">Qtd Periféricos:</label>
                <select id="Qtd2" name="Qtd2" class="form-control" style="border-radius: 10px;">
                    <option selected>NENHUM</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option> 
                </select>
            </div>
            <div class="form-group col-md-4">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Perif2">Periféricos:</label>
                <select id="Perif2" name="Perif2" class="form-control" style="border-radius: 10px;">
                    <option selected>NENHUM</option>
                    <option> CABO DE REDE</option>
                    <option> MOUSE</option>
                    <option> TECLADO</option>
                    <option> EXTENSÃO</option>
                    <option> MOUSE E TECLADO</option>
                    <option> TECLADO E CABO DE REDE</option>
                    <option> MOUSE E CABO DE DE REDE</option>
                    <option> MOUSE, TECLADO E CABO DE REDE</option>
                    <option> TECLADO, CABO DE REDE E EXTENSÃO</option>
                    <option> MOUSE, CABO DE DE REDE E EXTENSÃO</option>
                    <option> MOUSE, TECLADO, CABO DE REDE E EXTENSÃO
                    </option>
                </select>
            </div>
        </div>
        <div class="form-row">
             <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Justificativa">Justificativa:</label>
                <select id="Justificativa" name="Justificativa" class="form-control" style="border-radius: 10px;">
                    <option selected>Recurso necessário para cumprimento do plano de ensino</option>
                    <option>Cumprimento do comunicado FUMEC nº 10/2021</option>
                    <option>Recurso necessário para cumprimento do plano de ensino e Cumprimento do comunicado FUMEC nº 10/2021</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label style="font-weight: bold; color: rgb(75, 75, 75);" for="Devolvido">Devolvido:</label>
                <select id="Devolvido" name="Devolvido" class="form-control" style="border-radius: 10px;">
                    <option selected>Não</option>
                    <option>Sim</option>
                </select>
            </div> 
        </div>
        <hr>
        <input type="submit" name="submit" id="submit" class=" bhouver btn btn-danger btn-outline-danger" style="color: white;" value="Enviar">

    </form>


    <br>



</div>

<br>
<br>
<br>

<?php include 'footer.php' ?>