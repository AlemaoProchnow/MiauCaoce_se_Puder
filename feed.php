<?php
    require_once('_settings/check.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="_css/feed.css">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    <title>MiauCãoce se Puder</title>
    <link rel="icon" href="_images/logomarcaPreta.png" type="image/x-icon">

    <script type="text/javascript" src="_javascript/functions.js"></script>
</head>

<body>

    <header id="cabecalho">
        <img id="cabecalhoLogo" src="_images/logomarcaMedia.png">

        <div id="userInteractingBox">
                <button class="userAccountButton" id="userProfileVisualizationButton">
                    <a href="profile.php" id="profileViewLink" class="accountLinks">Visualizar Perfil</a>
                </button>

                <button class="userAccountButton" id="userProfileLogoutButton" onmouseout="changeLogoutIcon('_images/white-logout-icon.png')" onmouseover="changeLogoutIcon('_images/blue-logout-icon.png')">
                    <a href="_settings/logout.php" id="logoutLink" class="accountLinks"><img id="logout-icon" src="_images/white-logout-icon.png"></a>
                </button>
            </div>

        <div id="listraCabecalho"></div>
    </header>

    <nav id="MenuPrincipal" class="menuPrincipal">
        <ul class="moduloTotalMenuHome">
            <li id="menuHome" class="menuHome"> <a class="menuLink" href="index.php">HOME</a> </li>
            <li id="menuFeed" class="menuHome"> <a class="menuLink" href="feed.php" style="color: #aaaaaa;">ANÚNCIOS</a> </li>
            <li id="menuAnunciar" class="menuHome"> <a class="menuLink" href="anunciar.php">ANUNCIE</a> </li>
            <li id="menuContato" class="menuHome"> <a class="menuLink" href="contato.php">CONTATE-NOS</a> </li>
            <li id="menuLogin" class="menuHome"> <a class="menuLink" href="login.php">LOGIN</a> </li>
        </ul>
    </nav>

    <div class="corpoHome">
        <div class="imagemHome">
            <img src="_images/900x340_5.jpg">
        </div>
        <div class="bordaImagemHome">
            <p> Anúncios </p>

            <div id="listraImagemPrincipal">
                <!--<img src="_images/faixaFinaAzulMedia.png">-->
            </div>
        </div>
    </div>

    <div class="conteudoAnuncios">
        <div class="caixaCima">
            <div class="box1" id="box1Cima">
                <figure>
                    <img src="_images/280x208.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>

            <div class="box2" id="box2Cima">
                <figure>
                    <img src="_images/280x208.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>

            <div class="box3" id="box3Cima">
                <figure>
                    <img src="_images/280x208.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="caixaMeio">
            <div class="box1" id="box1Meio">
                <figure>
                    <img src="_images/280x208.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>

            <div class="box2" id="box2Meio">
                <figure>
                    <img src="_images/280x208.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>

            <div class="box3" id="box3Meio">
                <figure>
                    <img src="_images/280x208.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="caixaBaixo">
            <div class="box1" id="box1Baixo">
                <figure>
                    <img src="_images/1280x720_9.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>

            <div class="box2" id="box2Baixo">
                <figure>
                    <img src="_images/1280x720_2.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>

            <div class="box3" id="box3Baixo">
                <figure>
                    <img src="_images/1280x720_6.jpg">

                    <figcaption>
                        <p><a href="animalProfile.php"> Visualizar este Anúncio... </a></p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="botaoVerMais">
            <button>
                <a href="#">Ver mais</a>
            </button>
        </div>
    </div>

    <div class="rodape">
        <div class="listrasRodape">
            <!--<img src="_images/faixaFinaAzulMedia.png">-->
        </div>

        <div class="logoEsquerdaRodape">
            <a href="feed.php#cabecalho">
                <img src="_images/logomarcaQuaseNormal.png">
            </a>
        </div>

        <div class="copyright">
            <p>
                <b> MiauCãoce se Puder &copy; </b> - Todos os direitos reservados
            </p>
        </div>

        <div class="menuRodape">
            <p><a class="menuLinkRodape" href="index.php">Home</a></p>
            <p><a class="menuLinkRodape" href="feed.php">Perdeu seu mascote?</a></p>
            <p><a class="menuLinkRodape" href="anunciar.php">Achou um mascote ou então ele acabou de fugir?</a></p>
            <p><a class="menuLinkRodape" href="contato.php">Fale conosco</a></p>
            <p><a class="menuLinkRodape" href="login.php">Se cadastre</a></p>
        </div>
    </div>
</body>

</html>