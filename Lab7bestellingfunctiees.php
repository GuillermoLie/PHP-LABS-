<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset=utf-8>
	<meta name=description content="beschrijving van de webpagina">
	<meta name=keywords content="trefwoorden, gescheiden, door, komma's">
	<meta name="author" content="Guillermo">
	<link rel="stylesheet" href="Home.css">
	<title> php lab07 </title>
</head>
<body>
	<?php
		function beschikbaar($merk, $os)
		{
			// deze funtie heeft twee input parameters
			// $merk verwijzt naar de erk-hash-array
			// $os verwijzt naar de os-hash-array
			// deze functie geeft de beschikbaarheid van de laptop met os terug
				$beschikbaar = array
				(
					"Toshiba" => array
					(
						"xp" => true, "vista" => false, "linux" => true
					),
					"Acer" => array
					(
						"xp" => true, "vista" => true, "linux" => true
					),
					"Hp" => array
					(
						"xp" => true, "vista" => false, "linux" => false
					)
				);
				return($beschikbaar[$merk][$os]);
		}
		
	?>
</body>
</html>