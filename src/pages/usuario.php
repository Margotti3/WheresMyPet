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
        <title>Login</title>

        <style>

            html{
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
            }
            @media screen and (max-width: 375px){
                html{
                    background-image: url("../../public/imagens/5.jpg");
                }
                #cadastro{
                    margin: 25% 5% 0%;
                }
            }
            @media screen and (max-width: 1030px) and (min-width: 375px){
                html{
                    background-image: url("../../public/imagens/5.jpg");
                }
                #cadastro{
                    margin: 40% 5% 0%;
                }
            }
            @media screen and (min-width: 1031px) {
                html{
                    background-image: url("../../public/imagens/3.png");
                }
                #cadastro{
                    margin: 10% 15% 0%;
                }
            }
            #cadastro{
                background-color: rgba(255,250,250,0.5);
            }
            .login{
                font-size: 50px;
            }
            a{
                margin-left: 5%;
            }
            #botao{
                margin-top: -5%;
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
        <div class="row center-align container" id="cadastro">
            <a class="login grey-text container">Login</a><br>
            <form class="col s12 m12" action="../functions/login.php" method="POST">
                <div class="container">
                    <div class="row center">
                        <div class="input-field col s12 m12 center">
                            <input type="email" id="email" class="col s12" name="email">
                            <label for="email">Email:</label>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="input-field col s12 m12 center">
                            <input type="password" id="senha" class="col s12" name="senha">
                            <label for="senha">Senha:</label>
                        </div>
                    </div>
                </div>

                <br><br>
                <button class="btn waves-effect waves-light" type="submit" name="action" id="botao">Entrar
                    <i class="material-icons right">send</i>
                </button>
            </form>
            Não possui cadastro? <a href="cadastrar.php">Clique aqui</a>
        </div>


    </body>
</html>