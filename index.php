<script type="text/javascript">
	setTimeout(() => {
		window.location.reload();
	}, 10 * 60 * 1000); // 10 minutes * 60 secondes * 1000 ms
</script>
<!DOCTYPE html>
<html>

<head>
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="utf-8">
	<title>Sudouest.fr - JO - Classements des médailles</title>
</head>

<body style="background-color: white;margin:0;padding:0;">
	<?php
	include(dirname(__FILE__) . '/includes/ddc.php');
	include(dirname(__FILE__) . '/includes/singPluriel.php');
	// Fonction pour lire un fichier csv
	function read($csv)
	{
		$file = fopen($csv, 'r');
		while (!feof($file)) {
			$line[] = fgetcsv($file, 1024);
		}
		fclose($file);
		return $line;
	}
	// Fin fonction pour lire un fichier csv
	// Fonction pour calculer la somme d'une colonne d'un fichier csv
	function sum($csv, $a)
	{
		$file = fopen($csv, 'r');
		$sum = array();
		while (!feof($file)) {
			$csv = fgetcsv($file, 1024);
			array_push($sum, $csv[$a]);
		}
		return array_sum($sum);
	}
	// Fin de Fonction pour calculer la somme d'une colonne d'un fichier csv
	// Fonction mettre une ligne en valeur	
	$b = '';
	function style($a, $b)
	{
		if ($a == 'France') {
			$b = "background-color: #62bdff; font-weight: bold;";
			return $b;
		}
	}
	// Fin Fonction mettre une ligne en valeur

	$csv = dirname(__FILE__) . '/datas/Resultats.csv';
	$csvr = read($csv);


	// echo '<br>'.sum($csv,3).'<br>';

	echo '
	<section  class="margincenter">
		<img class="visu" src="css/images/visu.png" alt=" ">
		<h2>Le tableau des médailles</h2>
		<table class="table">
			<thead>
				<tr>
					<th class=""colspan="3"></th>  
					<th class="medailles fdor"></th>
					<th class="medailles fdargent"></th>
					<th class="medailles fdbronze"></th> 
					<th class="date fdvert">Tot.</th>  
				</tr>
			</thead>
			<tbody>';

	// for ($i=1; $i<16; $i++) { 
	for ($i = 1; $i < count(file('datas/Resultats.csv')); $i++) {
		// foreach ($csvr as $key => $csvrgo) {

		echo '<tr style="' . style($csvr[$i][1], $b) . '">
				 		<td><img class="DrapeauxGrands" src="css/images/' . ddc($csvr[$i][1]) . '.png" alt=" "></td>
				 		<td colspan="" class=" centre">' . $csvr[$i][0] . '</td>
				 		<td colspan="" class="TableauEquipe">' . $csvr[$i][1] . '</td>
				 		<td colspan="" class="centre">' . $csvr[$i][2] . '</td>
				 		<td colspan="" class="centre">' . $csvr[$i][3] . '</td>
				 		<td colspan="" class="centre">' . $csvr[$i][4] . '</td>
				 		<td colspan="" class="centre">' . $csvr[$i][5] . '</td>
				</tr>';
	};
	echo '</tbody>
	</table>
	<footer></footer>
	</section>';
	?>
</body>

</html>