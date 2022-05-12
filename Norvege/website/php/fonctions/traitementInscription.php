<?php

use function PHPSTORM_META\type;

$nomOk = true;
$prenomOK = true;
$mailOK = true;
$mdpOK = true;
$mdpBisOK = true;

if (!empty($_POST))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["email"];
    $mdp = $_POST["mdp"];
    $mdpBis = $_POST["bismdp"];
}

if (!empty($mdp))
{
    if (!preg_match("/^[[:alnum:]]{8,16}$/",$mdp) || !preg_match("/[0-9]/",$mdp))
    {
            $mdpOK = false;
    }
    else
        $mdp = md5($mdp);
}

if (!empty($mdpBis))
{
    if (md5($mdpBis) !== $mdp)
        $mdpBisOK = false;
}

$fichier = fopen("../../../data/connexion.csv","r");
if (!$fichier)
    die ("pb ouverture fichier");
while (!feof($fichier))
    $ligne[] = fgetcsv($fichier,0,";");
fclose($fichier);

if (!empty($mail))
{
    foreach($ligne as $v)
    {
        foreach((array) $v as $infoUti)
        {
            if ($infoUti == $mail)
            {
                $mailUti = $infoUti;
                $mailOK = false;
            }
        }
    }
}

?>