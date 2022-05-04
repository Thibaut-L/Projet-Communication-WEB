<?php 
require_once('includes/functions.php');
session_start(); 
if(isUserConnected()) {
  if (isset($_POST['title'])){
    $title = escape($_POST['title']);
    $storyID = escape($_POST['StoryID']); 
    $chapterText = escape($_POST['chapterText']); 
    $chapterId = escape($_POST['chapterId']);
    $synopsis = escape($_POST['Synopsis']);
    $auteur = escape($_POST['auteur']);
    $chapter = escape($_POST['chapter']); 
  }
}
?>
<!doctype html>
<html> 

<?php
    $pageTitle = "Ajout d'un film";
    require_once "includes/head.php";
    ?>

    <body>
      <div class="container">
       <?php require_once "includes/header.php"; ?>

          <h2 class="text-center">Ajout d'une histoire</h2>
          <div class="well">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="AddStory.php" method="post">
              <input type="hidden" name="id" value="<?= $storyID ?>">
              <div class="form-group">
                <label class="col-sm-4 control-label">Le titre de votre histoire</label>
                <div class="col-sm-6">
                  <input type="text" name="title" value="<?= $title ?>" class="form-control" placeholder="Entrez le titre de votre histoire" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Synopsis</label>
                <div class="col-sm-6">
                  <textarea name="shortDescription" class="form-control" placeholder="Entrez sa description courte" required>
                    <?= $synopsis?>
                  </textarea>
                </div>
              </div>
              </div>
              <div class="well">
                  <div class="form-group">
                      <label class="col-sm-4 control-label">Auteur de l'histoire </label>
                      <div class="col-sm-6">
                          <input type="text" name="director" value="<?= $auteur ?>" class="form-control" placeholder="Entrez son auteur" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-4 control-label">D</label>
                      <div class="col-sm-6">
                  <textarea name="Chapter" class="form-control" placeholder="Écrivez ici votre histoire" required>
                    <?= $chapter?>
                  </textarea>
                      </div>
                  </div>
              </div>


              
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Enregistrer votre histoire </button>
                </div>
              </div>
            </form>
          </div>

          <?php //require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>
    

  </html>

  <?php// } else { ?>
    <html>

    <body>
    </body>

    </html>
    <?php// } ?>