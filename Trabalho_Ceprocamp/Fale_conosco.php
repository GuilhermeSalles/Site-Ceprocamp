<?php include 'header-menu.php' ?>

<style>
  a {
    font-weight: bold;
    color: #FE5722FF;
    text-decoration: none;
  }

  a:hover {
    font-weight: bold;
    color: #FE5722FF;
    box-shadow: 75, 75, 75;
  }
</style>

<br>
<br>

<div class="container">

  <h3>Fale Conosco</h3>
  <a href="PerguntasFrequentes">Perguntas frequentes - CEPROCAMP</a>
  <hr class="hr3">
  <form method="POST" action="">
    
    <div class="form-group" if>
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
        <option value="Diretoria">Diretoria Executiva</option>
        <option value="Recursos">Recursos Humanos</option>
        <option value="Area">Área Administrativa e Financeira</option>
        <option value="Programas">Programas de Educação de Jovens, Adultos e Idosos</option>
        <option value="Unidades">Unidades do Centro de Educação Profissional de Campinas - CEPROCAMP</option>
      </select>
    </div>
    <!-- Div Diretoria -->
    <div class="form-group" id="diretDiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Diretoria Executiva:</label>
      <select class="form-control" id="fieldDire" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Vagas</option>
        <option>Professores</option>
        <option>Servidores</option>
        <option>Alimentação</option>
        <option>Transporte</option>
        <option>Outros</option>
      </select>
    </div>
    <!-- Div Recursos -->
    <div class="form-group" id="rectDiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Recursos Humanos:</label>
      <select class="form-control" id="fieldRe" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Licença-prêmio</option>
        <option>Aposentadoria</option>
        <option>Benefícios</option>
        <option>Concurso Público</option>
        <option>Progreção Funcional</option>
        <option>Saúde Ocupacional</option>
        <option>Empréstimo Consignado</option>
        <option>Declarações em geral</option>
        <option>Outros</option>
      </select>
    </div>
    <!-- Div Area -->
    <div class="form-group" id="areaDiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Área Administrativa e Financeira:</label>
      <select class="form-control" id="fieldArea" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Licitações</option>
        <option>Contratos</option>
        <option>Financeiro/Contabilidade</option>
        <option>Outros</option>
      </select>
    </div>
    <!-- Div Programas -->
    <div class="form-group" id="ProDiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto EJA:</label>
      <select class="form-control" id="fieldPro" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Programas de EJA</option>
        <option>Matrículas</option>
        <option>Estágio</option>
        <option>Outros</option>
      </select>
    </div>
    <!-- Div Unidades -->
    <div class="form-group" id="UniDiv">
      <label for="otherField" style="font-weight: bold; color: rgb(75, 75, 75);">Assunto Unidades do Centro de Educação Profissional de Campinas - CEPROCAMP:</label>
      <select class="form-control" id="fieldUni" style="border-radius: 10px;">
        <option selected>-- Selecione --</option>
        <option>Programas de Curso técnico de Nível Médio</option>
        <option>Programas de Qualificação Profissional</option>
        <option>Programas EJA Profissões</option>
        <option>Matrículas</option>
        <option>Estágio obrigatório</option>
        <option>Outros</option>
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