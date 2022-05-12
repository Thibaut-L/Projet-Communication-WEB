<?php require_once "includes/ConnectDB.php"; ?>
<?php
require_once "includes/functions.php";
session_start();
?>

<!doctype html>
<html>

<?php 
require_once "includes/head.php";
require_once "includes/header.php"; ?>

<body>
    <br><br><br><br>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="container d-flex flex-column align-items-center row "> 
    <div class="col-sm-4">
      <div class="card border-secondary mb-3" style="width: 18rem ">
        <img src="IMG_2611.jpeg" class="card-img-top image-rognage" alt="" >
        <div class="card-body">
          <h5 class="card-title text-center"> *inserer le titre avec la session*</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Auteur : *inserer l'auteur avec la session*</li>
          <li class="list-group-item">Synospis :  *inserer le synopsis avec la session*</li>
        </ul>
        <div class="card-body text-center">
          <a href="story.php" class="card-link ">Commencer l'histoire</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem ">
        <img src="IMG_2611.jpeg" class="card-img-top image-rognage" alt="" >
        <div class="card-body">
          <h5 class="card-title text-center"> *inserer le titre avec la session*</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Auteur : *inserer l'auteur avec la session*</li>
          <li class="list-group-item">Synospis :  *inserer le synopsis avec la session*</li>
        </ul>
        <div class="card-body text-center">
          <a href="#" class="card-link ">Commencer l'histoire</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem ">
        <img src="IMG_2611.jpeg" class="card-img-top image-rognage" alt="" >
        <div class="card-body">
          <h5 class="card-title text-center"> *inserer le titre avec la session*</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Auteur : *inserer l'auteur avec la session*</li>
          <li class="list-group-item">Synospis :  *inserer le synopsis avec la session*</li>
        </ul>
        <div class="card-body text-center">
          <a href="#" class="card-link ">Commencer l'histoire</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem ">
        <img src="IMG_2611.jpeg" class="card-img-top image-rognage" alt="" >
        <div class="card-body">
          <h5 class="card-title text-center"> *inserer le titre avec la session*</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Auteur : *inserer l'auteur avec la session*</li>
          <li class="list-group-item">Synospis :  *inserer le synopsis avec la session*</li>
        </ul>
        <div class="card-body text-center">
          <a href="#" class="card-link ">Commencer l'histoire</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem ">
        <img src="IMG_2611.jpeg" class="card-img-top image-rognage" alt="" >
        <div class="card-body">
          <h5 class="card-title text-center"> *inserer le titre avec la session*</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Auteur : *inserer l'auteur avec la session*</li>
          <li class="list-group-item">Synospis :  *inserer le synopsis avec la session*</li>
        </ul>
        <div class="card-body text-center">
          <a href="#" class="card-link ">Commencer l'histoire</a>
        </div>
      </div>
    </div>
  </div>


    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>
</body>
</html>