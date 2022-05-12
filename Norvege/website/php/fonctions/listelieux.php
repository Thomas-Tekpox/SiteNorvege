<?php 

$lieux = array("Oslo" ,"Trolltunga","Archipel du Svalbard","Velmunden","Setesdal","Roros et la Circonference","Le canal historique du Telemark","Bryggen","Glacier d’Alfotbreen","Le rocher de Preikestolen","L'eglise en bois debout d'Urnes","Tromso","Les Alpes de Lyngen","Parc national de Rondane","Mount Floyen and the Funicular" );

// void  tri(array &$tab)
function  tri(&$tab)
{
	$j = 0;
	do
	{
		$j ++;
		$echange = false ;
		for ($i = 0; $i<count($tab)-$j; $i++)
		{
			if($tab[$i] > $tab[$i+1])
			{
				$a = $tab[$i];
				$tab[$i]= $tab[$i+1];
				$tab[$i+1]=$a;
				$echange = true;
			}
		}	
	}while($echange);
}
tri($lieux) ;



foreach ($lieux as $lieu) {
	$lieuLien = str_replace(" ", "-",$lieu) ;
	echo "<li><a href=\"norvege/website/php/$lieuLien.php\">$lieu</a></li>\n";
}


 ?>

