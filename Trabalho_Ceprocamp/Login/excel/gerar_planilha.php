<?php
session_start();
if (!empty($_SESSION['id'])) {
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location: ../");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'Registro.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="4"><center><b>Planilha Registro Interesse</b></center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Email</b></td>';
		$html .= '<td><b>Unidade</b></td>';
		$html .= '<td><b>Curso</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM registro";
		$resultado_msg_contatos = mysqli_query($conexao , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["Nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Unidade"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Curso"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>