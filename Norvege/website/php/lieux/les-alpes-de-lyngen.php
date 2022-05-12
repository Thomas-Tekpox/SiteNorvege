<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Alpes de Lygen</title>
</head>
<body>
    <!--barre du haut-->
    <?php include_once("../fonctions/nav.php");?>


    <header class="header-page img-page" id="header-lygen">
        <h1 >Les Alpes de Lyngen</h1>
    </header>


    
    <div id="Lygen" class="container background3">
        <div class="flex-container">
            <h2>Le massif</h2>
            <p>
                Les Alpes de Lyngen sont un massif des Alpes scandinaves se situant dans le comté de Tromsø dans le nord de la Norvège. 
                Le point le plus haut de ce massif se situe à 1833 mètres d’altitude et est aussi le plus haut sommet de tout le comté. 
                Ce massif possède des paysages d’une grande beauté, où il pleut moins que dans le reste de la Norvège. 
                Malgré le grand froid qui frappe cette zone, le puissant courant marin qui influence la zone, rend la température supportable 
                pour des régions comme celle-ci.            
            </p>
            <br>
            <div class="photo">
                <div class="bloc-photo"></div>
                <img class="bloc-1" src="../../../media-addon/image-video/LyngenPaysage.jpg" alt="Personne faisant du ski dans les Alpes avec le paysage en fond">
                <div class="bloc-photo"></div>
            </div>
        </div>
    </div>

    <div class="img-page" id="header-lygen"></div>

    <div class="container background1">
        <div class="flex-container">
            <h2>Les activités sportives</h2>
            <p>
                Pour y aller vous pouvez soit opter pour un voyage en avion ou bien louer une voiture à Oslo et faire un voyage de 1600km pour 
                vous rendre aux Alpes. Diverses activités sont disponibles dans cet endroit : de la pêche, de la chasse, de l’escalade, du ski 
                de la plongée et du parapente. Ces montagnes seront surtout utilisées par les skieurs chevronnés, disposant de 
                falaises et de pentes beaucoup plus raides que sur les petites montagnes entourant Oslo. 
            </p>
            <br>
            <div class="photo">
                <div class="bloc-photo"></div>
                <img class="bloc-1" src="../../../media-addon/image-video/LyngenSki.jpg" alt="Personne faisant du ski dans les Alpes">
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