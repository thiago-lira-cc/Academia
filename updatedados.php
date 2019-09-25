<?php

include "verificar-sessao.php";
include "conectar.php";

$usu = $_POST['usu'];
$login = $_POST['login'];
$nome = $_POST['nome'];
$endereco  = $_POST['endereco'];
$contato = $_POST['contato'];
$datanasc = $_POST['datanasc'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

$sql = "UPDATE `academia`.`treino` SET `nome`='$nome', `endereco`='$endereco', `contato`='$contato', `datanasc`='$datanasc', `altura`='$altura', `peso`='$peso' WHERE login = '$login';";

mysqli_query($conexao, $sql);

header('Location: index.php?pg=dados');

?>