<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html"; charset=utf-8 />
	<title>Graphic Designer - Killian Galea</title>
	<meta charset="utf-8" />
	<meta keyword="" />
	<meta description="" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
</head>
<body>

	<section id="#section">
		<div>
			<?php
			include("inc/bloc/bloc_details.php");
			include("inc/bloc/bloc_portfolio.php");
			 ?>
		</div>
		<div class="w-40">
			<div id="bloc-parcours" class="bloc-actif">
				<div>
					<div>
						<img class="picto-princ" src="img/picto-parcours.png" />
						<h2>Parcours</h2>
					</div>
					<div class="parcours text-left parcours-last">
						<span class="parcours-date">2016 - AUJOURD'HUI</span>
						<h4>ÉTUDIANT EN DIGITAL</h4>
						<span class="parcours-lieu">DIX - École supérieure du numérique</span>
						<p>J’y ai étudié l’UX Design, le Management de projets, le WebDesign, ainsi que le Développement.</p>
					</div>
					<div class="parcours text-left parcours-first">
						<span class="parcours-date">2016 - AUJOURD'HUI</span>
						<h4>ÉTUDIANT EN DIGITAL</h4>
						<span class="parcours-lieu">DIX - École supérieure du numérique</span>
						<p>J’y ai étudié l’UX Design, le Management de projets, le WebDesign, ainsi que le Développement.</p>
					</div>
					<button id="cv">MON CV</button>
				</div>
			</div>
		</div>
		<div>
			<?php
			include("inc/bloc/bloc_competences.php");
			include("inc/bloc/bloc_contact.php");
			 ?>
		</div>
	</section>
</body>
</html>
