<?php
session_start();
include_once('../../../ConexaoBd/config.php');
if (!empty($_SESSION['id'])) {
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location: .././");
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
		$arquivo = 'Emprestimo.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="4"><center><b>Planilha Emprestimo</b></center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Identificador</b></td>';
		$html .= '<td><b>Professor</b></td>';
		$html .= '<td><b>Autorizou</b></td>';
		$html .= '<td><b>Local</b></td>';
		$html .= '<td><b>Sala</b></td>';
		$html .= '<td><b>ControleDataShow</b></td>';
		$html .= '<td><b>Caneta DataShow</b></td>';
		$html .= '<td><b>Controle AR</b></td>';
		$html .= '<td><b>Notebooks</b></td>';
		$html .= '<td><b>Kit Arduino</b></td>';
		$html .= '<td><b>Mouse</b></td>';
		$html .= '<td><b>Carregador Notebook</b></td>';
		$html .= '<td><b>Devolveu</b></td>';
		$html .= '<td><b>Data</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM emprestimos";
		$resultado_msg_contatos = mysqli_query($conexao, $result_msg_contatos);

		//Deletar todos os itens da tabela depois de gerar o arquivo excel
		$result_deletar = "TRUNCATE TABLE emprestimos";
		$resultado_deletar = mysqli_query($conexao, $result_deletar);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomeEmatriculaProf"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomeQuemAutorizou"].'</td>';
			$html .= '<td>'.$row_msg_contatos["local"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sala"].'</td>';
			$html .= '<td>'.$row_msg_contatos["controleDS"].'</td>';
			$html .= '<td>'.$row_msg_contatos["canetaDS"].'</td>';
			$html .= '<td>'.$row_msg_contatos["controleAr"].'</td>';
			$html .= '<td>'.$row_msg_contatos["notebooks"].'</td>';
			$html .= '<td>'.$row_msg_contatos["KitArduino"].'</td>';
			$html .= '<td>'.$row_msg_contatos["mouse"].'</td>';
			$html .= '<td>'.$row_msg_contatos["carregadorNot"].'</td>';
			$html .= '<td>'.$row_msg_contatos["devolveu"].'</td>';
			$html .= '<td>'.$row_msg_contatos["data"].'</td>';
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
		exit; 
		?>
	</body>
</html>