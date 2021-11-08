<?php
	include_once("../../ConexaoBd/config.php");
	$id = mysqli_real_escape_string($conexao, $_POST['id']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$local = mysqli_real_escape_string($conexao, $_POST['local']);
	$sala = mysqli_real_escape_string($conexao, $_POST['sala']);
	$data = mysqli_real_escape_string($conexao, $_POST['data']);
	$devolveu = mysqli_real_escape_string($conexao, $_POST['devolveu']);
	$notebooks = mysqli_real_escape_string($conexao, $_POST['notebooks']);
    
	$sql = "UPDATE emprestimo SET nomeProfessor='$nome', local='$local', sala='$sala', devolveu='$devolveu',notebooks ='$notebooks' WHERE id = $id ";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=emprestimos'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=emprestimos'>
				<script type=\"text/javascript\">
					alert(\"Emprestimo não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>