<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html"; charset=utf-8 />
	<title>Développeur Fullstack - Killian Galea</title>
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
			include("inc/bloc/bloc_contact.php");
			 ?>
		</div>
		<div class="w-40">
			<div id="bloc-portfolio" class="bloc-actif">
				<div>
					<div>
						<img class="picto-princ"  class="picto-princ"  src="img/picto-portfolio.png" />
						<h2>Portfolio</h2>
					</div>
					<div>
						<figure>
							<div>
								<img src="img/miniature-avocat.jpg" />
								<a href="#"></a>
								<span class="glyphicon glyphicon-fullscreen"></span>
							</div>
							<figcaption><h4>SITE ONEPAGE</h4><span>Pour Maitre Karine Rousselot-Weber</span></figcaption>
						</figure>

						<figure>
							<div>
								<img src="img/miniature-radioactive.jpg" />
								<a href="#"></a>
								<span class="glyphicon glyphicon-picture"></span>
							</div>
							<figcaption><h4>MONTAGE PHOTO</h4><span>Entrainement</span></figcaption>
						</figure>

						<figure>
							<div>
								<img src="img/miniature-cbio.jpg" />
								<a href="#"></a>
								<span class="glyphicon glyphicon-picture"></span>
							</div>
							<figcaption><h4>MAQUETTE GRAPHIQUE</h4><span>Pour la refonte du site CBIO - Projet fictif</span></figcaption>
						</figure>

						<figure>
							<div>
								<img src="img/miniature-dt.jpg" />
								<a href="#"></a>
								<span class="glyphicon glyphicon-picture"></span>
							</div>
							<figcaption><h4>MAQUETTE GRAPHIQUE</h4><span>Pour la refonte du site Douceur Thé - Projet non mené à terme</span></figcaption>
						</figure>
						<figure>
							<div>
								<img src="img/miniature-dix.jpg" />
								<a href="#"></a>
								<span class="glyphicon glyphicon-file"></span>
							</div>
							<figcaption><h4>CRÉATION PRINT</h4><span>Pour les portes ouvertes de l'école DIX - Entrainement</span></figcaption>
						</figure>
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
