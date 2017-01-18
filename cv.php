<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.test.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<title>CV</title>
</head>
<body background="ressources/bg.jpg" style="" id="bodycv">
<?php include("menu.php") ?>

<div class="row" style="height: 50px">
	<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 text-center" >
		<p id="indic">Certaines barres sont cliquables, et mènent à des réalisations.</p>
	</div>

</div>


<div id="cv" class="jumbotron col-xs-offset-1 col-xs-10 thumbnail">
	<div class="row">
		<div class="col-xs-4">
			<p>
			Julien Jovy <br>
			Développeur en alternance <br>
			Permis B <br>

			</p>

		</div>

		<div >
			<p class="col-xs-offset-4 col-xs-4">
				0662478251 <br>
				Github: <a target="_blank" href="https://github.com/R0ulito">R0ulito</a>
				<br>
				Linkedin: <a target="_blank" href="https://fr.linkedin.com/in/julien-jovy-502455121">Julien Jovy</a>
			</p>


		</div>
		
	</div>


	<div class="row">
		<div class"col-xs-12">
			<h1 id="gt" class="text-center">Compétences</h1>
		</div>
		<div class="row">
		<div class="col-xs-12">
			<h2 id="pt" class="text-center">Développement</h2>
		</div>
		</div>


		<div class="row">
			<div class="col-xs-4">

			<h4 class="text-center">Langages <br class="hidden-md hidden-lg">  Web</h4>

			HTML
				<div onclick="location.href='http://julienjovy.free.fr/greta/tp/web';" style="cursor: help;" class="progress">
		  			<div class="progress-bar progress-bar-success progress-bar-striped " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> 90%
		  			</div>
				</div>

				CSS
				<div onclick="location.href='http://julienjovy.free.fr/greta/tp/web';" style="cursor: help;" class="progress">
		  			<div class="progress-bar progress-bar-success progress-bar-striped " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> 90%
		  			</div>
				</div>

				PHP
				<div class="progress">
		  			<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> 80%
		  			</div>
				</div>

				<h4 class="text-center hidden-xs">Base de données</h4>
				<h4 class="text-center hidden-sm hidden-md hidden-lg">BDD</h4>

				MySQL
				<div class="progress">
		  			<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> 65%
		  			</div>
				</div>
			</div>

			<div class="col-xs-4">

				<h4 class="text-center">Langages de <br class="hidden-md hidden-lg"> programmation</h4>

				Scripts
				<div class="progress">
					<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%"> 65%
					</div>
				</div>

				Javascript
				<div class="progress">
					<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> 50%
					</div>
				</div>

				Python
				<div onclick="location.href='python';" style="cursor: help;" class="progress">
					<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> 50%
					</div>
				</div>

				<h4 class="text-center">Bibliothèques</h4>

				JQuery
				<div class="progress">
					<div class="progress-bar progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"> 60%
					</div>
				</div>




			</div>
			<div class="col-xs-4">
				<h4 class="text-center"> Frameworks <br class="hidden-md hidden-lg">/ CMS</h4>

				Bootstrap
				<div onclick="location.href='http://prima.acies.free.fr'" style="cursor: help;" class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"> 75%
					</div>
				</div>

				Symfony
				<div class="progress active">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> In progress
					</div>
				</div>

				Wordpress
				<div class="progress active">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> In progress
					</div>
				</div>

				<h4 class="text-center hidden-xs hidden-sm">Logiciels de versionning</h4>
				<h4 class="text-center hidden-md hidden-lg">VCS</h4>

				Git
				<div onclick="location.href='https://github.com/R0ulito';" style="cursor: help;" class="progress">
					<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> 70%
					</div>
				</div>

			</div>
		</div>
		<div class="row">
		<div class="col-xs-12">
			<h2 id="pt" class="text-center">Réseau</h2>
		</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h4 class="text-center">Services</h4>

				Serveur DNS
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> 80%
					</div>
				</div>

				Serveur Asterisk*
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width : 75%"> 75%
					</div>
				</div>

				Serveur de messagerie
				<div class="progress">
		  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> 70%
		  			</div>
				</div>

			</div>

			<div class="col-xs-6">
				<h4 class="text-center">Administration</h4>

				Calculs d'adressage
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width : 95%">95%
					</div>
				</div>

				Matériels Cisco
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width : 85%">85%
					</div>
				</div>
				Active directory
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width : 75%">75%
					</div>
				</div>
			</div>

		</div>

	</div>


</div>

</body>
</html>