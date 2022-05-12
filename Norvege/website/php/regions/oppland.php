<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Oppland</title>
</head>

<body class="region">
    <!--barre du haut-->
    <?php include_once("../fonctions/nav.php");?>

    <header class="region_titre">
        <h1>Oppland</h1>
    </header>

    <div class="selection_menu">
        <div class="vignette">
            <a href="../lieux/velmunden.php" style="display:block;width:100%;height:100%;" class="clic_vignette">
                <div class="cadre">
                    <img src="../../../media-addon/image-video/Velmunden_vign.jpg" alt="lac">
                </div>
                <div class="text">
                    <h2>Velmunden</h2>
                    <p>
                        Venez voir ce magnifique lac. Il fera ravir les fans de sports nautiques tout en profitant d'un
                        beau paysage Norvégien.
                    </p>
                </div>
            </a>
        </div>

        <div class="vignette">
            <a href="../lieux/parc-national-de-rondane.php" style="display:block;width:100%;height:100%;" class="clic_vignette">
                <div class="cadre">
                    <img src="../../../media-addon/image-video/Rondane_vign.jpg" alt="montagne">
                </div>
                <div class="text">
                    <h2>Parc de Rondane</h2>
                    <p>
                        Un parc national au paysage montagneux. Un lieu splendide durant toutes les saisons. Si vous
                        aimer vous balader n'hésiter pas à y faire un tour.
                    </p>
                </div>
            </a>
        </div>
    </div>

    <footer class="footer-page footer_fix">
        <?php include_once("../fonctions/footer.php");?>
    </footer>

</body>

</html>