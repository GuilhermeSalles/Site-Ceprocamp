<?php
	include_once("../../ConexaoBd/config.php");
	$nome = mysqli_real_escape_string($conexao, $_POST['nomeProfessor']);
	$local = mysqli_real_escape_string($conexao, $_POST['local']);
	$sala = mysqli_real_escape_string($conexao, $_POST['sala']);
	$data = mysqli_real_escape_string($conexao, $_POST['data']);
	$devolveu = mysqli_real_escape_string($conexao, $_POST['devolveu']);
	$notebooks = mysqli_real_escape_string($conexao, $_POST['notebooks']);
    
	$sql = "INSERT INTO `emprestimoOv` (`nomeProfessor`, `local`, `sala`, `data`,`devolveu`, `notebooks`) VALUES
    ('$nome', '$local', '$sala', '$data', '$devolveu', '$notebooks')";
	
	$resultado = mysqli_query($conexao, $sql);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=emprestimosOV'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=emprestimosOV'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>