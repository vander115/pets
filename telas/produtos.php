<?php

$id_tipo = $_GET['id'];
session_start();
$_SESSION['id_tipo'] = $id_tipo;

header('Location:tela_produtos.php');

?>