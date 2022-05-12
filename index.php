<?php require_once "includes/functions.php"; 

?> 

<!DOCTYPE html>
<html>
<?php require_once "includes/head.php"; ?>
<?php require_once "includes/header.php"; ?>

<body>
  <div id="head">
			<div class="row">
				<h1 class="lead">Les histoires dont vous êtes la protagoniste</h1>
				<p class="tagline">Soyez prêts à rentrer dans l'univers extraordinaire des histoires à confectionner soit même. </p>
			</div>
	</div>
  <br>
  <div class="container text-center">
		<br> <br>
		<h2 class="thin">Nous vous proposons de passer un excellent moment en découvrant "Les histoires dont vous êtes la protagoniste".</h2>
		<p class="text-muted">
			Vous pouvez lire, créer ou même modifier vos propres histoires!<br> 
			N'attendez plus et inscrivez vous juste ici pour vivre une experience hors du commun.
		</p>
	</div>
  <br>
  
  <table class="table table-sm">
        <thead>
          <tr>
          <?php  if (isUserConnected()){ ?>
            <th><div id="head">
			<div class="row col-6">
				<a href="AddStory.php"><h1 class="lead"> Créer votre histoire</h1></a>
				<p class="tagline">Liberez votre créativité, nous sommes ici pour la recueillir. </p>
			</div>
	</div></th>
        <?php } ?>
            
            <th><div id="head">
			<div class="row col-6">
				<a href="story.php"> <h1 class="lead">Voir toutes les histoires</h1></a>
				<p class="tagline">Soyez prêts à rentrer dans l'univers extraordinaire des histoires à confectionner soit même. </p>
			</div></th>
          </tr>
        </thead>
</table>
        



  
  <?php require_once "includes/footer.php"; ?>
  <?php require_once "includes/scripts.php"?>  
</body>
</html>