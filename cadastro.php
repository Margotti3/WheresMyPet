<?php

include_once "conect.php";

if($_POST["nome"]!="" && $_POST["email"]!="" && $_POST["senha"]!="" && $_POST["confSenha"]!=""){
    if($_POST["senha"] == $_POST["confSenha"]) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $conf=0;

        $sql = mysqli_query($conector, 'SELECT * FROM usuarios WHERE email = "'.$email.'"');

        $row = mysqli_num_rows($sql);
        if($row==0) {
            $sql = "INSERT INTO usuarios(nome, senha, email, confirmacao) VALUES (?, ?, ?, ?)";
            $consulta = $conector->prepare($sql);
            $consulta->bind_param("ssss", $nome, $senha, $email, $conf);
            $consulta->execute();

            if ($consulta->affected_rows > 0) {
                $para = $email;
                $sub = 'Email para validar o cadastro';
                $mensagem ='Click no link para confirmação de cadastro https://mateusmargotti.000webhostapp.com/validar.php?email='.$email;
                $de = 'From: mateusmargotti@hotmail.com';
                $m = mail($para,$sub,$mensagem,$de);
                echo "<script>alert('Confirme o cadastro no seu email para fazer o login!');window.location.href = 'usuario.php';</script>";
            } else {
                echo "<script>alert('Não cadastrado, houve um erro!');window.location.href = 'cadastrar.php';</script>";
            }
        }else{
            echo "<script>alert('Email já cadastrado!');window.location.href = 'usuario.php ';</script>";
        }
    }else {
        echo  "<script>alert('As senhas não estão iguais, digite novamente!');window.location.href = 'cadastrar.php';</script>";
    }
}else {
    echo  "<script>alert('É obrigatório o preenchimento de todos os campos!');window.location.href = 'cadastrar.php';</script>";
}
?>

