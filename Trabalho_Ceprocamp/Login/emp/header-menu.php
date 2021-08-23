 <?php session_start(); ?>
 <?php 

    if (isset($_POST['submit'])) {

        include_once('../../ConexaoBd/config.php');

        $MatriculaS = $_POST['MatriculaS'];
        $MatriculaA = $_POST['MatriculaA'];
        $Local = $_POST['Local'];
        $Unidade = $_POST['Unidade'];
        $Datashow = $_POST['Datashow'];
        $ControleDatashow = $_POST['ControleDatashow'];
        $DataE = $_POST['DataE'];
        $Hora = $_POST['Hora'];
        $Notebooks = $_POST['Notebooks'];
        $Qtd1 = $_POST['Qtd1'];
        $Perif1 = $_POST['Perif1'];
        $Qtd2 = $_POST['Qtd2'];
        $Perif2 = $_POST['Perif2'];
        $Justificativa = $_POST['Justificativa'];
        $Devolvido = $_POST['Devolvido'];

        $result = mysqli_query($conexao, "INSERT INTO emprestimo VALUES ('$MatriculaS','$MatriculaA','$Unidade','$Local','$Datashow','$ControleDatashow','$DataE','$Hora','$Notebooks','$Qtd1','$Perif1','$Qtd2','$Perif2','$Justificativa','$Devolvido')");
    }

    ?>
 <!doctype html>
 <html lang="pt-br">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="shortcut icon" href="../../img/logo.png" type="image/png">
     <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

     <link rel="stylesheet" href="../../CSS/Principal.css">

     <title>CEPROCAMP - Centro de Educação Profissional de Campinas |</title>

 </head>

 <body>

     <!-- Logos antes do menu -->
     <div class="container">
         <div class="row">
             <div class="col-sm-2 d-lg-block d-none ">
                 <img src="../../img/logo_campinasP.png" class="img d-block">
             </div>

             <div class="col-sm-8 d-lg-block d-none mt-4">
                 <h1 style="color: #fe5522a8; font-weight: bolder;" class="text-center display-2">CEPROCAMP</h1>
             </div>

             <div class="col-sm-2 d-lg-block d-none ">
                 <img src="../../img/logo-direita.png" class="img d-block">
             </div>
         </div>
     </div>

     <!-- Menu -->

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-toggle="affix">
         <div class="container">
             <div class="justify-content-left">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                     <span class="navbar-toggler-icon">
                         <h4 style="margin-left: 80px;">CEPROCAMP</h4>
                     </span>
                 </button>
             </div>
             <div class="collapse navbar-collapse" id="navbarSite">
                 <ul class="navbar-nav mr-auto">
                     <?php if ($_SESSION['usuarioNiveisAcessoId'] == "1") { ?>
                         <li class="nav-item">
                             <a class="nav-link" href="../adm/Administrativo">Administrativo</a>
                         </li>
                     <?php } ?>

                     <li class="nav-item">
                         <a class="nav-link" href="emprestimos">Lista e cadastro de equipamentos</a>
                     </li>

                     <!--
                    <li class="nav-item">
                        <a class="nav-link" href="CursosQualificacao">Cursos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.fumec.sp.gov.br/">FUMEC</a>
                    </li>
                        -->
                 </ul>

                 <ul class="navbar-nav">

                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img src="../../img/Icone logout/user.svg"><?php echo ' ' . $_SESSION['usuarioNome']; ?>
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                             <a class="dropdown-item" href="../sair.php"><img src="../../img/Icone logout/log-out.svg">Sair</a>

                         </ul>
                     </li>

                 </ul>

             </div>
     </nav>

     <!-- Fim do Menu -->