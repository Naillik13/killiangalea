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
			include("inc/bloc/bloc_contact.php");
			include("inc/bloc/bloc_portfolio.php");
			 ?>
		</div>
		<div class="w-40">
			<div id="bloc-details" class="bloc-actif">
        <div>
          <div>
            <img class="picto-princ"  src="img/picto-details.png" />
  					<h2>Détails</h2>
          </div>
					<div class="text-left">
						<h3>QUI SUIS-JE ?</h3>
            <img src="img/logo-dix.png" />
						<p>Je suis actuellement étudiant à l’école DIX (Digital-Innovation-eXperience).
Mais dans le cadre de l’école je suis déjà dans la capacité de réaliser vos projets si vous en avez.</p>
					</div>
					<div id="services" class="text-left">
            <h3>MES SERVICES</h3>
            <div class="w-50">
              <img src="img/picto-ux.png" />
              <h4>UX Designer</h4>
              <p>L’UX Design intervient au tout début de la conception de sites web, il consiste à analyser les besoins de l’utilisateur de lui apporter des solutions à ses problèmes et ses attentes.</p>
            </div>
            <div class="w-50 float-r">
              <img src="img/picto-wbd.png" />
              <h4>Web Designer</h4>
              <p>Besoin d'un site ? Je me charge de réaliser votre maquette web en fonction de vos besoins. En tant que développeur je prend en compte le responsive design dès la réalisation de votre maquette !</p>
            </div>
            <div>
              <img src="img/picto-dev.png" />
              <h4>Développeur front-end & back-end</h4>
              <p>Intégration d’une maquette web ? conception d’un site ? De l’aspect visuel, à l’échange avec les bases de données, en passant par le responsive design ainsi que le référencement, rien ne m’échappe.</p>
            </div>
					</div>

				</div>

			</div>
		</div>
		<div>
			<?php
			include("inc/bloc/bloc_competences.php");
			include("inc/bloc/bloc_parcours.php");
			 ?>
		</div>
	</section>
</body>
</html>
