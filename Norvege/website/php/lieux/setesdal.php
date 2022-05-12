<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Setesdal</title>
</head>
<body>
    <!--barre du haut-->
    <?php include_once("../fonctions/nav.php");?>

    <header class="header-page img-page" id="header-setesdal">
        <h1 >Setesdal</h1>
    </header>

    <div id="setesdal" class="container background2">
        <div class="flex-container">
            <h2>Un peu de culture</h2>
            <p>
                Setesdal est une vallée traversée par des routes sur 210 km et pleine de magnifiques paysages.
                Les habitants veulent à tout prix conservés leur culture et leur environnement. Il y a deux musées qui sont de véritables 
                références sur l’art et les traditions de la vallée.
            </p>
            <p>
                Il y a plus de 300 ans un orfèvre s’est installer dans la région et aujourd’hui il en reste 3. Vous pouvez vous rendre dans leurs 
                ateliers pour en apprendre plus sur leurs méthodes de fabrication de bijoux. Vous pourrez aussi voir une ancienne espèce de 
                mouton à queue courte qui a failli en 1900 disparaitre mais que la vallée à sauver.
            </p>
            <br>
            <div class="photo">
                <div class="bloc-photo"></div>
                <img class="bloc-1" src="../../../media-addon/image-video/Setesdal.jpg" alt="maison de Setesdal">
                <img class="bloc-1" src="../../../media-addon/image-video/SetesdalFond.jpg" alt="Randonneur avec son chien">
                <div class="bloc-photo"></div>
            </div>
        </div>
    </div>

    <div class="img-page" id="img-setesdal1"></div>

    <div class="container background1">
        <div class="flex-container">
            <h2>Un paysage minier</h2>
            <p>
                Vous pouvez également monter à bord d’un bateau à vapeur de 1866 : le Byglandsfjord. 
                Dans la vallée il y a environ 50 sentiers qui permettent de faire de belle randonnée et même de marcher jusqu’à la cascade 
                de Gloppefoss l’une des plus grandes et belles cascades de la vallée. 
                Vous pouvez aussi faire de l’escalade où de l’accrobranche pour les plus jeunes. Il y a aussi la descente en raft sur la Otra 
                qui est une des plus grandes rivières norvégiennes. 
            </p>
            <br>
            <div class="photo">
                <div class="bloc-photo"></div>
                <img class="bloc-1" src="../../../media-addon/image-video/SetesdalLac.jpg" alt="Lac de Sedestal">
                <div class="bloc-photo"></div>
            </div>
        </div>
    </div>
        
    <footer class="footer-page">
        <?php include_once("../fonctions/footer.php");?>
    </footer>
    <!--Remonter en haut de la page-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="../../javascript/gotop.js"></script>
    <div id="scrollUp">
        <a href="#top"><img src="../../../media-addon/image-video/arrow_up.png"/></a>
    </div>
</body>
</html>