<?php
/*========================================
=            Construction CSV            =
========================================*/
$lignes[]=array('groupe','equipeDom','scoreDom','equipeExt','scoreExt','date','tv');	
/*----------  Equipe Dom  ----------*/
for ($i=1; $i<count(file('datas/resultats.csv')); $i++) {  
	$lignes[] = array($_GET['groupeR'.$i],$_GET['equipeDom'.$i],$_GET['scoreDom'.$i],$_GET['equipeExt'.$i],$_GET['scoreExt'.$i],$_GET['date'.$i],$_GET['tele'.$i]);
}
/*=====  End of Construction CSV  ======*/
?>