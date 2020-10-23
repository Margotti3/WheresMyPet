<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastrs";

$conector = new mysqli($servidor, $usuario, $senha, $banco) or die("Falha ao conectar com banco");;

if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno());
?>