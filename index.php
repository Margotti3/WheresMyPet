<?php
session_start();
if(isset($_SESSION["nome"])&&$_SESSION["email"]) {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
}else{
    $nome="Entrar";
    $email="";
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>WheresMyPet</title>

    <style>

        html{
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        nav img{
            height: 100%;
            width: 100%;
        }
        
    </style>

    <script src="jQuery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>

    <nav class="green">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">WheresMyPet</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="src/pages/app.php">APP</a></li>
                <li><?php
                        if($nome!="Entrar") {
                            echo "<a href='#!' data-target='slide-out' class=''>" . $nome . "</a></li>";
                            echo "<li><a href='src/functions/logout.php'>Sair</a></li>";
                        }else{
                            echo "<a href='src/pages/usuario.php'>" . $nome."</a></li>";
                        }
                    ?>
            </ul>
            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                        <div class="background">
                            <img src="<?php
                                if($nome!="Entrar"){
                                    echo "public/imagens/3.png";
                                }else{
                                    echo "public/imagens/4.jpg";
                                }
                            ?>">
                        </div>
                        <a href="#!"><img class="circle" src="public/imagens/icon.png"></a>
                        <a href="#!"><span class="white-text name"><?php echo $nome; ?></span></a>
                        <a href="#!"><span class="white-text email"><?php echo $email; ?></span></a>
                        <a href="#!"><span class="white-text name">WheresMyPet</span></a>
                    </div></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="app.php">APP</a></li>
                <li>
                        <?php
                            if($email=="") {
                                echo "<a class='waves-effect' href='src/pages/usuario.php'>Entrar";
                            }else{
                                echo "<a class='waves-effect' href='src/functions/logout.php'>Sair";
                            }
                        ?>
                    </a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>

    </nav>

    <div class="section white">
        <div class="row container">
            <h1 class="header center green-text text-lighten-2">Está a proucura do seu Pet?</h1>
            <div class="row center">
                <h5 class="header col s12 light">O nosso app pode te ajudar de uma forma simples e prática</h5>
            </div>
            <div class="row center">
                <a href="src/pages/app.php" id="download-button" class="btn-large waves-effect waves-light green teal lighten-1">Conheça</a>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="public/imagens/7.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="row center">
                <h1 class="header center green-text text-lighten-2">Motivo</h1>
                <div class="row center">
                    <h5 class="header col s12 light">A quantidade de animais de estimação existente no Brasil (28,9 milhões segundo
                        o IBGE), juntamente com a enorme quantidade de animais abandonados nas ruas (30
                        milhões), fez com que surgisse a necessidade de se criar um aplicativo para encontrar
                        ou reencontrar seu animal de estimação.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="public/imagens/1.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h1 class="header center green-text text-lighten-2">Objetivos</h1>
            <div class="row center">
                <h5 class="header col s12 light">Os nossos objetivos são diminuir significativamente a quantidade de animais
                abandonados, trazer a alegria aos donos de cachorros perdidos de volta, dar um bom lar para os pets e juntar
                um maior número de pessoas para estar nos ajudando. Faça parte dessas pessoas cadastre-se!</h5>
            </div>
            <div class="row center">
                <a href="src/pages/cadastrar.php" id="download-button" class="btn-large waves-effect waves-light green teal lighten-1">Cadastrar</a>
            </div>
        </div>
    </div>

    <footer class="page-footer green">
        <h3 align="center">Produtores do APP</h3>
        <div class="container">
            <div class="row">
                <div class="col m3 s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="public/perfil/Barbara.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Bábara<i class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.facebook.com/barbara.luiza.73700">Entre em contato</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Bárbara<i class="material-icons right">close</i></span>
                            <p class="black-text">Namorada do Guilherme</p>
                        </div>
                    </div>
                </div>
                <div class="col m3 s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="public/perfil/Marcos.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Marcos<i class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.facebook.com/profile.php?id=100009496394967">Entre em contato</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Marcos<i class="material-icons right">close</i></span>
                            <p class="black-text">O cara mais esquisito e batata</p>
                        </div>
                    </div>
                </div>
                <div class="col m3 s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="public/perfil/Margotti.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Mateus<i class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.facebook.com/mateus.margotti">Entre em contato</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Mateus<i class="material-icons right">close</i></span>
                            <p class="black-text">O cara mais incrível do mundo</p>
                        </div>
                    </div>
                </div>
                <div class="col m3 s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="public/perfil/Maysa.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Maysa<i class="material-icons right">more_vert</i></span>
                            <p><a href="https://www.facebook.com/maysa.oliveira.3990">Entre em contato</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Maysa<i class="material-icons right">close</i></span>
                            <p class="black-text">A xinxila do grupo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">Campos V</a>
            </div>
        </div>
    </footer>

    <script>

        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        $(document).ready(function(){
            $('.parallax').parallax();
        });

    </script>

</body>
</html>
