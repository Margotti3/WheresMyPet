<?php

include_once "conect.php";

$email = $_GET["email"];
$sql = 'UPDATE usuarios SET confirmacao=1 WHERE email = "'.$email.'"';
$consulta = $conector->prepare($sql);
$consulta->execute();
echo "<script>alert('Cadastro confirmado!');window.close();</script>";

?>