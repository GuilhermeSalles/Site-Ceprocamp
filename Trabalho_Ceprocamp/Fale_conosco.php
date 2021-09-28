<?php include 'header-menu.php' ?>

<style>
  .link {
    font-weight: bold;
    color: #FE5722FF;
    text-decoration: none;
  }

  .link:hover {
    font-weight: bold;
    color: #FE5722FF;
    box-shadow: 75, 75, 75;
  }
</style>

<br>
<br>

<div class="container">

  <h3>Fale Conosco</h3>
  <a class="link" href="PerguntasFrequentes">Perguntas frequentes - CEPROCAMP</a>
  <hr class="hr3">
  <form method="POST" action="">

    <div class="form-group">
      <label for="Nome" style="font-weight: bold; color: rgb(75, 75, 75);">Nome: </label>
      <input type="text" class="form-control" id="Nome" name="Nome" style="border-radius: 10px;" placeholder="Digite seu nome completo." required>
    </div>

    <div class="form-group">
      <label for="Email" style="font-weight: bold; color: rgb(75, 75, 75);">E-mail: </label>
      <input type="email" class="form-control" id="Email" name="Email" style="border-radius: 10px;" placeholder="nome@exemplo.com" required>
    </div>

    <div class="form-group">
      <label for="seeAnotherField" style="font-weight: bold; color: rgb(75, 75, 75);" for="area">Área: </label>
      <select class="form-control" id="seeAnotherField" style="border-radius: 10px;">
        <option selected>-- Nenhum --</option>
        <option value="1">CEPROCAMP Campo Grande</option>
        <option value="2">CEPROCAMP José Alves</option>
        <option value="3">CEPROCAMP Ouro Verde</option>
        <option value="4">Gestão CEPROCAMP</option>
        <option value="5">Núcleo Pedagógico</option>
        <option value="6">Recursos Humanos</option>
        <option value="7">Secretaria acadêmica</option>
      </select>
    </div>
    <!-- Div CG -->
    <div class="form-group" id="CGdiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto CEPROCAMP Campo Grande:</label>
      <select class="form-control" id="fieldCG" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Secretaria acadêmica</option>
        <option>Responsável unidade</option>
        <option>Informações</option>
        <option>Dúvidas</option>
      </select>
    </div>
    <!-- Div JA -->
    <div class="form-group" id="JAdiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto CEPROCAMP José Alves:</label>
      <select class="form-control" id="fieldJA" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Secretaria acadêmica</option>
        <option>Responsável unidade</option>
        <option>Informações</option>
        <option>Dúvidas</option>
      </select>
    </div>
    <!-- Div OV -->
    <div class="form-group" id="OVdiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto CEPROCAMP Ouro Verde:</label>
      <select class="form-control" id="fieldOV" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Secretaria acadêmica</option>
        <option>Responsável unidade</option>
        <option>Informações</option>
        <option>Dúvidas</option>
      </select>
    </div>
    <!-- Div GESTÃO -->
    <div class="form-group" id="Gestaodiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Gestão CEPROCAMP:</label>
      <select class="form-control" id="fieldGestao" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Professor</option>
        <option>Serviços</option>
        <option>Informações</option>
        <option>Dúvidas</option>
      </select>
    </div>
    <!-- Div NP -->
    <div class="form-group" id="NPdiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Núcleo Pedagógico:</label>
      <select class="form-control" id="fieldNP" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>TDC</option>
        <option>TDF</option>
        <option>CHP</option>
        <option>Dúvidas</option>
      </select>
    </div>
    <!-- Div RH -->
    <div class="form-group" id="RHdiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Recursos Humanos:</label>
      <select class="form-control" id="fieldRH" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Atribuição</option>
        <option>Departamento pessoal</option>
        <option>Solicitações</option>
        <option>Dúvidas</option>
      </select>
    </div>
    <!-- Div SA -->
    <div class="form-group" id="SAdiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto CEPROCAMP Secretaria acadêmica:</label>
      <select class="form-control" id="fieldSA" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Situação do aluno</option>
        <option>Declarações e documentos</option>
        <option>Inscrições e matrículas</option>
        <option>Dúvidas</option>
      </select>
    </div>

    <div class="form-group">
      <label for="textearea" style="font-weight: bold; color: rgb(75, 75, 75);">Mensagem: </label>
      <textarea class="form-control" id="textearea" name="textearea" style="border-radius: 10px;" rows="4" placeholder="Escreva o que deseja saber bem aqui." required></textarea>
    </div>

    <input type="submit" name="submit" id="submit" class=" bhouver btn btn-danger btn-outline-danger" style="color: white;" value="Enviar">

  </form>



</div>

<br>

<script src="JS/faleConosco.js"></script>
<?php include 'footer.php' ?>