<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Où est-ce qu’on bouffe à midi ?</title>
	<meta name="description" content="Où est-ce qu’on bouffe à midi ?">
	<meta name="keywords" content="Où est-ce qu’on bouffe à midi ?">
	<link rel="shortcut icon" type="image/x-icon" href="favico.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image:url(/img/bg_<?php echo rand(1,26); ?>.jpg), url(/new_cv/img/trame.png);" onClick="window.location.reload( true );">
<div id="wrapper">
	<div id="cv">
		<h1>Où est-ce qu’on bouffe à midi ?</h1>
		<?php
		$input = array(
						"la boulangerie de la piscine",
						"la boulangerie à côté du Lidl",
						"la boulangerie l'agenaise",
						"Au vieux village",
						"Osaka",
						"L'Amandine",
						"La Traviata",
						"Le 6",
						"Bistronome",
						"Ty Mat'Lot",
						"Téo Japon",
						"Sindu",
						"La maison de la frite",
						"Monsieur Jeannot",
						"L'étable",
						"Pronto Al Gusto",
						"Ichiban",
						"Monsieur Jeannot",
						"La Palmeraie",
						"Burger Park",
						"King Diner",
						"Bistrot de la Garenne",
						"La demi-lune",
						"Jules & John",
						"Le Quarts"
						);
		$rand_keys = array_rand($input, 2);
		?>
		<p>Ben on a qu’à aller chez <strong><?php echo $input[$rand_keys[0]];?></strong>,<br /> Ou au pire chez <strong><?php echo $input[$rand_keys[1]];?></strong>.</p>
	</div>
</div><!-- fin wrapper -->
</body>
</html>
