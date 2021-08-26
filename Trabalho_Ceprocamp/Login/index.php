<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/logo.png">

    <title>CEPROCAMP - Centro de Educação Profissional de Campinas |</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body>

    <div class="container">

        <form class="form-signin" method="POST" action="valida.php">

            <h2 class="form-signin-heading">Área Restrita</h2>

            <!-- Mensagens de alerta login -->
            <?php if (isset($_SESSION['loginErro'])) { ?>
                <p class="alert alert-danger text-center text-danger" role="alert">
                <?php
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            } ?>
                </p>
                <?php if (isset($_SESSION['logindeslogado'])) { ?>
                    <p class="alert alert-success" role="alert" "text-center text-success">
                    <?php
                    echo $_SESSION['logindeslogado'];
                    unset($_SESSION['logindeslogado']);
                }
                    ?>
                    </p>
                    <!--FIM Mensagens de alerta login -->

                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                    <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
        </form>

    </div>


</body>

</html>