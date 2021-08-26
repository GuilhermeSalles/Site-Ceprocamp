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
    <div class="form-group">
      <label for="Nome" style="font-weight: bold; color: rgb(75, 75, 75);">Nome: </label>
      <input type="text" class="form-control" id="Nome" name="Nome" style="border-radius: 10px;" placeholder="Digite seu nome completo." required>
    </div>
    <div class="form-group">
      <label for="Email" style="font-weight: bold; color: rgb(75, 75, 75);">E-mail: </label>
      <input type="email" class="form-control" id="Email" name="Email" style="border-radius: 10px;" placeholder="nome@example.com" required>
    </div>
    <div class="form-group">
      <label style="font-weight: bold; color: rgb(75, 75, 75);" for="area">Área: </label>
      <select class="form-control" id="area" style="border-radius: 10px;" name="area">
        <option selected>-- Nenhum --</option>
        <option value="Diretoria">Diretoria Executiva</option>
        <option value="Recursos">Recursos Humanos</option>
        <option value="Area">Área Administrativa e Financeira</option>
        <option value="Programas">Programas de Educação de Jovens, Adultos e Idosos</option>
        <option value="Unidades">Unidades do Centro de Educação Profissional de Campinas - CEPROCAMP</option>
      </select>
    </div>

    <div class="form-group">
      <label for="textearea" style="font-weight: bold; color: rgb(75, 75, 75);">Mensagem: </label>
      <textarea class="form-control" id="textearea" name="textearea" style="border-radius: 10px;" rows="3" placeholder="Escreva o que deseja saber bem aqui." required></textarea>
    </div>
  </form>
</div>


<?php include 'footer.php' ?>