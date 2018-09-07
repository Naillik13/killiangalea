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
	<div class="black_wall">
		<div>
			<div class="msg_error">
				<span class="cross">X</span>
				<p class="msg">

				</p>
			</div>
		</div>
	</div>
	<section id="#section">
		<div>
			<?php
			include("inc/bloc/bloc_details.php");
			include("inc/bloc/bloc_portfolio.php");
			 ?>
		</div>
		<div class="w-40">
			<div id="bloc-contact" class="bloc-actif">
				<div>
					<div>
						<img class="picto-princ"  class="picto-princ"  src="img/picto-contact.png" />
						<h2>Contact</h2>
					</div>
					<div class="RS">
						<h3>RÉSEAUX SOCIAUX</h3>
						<div>
							<a class="twitter" href="#"></a>
							<a class="facebook" href="#"></a>
							<a class="linkedin" href="#"></a>
						</div>
					</div>
					<form type="post" action="formulaire.php">
						<h3>VOTRE MESSAGE</h3>
						<div id="input-name">
							<span>NOM *</span><br />
							<input type="text" name="name" placeholder="DOE" class="input"/>
						</div>
						<div id="input-email">
							<span>EMAIL *</span><br />
							<input type="text" name="email" placeholder="jonh.doe@gmail.com"  class="input"/>
						</div>
						<div id="textarea">
							<span>MESSAGE *</span><br />
							<textarea name="message" placeholder="Votre message"  class="input"></textarea>
						</div>
						<input id="send" type="submit" value="ENVOYER" />
					</form>
					<div id="phone">
						<h3>APPELEZ-MOI</h3>
						<span class="">06 28 39 06 98</span>
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
	<?php
		include("inc/js_scripts.php");
	 ?>
</body>
</html>
