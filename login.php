<?php

include_once "conect.php";

if($_POST["email"]!="" && $_POST["senha"]!="") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = mysqli_query($conector, 'SELECT * FROM usuarios WHERE email = "'.$email.'" AND senha = "'.$senha.'"');

    $row = mysqli_num_rows($sql);

    $dado = mysqli_fetch_array($sql);
    if($row > 0){
        if($dado["confirmacao"]==1) {
            session_start();
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["nome"] = $dado["nome"];
            header("Location: index.php");
        }else{
            echo  "<script>alert('Aguardando confirmação no email!');window.location.href = 'usuario.php';</script>";
        }
    }else{
        echo  "<script>alert('Dados de usuário incorretos');window.location.href = 'usuario.php';</script>";
    }
}else {
    echo  "<script>alert('É obrigatório o preenchimento de todos os campos!');window.location.href = 'usuario.php';</script>";
}

?>