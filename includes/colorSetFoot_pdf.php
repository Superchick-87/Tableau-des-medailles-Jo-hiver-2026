<?php
/*=========================================================================================================================
=            Script pour attribuer la couleur aux maillot dans le pdf - doit correspondre à "colorSetFoot.css"            =
=========================================================================================================================*/

/*----------  Fonction qui attribut la couleur au maillot  ----------*/

function CouleurFond($Equipe,$colorFill){
	
	/************ National ***************/
	
	if ($Equipe == 'Amiens') {$colorFill = array(20,15,16,0);return $colorFill;}
	elseif ($Equipe == 'AcAjaccio') {$colorFill = array(0,95,91,0);return $colorFill;}
	elseif ($Equipe == 'AngersSco') {$colorFill = array(0,0,0,100);return $colorFill;}
	elseif ($Equipe == 'Auxerre') {$colorFill = array(100,81,0,0);return $colorFill;}
	elseif ($Equipe == 'Bordeaux') {$colorFill = array(100,90,40,38);return $colorFill;}
	elseif ($Equipe == 'Brest') {$colorFill = array(0,100,97,0);return $colorFill;}
	elseif ($Equipe == 'Chambly') {$colorFill = array(93,75,0,0);return $colorFill;}
	elseif ($Equipe == 'Caen') {$colorFill = array(100,94,32,30);return $colorFill;}
	elseif ($Equipe == 'Chateauroux') {$colorFill = array(100,93,28,18);return $colorFill;}
	elseif ($Equipe == 'Clermont') {$colorFill = array(0,95,91,0);return $colorFill;}
	elseif ($Equipe == 'DijonFco') {$colorFill = array(13,100,88,4);return $colorFill;}
	elseif ($Equipe == 'Dunkerque') {$colorFill = array(0,0,0,18);return $colorFill;}
	elseif ($Equipe == 'Grenoble') {$colorFill = array(93,75,0,0);return $colorFill;}
	elseif ($Equipe == 'LeHavre') {$colorFill = array(100,94,33,31);return $colorFill;}
	elseif ($Equipe == 'Lille') {$colorFill = array(19,98,100,10);return $colorFill;}
	elseif ($Equipe == 'Lorient') {$colorFill = array(0,79,100,0);return $colorFill;}
	elseif ($Equipe == 'Lyon') {$colorFill = array(20,15,16,0);return $colorFill;}
	elseif ($Equipe == 'Marseille') {$colorFill = array(20,15,16,0);return $colorFill;}
	elseif ($Equipe == 'AsMonaco') {$colorFill = array(7,100,100,2);return $colorFill;}
	elseif ($Equipe == 'Montpellier') {$colorFill = array(88,76,43,44);return $colorFill;}
	elseif ($Equipe == 'Nancy') {$colorFill = array(0,0,0,0);return $colorFill;}
	elseif ($Equipe == 'FcNantes') {$colorFill = array(3,13,100,0);return $colorFill;}
	elseif ($Equipe == 'Nimes') {$colorFill = array(19,98,100,10);return $colorFill;}
	elseif ($Equipe == 'OgcNice') {$colorFill = array(19,98,100,10);return $colorFill;}
	elseif ($Equipe == 'Niort') {$colorFill = array(89,73,0,0);return $colorFill;}
	elseif ($Equipe == 'Reims') {$colorFill = array(15,100,100,0);return $colorFill;}
	elseif ($Equipe == 'Rennes') {$colorFill = array(10,92,70,1);return $colorFill;}
	elseif ($Equipe == 'AsSaintEtienne') {$colorFill = array(75,41,69,38);return $colorFill;}
	elseif ($Equipe == 'FcMetz') {$colorFill = array(0,100,60,30);return $colorFill;}
	elseif ($Equipe == 'ParisSg') {$colorFill = array(100,0,0,57);return $colorFill;}
	elseif ($Equipe == 'ParisFc') {$colorFill = array(90,67,23,7);return $colorFill;}
	elseif ($Equipe == 'Pau') {$colorFill = array(13,6,92,0);return $colorFill;}
	elseif ($Equipe == 'Rodez') {$colorFill = array(0,92,84,0);return $colorFill;}
	elseif ($Equipe == 'Toulouse') {$colorFill = array(70,69,0,0);return $colorFill;}
	elseif ($Equipe == 'RcStrasbourg') {$colorFill = array(91,72,0,0);return $colorFill;}
	elseif ($Equipe == 'Sochaux') {$colorFill = array(4,14,89,0);return $colorFill;}
	elseif ($Equipe == 'Troyes') {$colorFill = array(88,72,0,0);return $colorFill;}
	elseif ($Equipe == 'Valenciennes') {$colorFill = array(0,100,93,0);return $colorFill;}
	elseif ($Equipe == 'RcLens') {$colorFill = array(13,100,88,4);return $colorFill;}
	
	/************ International ***************/

	elseif ($Equipe == 'Allemagne') {$colorFill = array(0,0,0,15);return $colorFill;}
	elseif ($Equipe == 'Belgique') {$colorFill = array(0,90,90,0);return $colorFill;}
	elseif ($Equipe == 'Bosnie') {$colorFill = array(90,70,0,0);return $colorFill;}
	
	elseif ($Equipe == 'Bulgarie') {$colorFill = array(0,0,0,30);return $colorFill;}
	
	elseif ($Equipe == 'Espagne') {$colorFill = array(20,100,100,7);return $colorFill;}
	elseif ($Equipe == 'Finlande') {$colorFill = array(0,0,0,20);return $colorFill;}
	elseif ($Equipe == 'France') {$colorFill = array(100,87,30,16);return $colorFill;}
	elseif ($Equipe == 'Hongrie') {$colorFill = array(0,90,90,0);return $colorFill;}
	elseif ($Equipe == 'Italie') {$colorFill = array(90,75,0,0);return $colorFill;}
	elseif ($Equipe == 'Kazakhstan') {$colorFill = array(10,0,80,0);return $colorFill;}
	
	elseif ($Equipe == 'PaysDeGalles') {$colorFill = array(0,100,100,0);return $colorFill;}
	
	elseif ($Equipe == 'Portugal') {$colorFill = array(30,100,100,0);return $colorFill;}
	elseif ($Equipe == 'Ukraine') {$colorFill = array(8,27,78,0);return $colorFill;}

}

/*----------  Fonction qui attribut la couleur du numéro  ----------*/

function CouleurNum($Equipe,$colorNum){
	if ($Equipe == 'Bulgarie'||$Equipe == 'Sochaux'||$Equipe == 'Pau'||$Equipe == 'Dunkerque'||$Equipe == 'Amiens'||$Equipe == 'Brest'||$Equipe == 'Lyon'||$Equipe == 'Marseille'||$Equipe == 'FcNantes'||$Equipe == 'FcMetz'||$Equipe == 'Belgique'|| $Equipe == 'Allemagne' || $Equipe == 'Finlande' || $Equipe == 'Kazakhstan' || $Equipe == 'Ukraine') {
		$colorNum = array(0,0,0,100);return $colorNum;}
	
	elseif ($Equipe == 'Pays de Galles'||$Equipe == 'AcAjaccio'||$Equipe == 'Valenciennes'||$Equipe == 'Troyes'||$Equipe == 'ParisFc'||$Equipe == 'Niort'||$Equipe == 'LeHavre'||$Equipe == 'Grenoble'||$Equipe == 'Clermont'||$Equipe == 'Chambly'||$Equipe == 'Chateauroux'||$Equipe == 'Caen'||$Equipe == 'Auxerre'||$Equipe == 'AngersSco'||$Equipe == 'Bordeaux'||$Equipe == 'DijonFco'||$Equipe == 'Lille'||$Equipe == 'Lorient'||$Equipe == 'AsMonaco'||$Equipe == 'Montpellier'||$Equipe == 'Nimes'||$Equipe == 'OgcNice'||$Equipe == 'Reims'||$Equipe == 'Rennes'||$Equipe == 'AsSaintEtienne'||$Equipe == 'ParisSg'||$Equipe == 'Toulouse'||$Equipe == 'RcStrasbourg'||$Equipe == 'RcLens' || $Equipe == 'Bosnie' || $Equipe == 'France' || $Equipe == 'Hongrie' || $Equipe == 'Italie') {
		$colorNum = array(0,0,0,0);return $colorNum;}
	
	elseif ($Equipe == 'Nancy') {
		$colorNum = array(0,95,91,0);return $colorNum;}

	elseif ($Equipe == 'Rodez') {
		$colorNum = array(11,0,90,0);return $colorNum;}

	elseif ($Equipe == 'Espagne') {
		$colorNum = array(0,44,92,0);return $colorNum;}

	elseif ($Equipe == 'Portugal') {
		$colorNum = array(0,30,71,0);return $colorNum;}
}

/*=====  End of Script pour attribuer la couleur aux maillot dans le pdf - doit correspondre à "colorSetFoot.css"  ======*/
?>