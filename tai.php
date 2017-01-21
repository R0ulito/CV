<!DOCTYPE html>
<html>
<head>
    <title>Cursus TAI</title>
    <?php include ('header.php')?>
</head>
<body>
<?php include ('menu.php')?>

<script>
    var classe = document.getElementById('cursus');
    classe.setAttribute('class', 'active');
</script>

<div class="row">
    <div class="jumbotron col-xs-offset-2 col-xs-8" id="jumbocurs">
        <p class="col-xs-offset-1">
            Cette page contiendra la présentation de mon cursus en temps que technicien, que ce soit en freelance, ou en entreprise.
            <br>
            Il y aura:

            <ul class="col-xs-offset-1">

                <li>Une présentation des tâches effectuées.</li>
                <li>Un carrousel (bootstrap).</li>
                <li>un lien vers mon rapport d'activité présenté lors de l'examen au Titre de Technicien.</li>

            </ul>
        </p>
    </div>
</div>



</body>
</html>