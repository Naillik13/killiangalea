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

	<section>
		<div>
			<?php
			include("inc/bloc/bloc_details.php");
			include("inc/bloc/bloc_portfolio.php");
			 ?>
		</div>
		<div class="w-40">
			<div id="bloc-competences" class="bloc-actif competences">
				<div>
					<div>
						<img class="picto-princ"  src="img/picto-competences.png" />
						<h2>Compétences</h2>
					</div>
					<div class="text-left">
						<h3>OUTILS</h3>
						<div class="bloc-comp-left">
							<h4>Design</h4>
							<div class="comp-ps">
								<span>Photoshop</span>
								<div class="comp">
									<div class="bloc-nb">80</div>
								</div>
							</div>
							<div class="comp-il">
								<span>Illustrator</span>
								<div class="comp">
									<div class="bloc-nb">70</div>
								</div>
							</div>
							<div class="comp-id">
								<span>InDesign</span>
								<div class="comp">
									<div class="bloc-nb">60</div>
								</div>
							</div>
						</div>
						<div class="bloc-comp-right">
							<h4>Développemnt</h4>
							<div class="comp-hc">
								<span>HTML 5 / CSS 3</span>
								<div class="comp">
									<div class="bloc-nb">90</div>
								</div>
							</div>
							<div class="comp-jp">
								<span>JQuery / PHP</span>
								<div class="comp">
									<div class="bloc-nb">70</div>
								</div>
							</div>
							<div class="comp-wp">
								<span>Wordpress</span>
								<div class="comp">
									<div class="bloc-nb">80</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-left">
						<h3>AUTRES</h3>
						<div class="bloc-comp-left">
							<div class="comp-ps">
								<span>UX Design</span>
								<div class="comp">
									<div class="bloc-nb">80</div>
								</div>
							</div>
							<div class="comp-il">
								<span>Anglais</span>
								<div class="comp">
									<div class="bloc-nb">70</div>
								</div>
							</div>
							<div class="comp-pr">
								<span>Professionalisme</span>
								<div class="comp">
									<div class="bloc-nb">100</div>
								</div>
							</div>
						</div>
						<div class="bloc-comp-right">
							<div class="comp-id">
								<span>Community Management</span>
								<div class="comp">
									<div class="bloc-nb">60</div>
								</div>
							</div>
							<div class="comp-il">
								<span>Management de projet</span>
								<div class="comp">
									<div class="bloc-nb">70</div>
								</div>
							</div>
							<div class="comp-ps">
								<span>Écoute</span>
								<div class="comp">
									<div class="bloc-nb">80</div>
								</div>
							</div>
						</div>
					</div>
					<button id="cv">MON CV</button>
				</div>


			</div>
		</div>
		<div>
			<?php
			include("inc/bloc/bloc_contact.php");
			include("inc/bloc/bloc_parcours.php");
			 ?>
		</div>
	</section>
</body>
</html>
