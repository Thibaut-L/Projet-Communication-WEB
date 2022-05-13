<?php
require_once('includes/ConnectDB.php');
require_once('includes/functions.php');
ob_start();
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
    <br><br><br><br><br><br>
    <div class="container" >



        <div class="well col-lg-xl" id="blackground">
            <h2 class="text-center">Ajout d'une histoire</h2>
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="AddStory.php" method="post">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Le titre de votre histoire</label>
                    <div class="col-sm-6">
                        <input type="text" name="title" class="form-control"
                               placeholder="Entrez le titre de votre histoire" required autofocus>
                    </div>
                </div>
                <div class ="form-group">
                    <label class="col-sm-4 control-label">L'auteur de l'histoire </label>
                    <div class="col-sm-6">
                        <input type="text" name="auteur" class="form-control"
                               placeholder="" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Synopsis</label>
                    <div class="col-sm-6">
                  <textarea name="Synopsis" class="form-control" placeholder="Entrez sa description courte"
                            required></textarea>
                    </div>
                </div>
                <div class="form-group">
                <label class="col-sm-4 control-label">Image</label>
                <div class="col-sm-4">
                  <input type="file" name="image" />
                </div>
              </div>
                <div>
                    <label class="col-sm-4 control-label">Le début de votre histoire</label>
                    <div class="col-sm-6">
                        <textarea name="IntroductionChapter" class ="form-control" placeholder="Entrez ici le début de votre histoire" required></textarea>
                    </div> 
                </div>
                <br><br> 
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Enregistrer votre histoire </button>
                </div>
            </div>
               
                <div>
            </div>
        </div>
        </form>
    </div>

    </div>

    <?php
    
    if(isset($_POST['title'])){
        echo("c");
        var_dump($_POST);
        $title = escape(($_POST["title"]));
        $synopsis = escape(($_POST["Synopsis"]));
        $auteur = escape(($_POST["auteur"]));
        $firstChapter = escape(($_POST['IntroductionChapter'])); 
        $firstchap = $BDD -> prepare('insert into Chapitre (IdChapitre,Contenu) values(?,?)'); 
        $firstchap -> execute(array($chapID, $firstChapter));
        $story = $BDD ->prepare('insert into Histoire
        (IdHistoire, Titre, Auteur ,Synopsis,HistoireImage)
        values (?, ?, ?, ?,"histoire.webp")');
        $story->execute(array($storyID, $title, $auteur, $synopsis));
        //$firstChapterId = $BDD -> ('insert into Lien (IdHistoire,IdPremierChapitre) value(?,?)'); 
        //$firstChapterId -> execute(array($chapID, $storyID)); 
        redirect("addChapter.php");
        ob_end_flush();
    }
?>  

    <?php    require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>

    </body>
</html>