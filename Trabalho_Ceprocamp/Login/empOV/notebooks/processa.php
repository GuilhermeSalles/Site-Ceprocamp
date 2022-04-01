<?php
	include_once("../../../ConexaoBd/config.php");
	$curso = mysqli_real_escape_string($conexao, $_POST['curso']);
	$notebooks = mysqli_real_escape_string($conexao, $_POST['notebooks']);
    
	$sql = "   INSERT INTO `quais_nots`(`curso`, `notebooks`) 
	VALUES ('$curso ','$notebooks')";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../notebooks'>
				<script type=\"text/javascript\">
					alert(\"Entregador cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../notebooks'>
				<script type=\"text/javascript\">
					alert(\"Entregador não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>