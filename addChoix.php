<?php
require_once('includes/ConnectDB.php');
require_once('includes/functions.php');
ob_start();
?>


<!doctype html>
<html lang = "fr">


<body class="fondimage">
<?php require_once "includes/header.php"; ?>

<?php
$pageTitle = "Ajout d'une histoire";
require_once "includes/head.php";


$Story = $_SESSION['Histoire'];
var_dump($_SESSION);
$getId = $BDD->prepare('SELECT IdHistoire FROM Histoire WHERE Titre=?');
$getId->execute(array($Story));
$getIdStory = ($getId->fetchColumn());
echo($getIdStory);


$stmt = $BDD->query('SELECT * FROM Chapitre WHERE IdChapitre=(SELECT MAX(IdChapitre) FROM Chapitre)');
$lastChapterId = ($stmt->fetchColumn());
echo($lastChapterId);

$getFirstChapterId = $BDD->prepare('SELECT IdPremierChapitre FROM Lien WHERE IdHistoire=? ');
$getFirstChapterId->execute(array($getIdStory));
$firstChapterId = ($getFirstChapterId->fetchColumn());
echo($firstChapterId);
$idDifference = $lastChapterId - $firstChapterId;
echo($idDifference);
?>
<br>
<br>
<br>
<br>
<br>


<div class="container">
    <br>
    <div class="well col-lg-xl" id="blackground">
        <h2 class="text-center">Ajout d'un lien </h2>
        <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addChoix.php" method="post">
            <div class="dropdown">
                <select Name='ddlSelectParaEntrant'>
                    <option value="">--- Paragraphe Entrant ---</option>

                    <?php
                    for ($x =  1; $x <= $idDifference +1 ; $x++) {
                        $storedValue= ($firstChapterId+$x)-1;
                        echo '<option value="' . $storedValue . '">' . $x . '</option>';
                    }
                    ?>
                </select>
                <br>
                <div class="col-sm-sm">
                    <textarea name="Chapter" class="form-control" placeholder="Entrez le contenu de votre choix ici" required></textarea>
                </div>

                <select Name='ddlSelectParaSortant'>
                    <option value="">--- Paragraphe Sortant ---</option>

                    <?php
                    for ($y = 1; $y <= $idDifference+1; $y++) {
                        $storedValueSortant = ($firstChapterId+$y)-1;
                        echo '<option value="' . $storedValueSortant . '">' . $y . '</option>';
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-3">
                    <button type="submit" class="btn btn-default btn-primary"><span
                                class="glyphicon glyphicon-save"></span> Ajouter votre choix
                    </button>
                </div>
            </div>
        </form>
        <div><a href="index.php"> Les choix sont finis et définitifs </a></div>
    </div>

    <?php
    $chapEntrant = $_POST['ddlSelectParaEntrant'];
    $chapSortant = $_POST['ddlSelectParaSortant'];
    $contenuChoix = $_POST['Chapter'];
    $storeChoix = $BDD->prepare('INSERT INTO Choix(IdChoix,IdChapitre,idParaSuivant,TextChoix) values(?,?,?,?)');
    $storeChoix->execute(array($idChoix, $chapEntrant, $chapSortant, $contenuChoix));
    ob_end_flush();
    ?>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>
</body>

</html>