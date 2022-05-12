<?php
require_once('includes/ConnectDB.php');
require_once('includes/functions.php');
ob_start(); 
?>
    <!doctype html>
    <html>
    <title>Ajout d'un chapitre</title>

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


    <div class="container" >
        <br>
        <div class="well col-lg-xl" id="blackground">
            <h2 class="text-center">Ajout d'un Chapitre</h2>
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addChapter.php" method="post">
                <div>
                    <label class="col-xl-xl control-label">Votre Chapitre </label>
                    <div class="col-xl-xl">
                        <textarea name="Chapter" class ="form-control" placeholder="Entrez ici le début de votre histoire" required>
                        </textarea>
                    </div> 
                </div>
                <br>
                <br>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-3">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Ajouter votre chapitre  </button>
                </div>
            </div>
            <a href="addChoix.php"> Terminer l'ajout des chapitres </a>
               
        </div>
         </form> 
    </div>

    <?php
    
    if(isset($_POST['Chapter'])){
        var_dump($_POST);
        $contenu = $_POST['Chapter']; 
        $chapter = $BDD ->prepare('insert into Chapitre
        (IdChapitre,Contenu) values (?,?');
        $chapter = $BDD -> execute(array($chapID,$contenu)); 
        ob_end_flush(); 
    }

    

?>  

    <?php    require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>

    </body>
</html>