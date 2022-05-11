<?php
require_once('includes/ConnectDB.php');
require_once('includes/functions.php');
?>
    <!doctype html>
    <html>

    <?php
    $pageTitle = "Ajout d'une histoire";
    require_once "includes/head.php";
    ?>
    <body>
    <?php require_once "includes/header.php"; ?>

    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container">
        <br>
        <br>
        <br>
        <br>



        <div class="well col-lg-xl">
            <h2 class="text-center">Ajout d'un Chapitre</h2>
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addChapter.php" method="post">
               <!--  <input type="hidden" name="id"> --> 
                <div>
                    <label class="col-xl-xl control-label">Votre Chapitre /label>
                    <div class="col-xl-xl">
                        <textarea name="IntroductionChapter" class ="form-control" placeholder="Entrez ici le début de votre histoire" required>
                        </textarea>
                    </div> 
                </div>
                <br>
                <br>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Ajouter votre chapitre  </button>
                </div>
            </div>
               
                <div>
            </div>
        </div>
        </form>
    </div>

    </div>

    <?php
    
  /*  if(isset($_POST['title'])){
         echo("c");
        var_dump($_POST);
        $title = ($_POST["title"]);
        $synopsis = ($_POST["Synopsis"]);
        $auteur = ($_POST["auteur"]);
        $_SESSION['IdHistoire'] = $_POST['id']; 
        $story = $BDD ->prepare('insert into Histoire
        (IdHistoire, Titre, Auteur ,Synopsis,HistoireImage)
        values (?, ?, ?, ?,"IMG_2611.jpeg")');
        $story->execute(array($storyID, $title, $auteur, $synopsis,));
        //redirect("index.php");
    }*/

    

?>  

    <?php    require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>

    </body>
</html>