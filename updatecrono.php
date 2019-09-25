<?php

include "verificar-sessao.php";
include "conectar.php";

$usu = $_POST['usu'];
$segunda = $_POST['segunda'];
$terca  = $_POST['terca'];
$quarta = $_POST['quarta'];
$quinta = $_POST['quinta'];
$sexta = $_POST['sexta'];

$sql = "UPDATE `academia`.`treino` SET `segunda`='$segunda', `terca`='$terca', `quarta`='$quarta', `quinta`='$quinta', `sexta`='$sexta' WHERE login = '$usu';";
mysqli_query($conexao, $sql);

header('Location: index.php?pg=dados');

?>