<?php
	include_once("../../ConexaoBd/config.php");
	$nomeEmatriculaProf = mysqli_real_escape_string($conexao, $_POST['nomeEmatriculaProf']);
	$nomeQuemAutorizou = mysqli_real_escape_string($conexao, $_POST['nomeQuemAutorizou']);
	$sala = mysqli_real_escape_string($conexao, $_POST['sala']);
	$controleDS = mysqli_real_escape_string($conexao, $_POST['controleDS']);
	$canetaDS = mysqli_real_escape_string($conexao, $_POST['canetaDS']);
	$controleAr = mysqli_real_escape_string($conexao, $_POST['controleAr']);
	$KitArduino = mysqli_real_escape_string($conexao, $_POST['KitArduino']);
	$notebooks = mysqli_real_escape_string($conexao, $_POST['notebooks']);
	$mouse = mysqli_real_escape_string($conexao, $_POST['mouse']);
	$carregadorNot = mysqli_real_escape_string($conexao, $_POST['carregadorNot']);
	$devolveu = mysqli_real_escape_string($conexao, $_POST['devolveu']);
    
	$sql = "INSERT INTO `emprestimos` (`nomeEmatriculaProf`, `nomeQuemAutorizou`, `sala`, `controleDS`,`canetaDS`, `controleAr`,`KitArduino`, `notebooks`, `mouse`, `carregadorNot`, `devolveu`) 
	VALUES
    ('$nomeEmatriculaProf', '$nomeQuemAutorizou', '$sala', '$controleDS', '$canetaDS','$controleAr', '$KitArduino', '$notebooks', '$mouse', '$carregadorNot', '$devolveu')";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../empOV/'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../empOV/'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>