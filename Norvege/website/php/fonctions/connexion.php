<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Connexion Formulaire</title>
</head>
<body class="body-connexion">


    <div class="titre-contact">
        <h1>Se connecter à Norvège.website</h1>
        <h2>Saisissez vos informations !</h2>
    </div>

    <div class="connexion-form">
        <form id="connexion-form" method="post" action="">
            <input name="name" type="text" class="form-control" placeholder="Votre login" required>
            <br>
            <input name="password" type="password" class="form-control" placeholder="Votre mot de passe" required>
            <br>
            <input type="submit" class="form-control connexion-submit" value="CONNEXION">

        </form>  
    </div>
    <p>Vous n'avez pas de compte ? <a href="inscription.php" class="lien-connexion">S'inscrire</a></p>
</body>
</html>