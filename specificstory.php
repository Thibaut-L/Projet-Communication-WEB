<?php require_once "includes/ConnectDB.php"; 
require_once "includes/functions.php"; 
session_start();
$histoires = $BDD->query('select * from Histoire order by IdHistoire desc');
//$chapitres = $BDD->query('select * from Chapitre order by IdChapitre desc');
?> 

<!DOCTYPE html>
<html>
<?php require_once "includes/head.php"; ?>
<?php require_once "includes/header.php"; ?>
<title>Accueil</title>
<body>
  <div id="head">
			<div class="row">
                <?php foreach ($histoires as $histoire){?>
				<h1 class="lead"><?= $histoire['Titre'] ?></h1>
				<p class="tagline"> est ce que ca marche </p>
                <?php}?>
			</div>
	</div>
  <br>
  <div class="container text-center">
		<br> <br>
        <?php foreach ($chapitres as $chapitre){?>
		<h2 class="thin"> Chapitre <?= $chapitre['IdChapitre'] ?></h2>
		<p class="text-muted">
        <?= $chapitre['Contenu'] ?>
		</p>
        <?php}?>
	</div>
  <br>
  
  
        



  
  <?php require_once "includes/footer.php"; ?>
  <?php require_once "includes/scripts.php"?>  
</body>
</html>

