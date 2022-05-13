<?php
require_once('includes/ConnectDB.php');
require_once('includes/functions.php');
?>

<?php

?>

<!doctype html>
<html lang = "fr">

<?php
$pageTitle = "Ajout d'une histoire";
require_once "includes/head.php";
?>
<body class="fondimage">
<?php require_once "includes/header.php"; ?>

<br>
<br>
<br>
<br>
<br>


<div class="container">
    <br>
    <div class="well col-lg-xl" id="blackground">
        <h2 class="text-center">Ajout d'un Chapitre</h2>
        <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addChapter.php" method="post">
            <div>
                <label class="col-xl-xl control-label">Votre Chapitre </label>
                <div class="col-xl-xl">
                    <textarea name="Chapter" class="form-control" placeholder="Entrez votre chapitre ici"
                              required></textarea>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Lose" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Ceci est un chapitre de défaite </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Win" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Ceci est un chapitre de victoire </label>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-3">
                    <button type="submit" class="btn btn-default btn-primary"><span
                                class="glyphicon glyphicon-save"></span> Ajouter votre chapitre
                    </button>
                </div>
            </div>
            <a href="addChoix.php"> Terminer l'ajout des chapitres </a>

    </div>
    </form>
</div>

<?php


if (isset($_POST['Chapter'])) {
    var_dump($_POST);
    $chapVictoire =$_POST['Win'];
    $chapDefaite = $_POST['Lose'];
    $contenu = $_POST['Chapter'];
    $chapter = $BDD->prepare('insert into Chapitre
        (IdChapitre,Contenu,ChapDéfaite, chapVictoire ) values (?,?,?,?)');
    $chapter->execute(array($chapID, $contenu,$chapDefaite,$chapVictoire));
}
?>

<?php require_once "includes/footer.php"; ?>
<?php require_once "includes/scripts.php"; ?>

</body>
</html>