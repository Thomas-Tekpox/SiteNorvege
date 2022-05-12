<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Glacier d'Ålfotbreen</title>
</head>

<body>
    <!--barre du haut-->
    <?php include_once("../fonctions/nav.php");?>


    <header class="header-page img-page" id="header-glacier">
        <h1>Glacier d'Ålfotbreen</h1>
    </header>

    <div class="container background1">
        <div class="flex-container">
            <h2>Présentation des lieux</h2>
            <p>
                Le glacier d'Ålfotbreen, est le glacier le plus à l’Ouest du pays ; il se situe dans la région de
                NordFjord et s'étend sur près de 17 km². Il atteint une altitude maximum de 1 385 mètres pour une
                moyenne 5 600 millimètre de pluie chaque année, qui protège le glacier contre
                la fonte des glaces en formant une couche d’environ 10 mètres. Le glacier et
                ses environs sont des espaces protégés, permettant ainsi de garder les lieux dans un état propre et
                agréable.
            </p>
            <br>
            <div class="photo">
                <div class="bloc-photo"></div>
                <img class="bloc-1" src="../../../media-addon/image-video/randoGlacier.jpg">
                <div class="bloc-photo"></div>
            </div>
        </div>
    </div>

    <div class="img-page" id="header-glacier"></div>

    <div class="container background1">
        <div class="flex-container">
            <h2>Les activités</h2>
            <p>
                Le climat est rude et même en été il vous sera nécessaire de vous habillez chaudement et d'être équipé
                pour marcher dans la zone.
                Pour vous y rendre, vous pouvez prendre le bus ou votre voiture. Des guides pourront vous emmener en
                randonnée sur le glacier.
            </p>
            <br>
            <div class="photo">
                <div class="bloc-photo"></div>
                <img class="bloc-1" src="../../../media-addon/image-video/glacier-cavite.jpg">
                <div class="bloc-photo"></div>
            </div>
        </div>
    </div>

    <footer class="footer-page footer_fix">
        <?php include_once("../fonctions/footer.php");?>
    </footer>

    <!--Remonter en haut de la page-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="../../javascript/gotop.js"></script>
    <div id="scrollUp">
        <a href="#top"><img src="../../../media-addon/image-video/arrow_up.png" /></a>
    </div>

</body>

</html>