<?php require_once "functions.php"; 
require_once "includes/ConnectDB.php";
session_start();
?>

<header class="header">
    <a href="index.php" class="title">Les histoires dont vous êtes la protagoniste</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <?php  if (isUserConnected()){ ?>
            <li><a href="logout.php">Se déconnecter</a></li>
        <?php }
        else {?>
            <li><a href="login.php">Se connecter</a></li>
        <?php }?>
    </ul>
 </header>


<?php require_once "scripts.php"; ?> 


