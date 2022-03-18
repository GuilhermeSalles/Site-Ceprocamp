<?php
	include_once("../../ConexaoBd/config.php");
	$id = mysqli_real_escape_string($conexao, $_POST['id']);
	$devolveu = mysqli_real_escape_string($conexao, $_POST['devolveu']);
	$sala = mysqli_real_escape_string($conexao, $_POST['sala']);
    
	$sql = "UPDATE emprestimos SET devolveu='$devolveu', sala='$sala' WHERE id = $id ";
	
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
					alert(\"Emprestimo alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../empOV/'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>