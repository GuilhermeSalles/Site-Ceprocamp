<?php
	include_once("../../ConexaoBd/config.php");
	$id = mysqli_real_escape_string($conexao, $_POST['id']);
    
	$sql = "DELETE
	FROM Professores_existentes
	WHERE id = $id";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=Adicionar_professores'>
				<script type=\"text/javascript\">
					alert(\"Professor(a) excluido com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=Adicionar_professores'>
				<script type=\"text/javascript\">
					alert(\"Professor(a) não foi excluido com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>