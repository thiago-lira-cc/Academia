<?php
session_start();

//O usuário não está logado
if($_SESSION['login']=='admin'){
	
	header('Location: index.php?pg=dados&usu=admin');
	
}else{

	header('Location: inicio.php');
	
}
?>