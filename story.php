<?php require_once "includes/ConnectDB.php"; ?>
<?php
require_once "includes/functions.php";
session_start();

$histoires = $BDD->query('select * from Histoire order by IdHistoire desc');
?>

<!doctype html>
<html>
<title>Histoires</title>

<?php 
require_once "includes/head.php";
require_once "includes/header.php"; ?>

<body class="fondimage" >

<div class="container text-center " id="blackground">
	<br> <br>
    <br> <br>
	<h2 class="thin">Vous trouverez ci dessous une liste non exhaustive de tous les chefs d'oeuvres du moment.</h2>
	<p class="text-muted">
		Régalez vous!<br> 
		Laissez vos retours à l'adresse suivant : thibautEstUnBG@ksos.wtf <br>
        <?php  if (isUserConnected()){ ?>
            Créez dès maintenant vos propres histoires <a href="AddStory.php">ici</a>!
        <?php } ?>
        
	</p>
    <br><br>
</div>


<div class="container d-flex flex-column align-items-center row " id="blackground"> 
<?php foreach ($histoires as $histoire) { ?>
    <div class="col-sm-4">
      <div class="card border-secondary mb-3" style="width: 18rem">
      <img src="images/<?= $histoire['HistoireImage'] ?>" class="card-img-top image-rognage" alt="" >
        <div class="card-body">
          <h5 class="card-title text-center"> <?= $histoire['Titre'] ?> </h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Auteur : <?= $histoire['Auteur'] ?></li>
          <li class="list-group-item">Synospis :  <?= $histoire['Synopsis'] ?></li>
        </ul>
        <div class="card-body text-center">
          <a href="story.php" class="card-link ">Commencer l'histoire</a>
        </div>
      </div>
    </div>
        <?php } ?>
    
  </div>


    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>
</body>
</html>