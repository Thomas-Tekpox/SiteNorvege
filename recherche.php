<?php 
    $lieux = file("norvege/data/lieux.txt",FILE_IGNORE_NEW_LINES);
    if (isset($_POST['rechercher'])){
        $trouver = false ;
        foreach ($lieux as $lieu){
            if (strtoupper($_POST['recherche']) == strtoupper($lieu)){ 
                $trouver = true ;
                $lieu = strtolower($lieu);
                $lieu = str_replace(" ", "-",$lieu) ;
                $lieu = str_replace("'", "-",$lieu) ;
                $lieu = str_replace("é", "e",$lieu) ;
                 header("Location: http://iutannecy-deptinfo.fr/m1106/Darklighter/norvege/website/php/lieux/$lieu.php");	
            }
        }
        if ($trouver == false){
            if (!empty($_POST['recherche'])){
                foreach ($lieux as $lieu){
                    $pos = stripos($lieu, $_POST['recherche']) ;
                    if ($pos !== false)
                        $tab[] = $lieu ;                 
                }    
                if (isset($tab)) {
                    if(count($tab)>1)
                        echo "<p class=\"search-info\">". count($tab)." résultats trouvés :</p><br>\n";
                    if(count($tab)==1)
                        echo "<p>". count($tab)." résultat trouvé :</p><br>\n";
                    foreach ($tab as $res){
                        $nom = $res;
                        $nom = str_replace(" ", "-",$nom) ;
                        $nom = str_replace("'", "-",$nom) ;
                        $nom = str_replace("é", "e",$nom) ; 
                        $nom = strtolower($nom);
                        echo "<span class=\"bordure-resultat\">
                                <a class=\"before after\" id=\"lien-resultat\" href=\"norvege/website/php/lieux/$nom.php\">$res</a>
                            </span><br><br>";
                    }
                }
            	else
                    echo "<p>Aucun résultat pour votre recherche</p>\n";                                
            }
        }         
    }
?>