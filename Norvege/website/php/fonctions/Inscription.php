<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../../css/style.css">
    </head>

    <body class="body-connexion">

        <?php include_once("traitementInscription.php") ?>


        <div class="titre-contact" id="titre-contact-inscription">
            <h1>S'inscrire à Norvège.website</h1>
            <h2>Saisissez vos informations !</h2>
        </div>
        <form id="connexion-form" method="post" action="Inscription.php">
            <input type="text"  class="form-control" name="nom" id="nom" required  placeholder="Votre nom" value="<?php if(!empty($nom)) {echo $nom;} ?>">
            <br>
            <input type="text"  class="form-control" name="prenom" id="prenom" required placeholder="Votre prénom" value="<?php if(!empty($prenom)) {echo $prenom;} ?>">
            <br>
            <input type="email"  class="form-control" name="email" id="email" required placeholder="Votre email" value="<?php if(!empty($mail)) {echo $mail;} ?>">
            <br>
            <input type="password"  class="form-control" name="mdp" id="mdp" required placeholder="Votre mot de passe (entre 8 et 16 caractères, au moins 1 chiffre)" />
            <br>
            <input type="password"  class="form-control" name="bismdp" id="bismdp" required placeholder="Confirmez le mot de passe">
            <br>
            <button type="submit" class="form-control connexion-submit" >Créer mon compte</button>
        </form>
        <div class = "erreur">
        
            <?php
                if (!empty($_POST)){
                    $submit = true;
                    if (empty($nom)){
                        echo "<p>Veuillez entrer un nom</p>\n";
                        $submit = false;
                    }
                                
                    if (empty($prenom)){
                        echo "<p>Veuillez entrer un prenom</p>\n";
                            $submit = false;
                    }

                    if (empty($mail) || !$mailOK){
                        if ($mailOK)
                            echo "<p>Veuillez entrer un email correct\n";
                        if (!$mailOK)
                            echo "$mailUti est déjà utilisé";
                        echo "</p>";
                        $submit = false;
                    }

                    if (empty($mdp) || !$mdpOK){
                        echo "<p>Veuillez entrer un mot de passe correct</p>\n";
                        $submit = false;
                    }

                    if (empty($mdpBis)){
                        echo "<p>Les mots de passes ne correspondent pas</p>\n";
                        $submit = false;
                    }

                    if ($submit === True){
                        $tab[] = $mail;
                        $tab[] = $mdp;
                        $tab[] = $nom;
                        $tab[] = $prenom;     
            
                        $file = fopen("../../../data/connexion.csv", "a");
                        if (!$file)
                            die("problème ouverture du fichier");
                        fputcsv($file, $tab,";");
                        fclose($file);
                        echo "<p classe=\"inscrit\">Inscription réussie !</p>";
                    }
                }
            ?>
        <p>Vous avez déja un compte ? <a href="connexion.php" class="lien-connexion">Se connecter</a></p>

        </div>
    </body>
</html>