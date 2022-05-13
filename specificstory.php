<?php require_once "includes/ConnectDB.php"; 
require_once "includes/functions.php"; 
session_start();
?>
<?php
$getIdHistoire = $_GET['idHistoire'];
$getChapId = $_GET['IdChapitre'];
$req = $BDD -> prepare('SELECT Titre FROM Histoire WHERE idHistoire=?');
$req -> execute(array($getIdHistoire));
$titreHistoire = $req -> fetchColumn();

$getContenu = $BDD -> prepare('SELECT Contenu FROM Chapitre WHERE IdChapitre=?');
$getContenu -> execute(array($getChapId));
$contenu = ($getContenu -> fetchColumn());

$getIdChoix = $BDD -> prepare('SELECT * FROM Choix WHERE IdChapitre =?');
$getIdChoix -> execute(array($getChapId));
$idChoix = ($getIdChoix -> fetchAll());



$getIdChap = $BDD -> prepare('SELECT IdParaSuivant FROM Choix WHERE IdChapitre =?');
$getIdChap -> execute(array($getChapId));
$idChapSuivant = ($getIdChap-> fetchAll());

$getTextChoix = $BDD -> prepare('SELECT TextChoix FROM Choix WHERE IdChapitre =?');
$getTextChoix -> execute(array($getChapId));
$TextChoix = ($getTextChoix -> fetchAll());

$getVictoire = $BDD -> prepare('SELECT chapVictoire FROM Chapitre WHERE IdChapitre=?');
$getVictoire -> execute(array($getChapId));
$Victoire = ($getVictoire -> fetchColumn());

$getDefaite = $BDD -> prepare('SELECT ChapDéfaite FROM Chapitre WHERE IdChapitre=?');
$getDefaite -> execute(array($getChapId));
$Defaite = ($getDefaite -> fetchColumn());





?>
<?php





?>
<!DOCTYPE html>
<html>

<?php require_once "includes/head.php"; ?>


<title>Accueill</title>
<body class="fondimage">
<?php require_once "includes/header.php"; ?>

<div class="container">
    <br>
    <div class="well col-xl-xl" id="blackground">
        <h2 class="text-center"><?php echo ($titreHistoire); ?> </h2>

            <br>
        <p> <?php echo $contenu ?>  </small></p>
            <br>

                <br>
        <?php
        foreach ($idChoix as $aIdChoix)
        {
            ?>
            <a href="specificstory.php?idHistoire=<?php  echo $getIdHistoire; ?>&IdChapitre=<?php echo $aIdChoix['IdParaSuivant'];  ?>" > <?php echo $aIdChoix['TextChoix']; ?> </a>

            <br/>
            <?php
        }
        ?>
        <?php if($Defaite == 1 ){ ?>
            <h2><a href="story.php" >Tu as perdu pas de chance, clique ici pour revenir à l'accueil </a> </h2>

        <?php } ?>
        <?php if($Victoire == 1 ){ ?>
            <h2><a href="story.php" >Tu as gagné bravo à toi jeune aventurier </a> </h2>

        <?php } ?>


    </div>
</div>




<?php

?>


  <?php require_once "includes/footer.php"; ?>
  <?php require_once "includes/scripts.php"?>  
</body>
</html>