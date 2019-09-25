<?php
session_start();

//O usuário não está logado
if(!$_SESSION['id_treino']){
	
	//Redireciona o usuário para a página inicial da aplicação
	header('Location: index.php');
	
}else{
	header('Location: index.php?pg=perfil&usu='.$_SESSION['login']);
}
?>