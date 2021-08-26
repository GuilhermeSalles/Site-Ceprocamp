<?php
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
?>