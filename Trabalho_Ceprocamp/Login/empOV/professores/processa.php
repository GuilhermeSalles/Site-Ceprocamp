<?php
	include_once("../../../ConexaoBd/config.php");
	$Nome_Matricula = mysqli_real_escape_string($conexao, $_POST['Nome_Matricula']);
	$notebooks = mysqli_real_escape_string($conexao, $_POST['notebooks']);
    
	$sql = "INSERT INTO Professores_existentes (`Nome_Matricula`, `notebooks`) 
	VALUES ('$Nome_Matricula', '$notebooks')";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../professores'>
				<script type=\"text/javascript\">
					alert(\"Professor(a) cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../professores'>
				<script type=\"text/javascript\">
					alert(\"Professor(a) não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>