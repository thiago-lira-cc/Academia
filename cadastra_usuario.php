<?php

include "verificar-sessao.php";
include "conectar.php";



// Pasta onde o arquivo vai ser salvo
		$_UP['pasta'] = 'fotos/';
		// Tamanho máximo do arquivo (em Bytes)
		$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
		// Array com as extensões permitidas
		$_UP['extensoes'] = array('jpg', 'png', 'gif');
		// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
		$_UP['renomeia'] = true;
		// Array com os tipos de erros de upload do PHP
		$_UP['erros'][0] = 'Não houve erro';
		$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
		$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
		$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
		if ($_FILES['arquivo']['error'] != 0) {
  			die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
  			exit; // Para a execução do script
		}

		// Faz a verificação do tamanho do arquivo
		if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
  			echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
  			exit;
		}
		// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
		// Primeiro verifica se deve trocar o nome do arquivo
		if ($_UP['renomeia'] == true) {
		  // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
		  $nome_final = $_POST['txt_login'].'.jpg';
		} else {
		  // Mantém o nome original do arquivo
		  $nome_final = $_FILES['arquivo']['name'];
		}
		  
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final);

//A ação é enviada em um campo hiddendo formulário
$acao = $_POST['acao'];
$login = $_POST['txt_login'];
$senha = $_POST['txt_senha'];
$segunda = $_POST['segunda'];
$terca  = $_POST['terca'];
$quarta = $_POST['quarta'];
$quinta = $_POST['quinta'];
$sexta = $_POST['sexta'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$contato = $_POST['contato'];
$datanasc = $_POST['datanasc'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

if($acao == 'inserir'){

	$sql = "INSERT INTO `academia`.`treino` (`login`, `senha`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `nome`, `endereco`, `contato`, `datanasc`, `peso`, `altura`) VALUES ('$login', md5('$senha'), '$segunda', '$terca', '$quarta', '$quinta', '$sexta', '$nome', '$endereco', '$contato', 'datanasc', '$peso', '$altura');";
	mysqli_query($conexao, $sql);

}

//Redireciona o usuário para a página inicial da aplicação
header('Location: inicio.php');

?>