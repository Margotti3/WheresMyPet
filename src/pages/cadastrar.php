<?php
session_start();
if(isset($_SESSION["nome"])&&$_SESSION["email"]) {
    echo "<script>alert('Você já esta cadastrado!');window.location.href = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        html{
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        body {
            width: 100vw;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        @media screen and (max-width: 1050px) {
            html{
                background-image: url("../../public/imagens/5.jpg");
            }
        }
        @media screen and (min-width: 1050px) {
            html{
                background-image: url("../../public/imagens/2.jpg");
            }
        }
        
        #cadastro{
            background-color: rgba(240,240,240,0.3);
        }
        #botao{
            margin-bottom: 16px;
        }
        a{
            font-size: 50px;
            margin-left: 5%;
        }
    </style>
    <script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
    <script type="text/javascript" href="../../jQuery.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="row col center-align container" id="cadastro" >

    <a class="white-text">Área de cadastro</a>
    <div class="container">
    <form action="../functions/cadastro.php" class="col s12 m12" method="POST" >
        <div class="center">
            <div class="input-field col s12 m12">
                <input type="text" id="nome" class="col s12" name="nome">
                <label for="nome" class="white-text">Nome e sobrenome:</label>
            </div>
            <div class="input-field col s12 m12">
                <input type="email" id="email" class="col s12" name="email">
                <label for="email" class="white-text">E-mail:</label>
            </div>
            <div class="input-field col s12 m12">
                <input type="password" id="senha" class="col s12" name="senha">
                <label for="senha" class="white-text">Senha:</label>
            </div>
            <div class="input-field col s12 m12">
                <input type="password" id="confSenha" class="col s12" name="confSenha">
                <label for="confSenha" class="white-text">Confirme a senha:</label>
            </div>
        </div>

        <button class="btn waves-effect waves-light " id="botao" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
        </button>
    </form>
    </div>
</div>
</body>
</html>