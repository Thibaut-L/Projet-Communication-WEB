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



    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>
</body>
</html>