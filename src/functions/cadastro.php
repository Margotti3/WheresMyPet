<?php

include_once "conect.php";

if($_POST["nome"]!="" && $_POST["email"]!="" && $_POST["senha"]!="" && $_POST["confSenha"]!=""){
    if($_POST["senha"] == $_POST["confSenha"]) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $conf=0;

        $sql = mysqli_query($conector, 'SELECT * FROM usuarios WHERE email = "'.$email.'"');

        $row = mysqli_num_rows($sql);
        if($row==0) {
            $sql = "INSERT INTO usuarios(nome, senha, email) VALUES (?, ?, ?)";
            $consulta = $conector->prepare($sql);
            $consulta->bind_param("sss", $nome, $senha, $email);
            $consulta->execute();

            if ($consulta->affected_rows > 0) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["nome"] = $nome;
                
                echo "<script>alert('Cadastrado realizado com sucesso!');window.location.href = '../../index.php';</script>";
            } else {
                echo "<script>alert('Não cadastrado, houve um erro!');window.location.href = '../pages/cadastrar.php';</script>";
            }
        }else{
            echo "<script>alert('Email já cadastrado!');window.location.href = '../pages/usuario.php ';</script>";
        }
    }else {
        echo  "<script>alert('As senhas não estão iguais, digite novamente!');window.location.href = '../pages/cadastrar.php';</script>";
    }
}else {
    echo  "<script>alert('É obrigatório o preenchimento de todos os campos!');window.location.href = '../pages/cadastrar.php';</script>";
}
?>

