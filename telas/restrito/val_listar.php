<?php

$id_listar = $_GET['tipo_prod'];
if (!isset($_SESSION)) {
session_start();
}
$_SESSION['id_listar'] = $id_listar;

header('Location:tela_listar.php');

?>