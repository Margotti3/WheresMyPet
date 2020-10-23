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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WherePet</title>

    <style>

        html{
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        img{
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>

<nav class="green">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo">WheresMyPet</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="app.php">APP</a></li>
            <li><?php
                if($nome!="Entrar") {
                    echo "<a href='#!' data-target='slide-out' class=''>" . $nome . "</a></li>";
                    echo "<li><a href='logout.php'>Sair</a></li>";
                }else{
                    echo "<a href='usuario.php'>" . $nome."</a></li>";
                }
                ?>
        </ul>
        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
                    <div class="background">
                        <img src="<?php
                        if($nome!="Entrar"){
                            echo "imagens/3.png";
                        }else{
                            echo "imagens/4.jpg";
                        }
                        ?>">
                    </div>
                    <a href="#!"><img class="circle" src="imagens/icon.png"></a>
                    <a href="#!"><span class="white-text name"><?php echo $nome; ?></span></a>
                    <a href="#!"><span class="white-text email"><?php echo $email; ?></span></a>
                    <a href="#!"><span class="white-text name">WheresMyPet</span></a>
                </div></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="app.php">APP</a></li>
            <li>
                <?php
                if($email=="") {
                    echo "<a class='waves-effect' href='usuario.php'>Entrar";
                }else{
                    echo "<a class='waves-effect' href='logout.php'>Sair";
                }
                ?>
                </a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>

</nav>

<div id="index-banner" >
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center green-text text-lighten-2">O aplicativo</h1>
            <div class="row center">
                <h5 class="header col s12 light">WheresMyPet se consiste em uma plataforma para ajudar os usuários a
                    encontrar seu animal perdido ou adotar um novo amigo por meio de cruzamento de
                    informações. Os usuários cadastrados irão escolher entre as opções "encontrar",
                    "adotar", "doar" ou "encontrei", cadastrar o animal de acordo com suas características
                    e obter resultados a partir das informações também colocadas por outros usuários. O
                    próprio aplicativo irá cruzar as informações e exibir resultados com os possíveis animais.
                </h5>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="imagens/6.jpg" alt="Unsplashed background img 1"></div>
</div>
<div id="index-banner" >
    <div class="section no-pad-bot">
        <div class="container">
            <br>
            <h1 class="header center green-text text-lighten-2">Cadastro</h1>
            <div class="row center">
                <h5 class="header col s12 light">A plataforma, além de cadastrar usuários, irá cadastrar também ONGs
                    possibilitando a agilidade para o processo de adoção de seus animais e um mecanismo
                    para receber doações dos usuários do aplicativo.</h5>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="imagens/8.jpg" alt="Unsplashed background img 1"></div>
</div>
<div id="index-banner" >
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center green-text text-lighten-2">Em breve</h1>
            <div class="row center">
                <h5 class="header col s12 light">O nosso app está em desenvolvimento para que você posso usufruir de uma
                    plataforma bonita e simples, por isso ele só estará disponível em breve. Para ficar por dentro
                 de quando ele estará disponível e de atualizações futuras cadastre-se em nosso site que avisaremos por email!</h5>
            </div>
            <div class="row center">
                <a href="cadastrar.php" id="download-button" class="btn-large waves-effect waves-light green teal lighten-1">Cadastrar</a>
            </div>
            <br><br>

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
                        <img class="activator" src="perfil/Barbara.jpg">
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
                        <img class="activator" src="perfil/Marcos.jpg">
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
                        <img class="activator" src="perfil/Margotti.jpg">
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
                        <img class="activator" src="perfil/Maysa.jpg">
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

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });

    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    var instance = M.Sidenav.getInstance(elem);
    instance.open();
    instance.close();

</script>

</body>
</html>
