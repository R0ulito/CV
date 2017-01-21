<!DOCTYPE html>
<html>
<head>
	<?php include ('header.php') ?>

	<title>Portfolio HTML+CSS - Framework Bootstrap</title>
<meta charset="UTF-8">
</head>
<body background="ressources/1.jpg" style="background-repeat: no-repeat; *-background-size: cover">
<?php include("menu.php"); ?>
<script>
	var classe= document.getElementById('accueil');
	classe.setAttribute('class', 'active');
</script>
<!--<div class="row" style="height:100px;"></div>-->
	<div class="row">
		<div class="jumbotron col-xs-offset-2 col-xs-8" id="jumbodex">
			<p>
				<h1 class="text-center"> JULIEN JOVY</h1>
				<h2 class="text-center">Développeur en alternance</h2>
			</p>
		</div>	
	</div>
</body>
</html>