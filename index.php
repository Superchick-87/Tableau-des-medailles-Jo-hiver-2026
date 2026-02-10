<?php
// --- CONFIGURATION ---
$separateur = ";"; // Modifiez ici : "," ou ";"
// ----------------------

include(dirname(__FILE__) . '/includes/ddc.php');
include(dirname(__FILE__) . '/includes/singPluriel.php');

/**
 * Fonction pour lire un fichier csv avec délimiteur paramétrable
 */
function read($csv, $delim)
{
	$line = array();
	if (($file = fopen($csv, 'r')) !== FALSE) {
		while (($data = fgetcsv($file, 1024, $delim)) !== FALSE) {
			$line[] = $data;
		}
		fclose($file);
	}
	return $line;
}

/**
 * Fonction pour renommer les pays selon vos besoins
 */
function formaterNomPays($nom)
{
	$remplacements = [
		'Tchéquie' => 'Rép. Tchèque',
		'Corée'    => 'Corée du Sud'
	];

	if (array_key_exists($nom, $remplacements)) {
		return $remplacements[$nom];
	}
	return $nom;
}

/**
 * Fonction pour mettre une ligne en valeur
 */
function style($pays)
{
	if ($pays == 'France') {
		return "background-color: #62bdff; font-weight: bold;";
	}
	return "";
}

// Chargement des données
$csvPath = dirname(__FILE__) . '/datas/Resultats.csv';
$csvr = read($csvPath, $separateur);
?>
<script type="text/javascript">
	setTimeout(() => {
		window.location.reload();
	}, 10 * 60 * 1000);
</script>
<!DOCTYPE html>
<html lang="fr">

<head>
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<meta charset="utf-8">
	<title>Sudouest.fr - JO - Classements des médailles</title>
</head>

<body style="background-color: white; margin:0; padding:0;">

	<section class="margincenter">
		<!-- <img class="visu" src="css/images/visu.png" alt="JO Visuel"> -->
		<h2>Le tableau des médailles</h2>
		<table class="table">
			<thead>
				<tr>
					<th colspan="3"></th>
					<th class="medailles fdor"></th>
					<th class="medailles fdargent"></th>
					<th class="medailles fdbronze"></th>
					<th class="date fdvert">Tot.</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$totalLignes = count($csvr);
				$dernierRang = null; // Variable pour stocker le rang de la ligne précédente

				for ($i = 1; $i < $totalLignes; $i++) {
					if (isset($csvr[$i][1])) {

						// 1. Gestion du nom et de l'image
						$nomAffiche = formaterNomPays($csvr[$i][1]);

						// 2. Gestion du rang (doublons)
						$rangActuel = $csvr[$i][0];
						$rangAffiche = ($rangActuel === $dernierRang) ? "-" : $rangActuel;
						$dernierRang = $rangActuel; // On met à jour pour la prochaine itération

						echo '<tr style="' . style($nomAffiche) . '">
                                <td><img class="DrapeauxGrands" src="css/images/' . ddc($nomAffiche) . '.png" alt=" "></td>
                                <td class="centre">' . $rangAffiche . '</td>
                                <td class="TableauEquipe">' . $nomAffiche . '</td>
                                <td class="centre">' . ($csvr[$i][2] ?? '0') . '</td>
                                <td class="centre">' . ($csvr[$i][3] ?? '0') . '</td>
                                <td class="centre">' . ($csvr[$i][4] ?? '0') . '</td>
                                <td class="centre">' . ($csvr[$i][5] ?? '0') . '</td>
                            </tr>';
					}
				}
				?>
			</tbody>
		</table>
		<footer></footer>
	</section>

</body>

</html>