<?php

include "conectar.php";

/*
 * Uma opção aqui é aplicar uma função de escape para caracteres especiais
 * $login = mysqli_real_escape_string($conexao, $_POST['txt_login']);
 * $senha = mysqli_real_escape_string($conexao, $_POST['txt_senha']);
 */
$login = $_POST['txt_login'];
$senha = $_POST['txt_senha'];

if(!$login || !$senha){
	//Redireciona o usuário de volta para a tela de login
	header('Location: index.php?erro=1');
}

$sql = "SELECT * FROM treino WHERE login = '$login' AND senha = md5('$senha');";
$result = mysqli_query($conexao, $sql);

//Testa se encontrou o usuário
if(mysqli_num_rows($result) > 0){

	//Abre a sessão do usuário
	session_start();
	
	$linha = mysqli_fetch_assoc($result);
	
	$_SESSION['id_treino'] = $linha['id_treino'];
	$_SESSION['login'] = $linha['login'];
	
	if(($result==1) AND ($_SESSION['id_treino']==1)){
		$sec = true;
	}
	//Fecha a conexão com o banco de dados
	mysqli_close($conexao);
	

	//Redireciona o usuário para a página inicial da aplicação
	header('Location: index.php?pg=homepage&usu='.$login);	

}else{

	//Redireciona o usuário de volta para a tela de login
	header('Location: index.php?erro=1');

}

?>