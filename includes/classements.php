<?php
/*========================================
=            Construction CSV            =
========================================*/
$lignesC[]=array('groupe','rang','equipe','points');	
/*----------  Equipe Dom  ----------*/
for ($a=1; $a<count(file('datas/classements.csv')); $a++) {  
	$lignesC[] = array($_GET['groupeC'.$a],$_GET['rang'.$a],$_GET['equipe'.$a],$_GET['points'.$a]);
}
/*=====  End of Construction CSV  ======*/
?>