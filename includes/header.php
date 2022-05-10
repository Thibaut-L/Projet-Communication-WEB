<?php require_once "functions.php"; ?> 
<?php require_once "includes/ConnectDB.php"; ?>


<header class="header">
<a href="index.php" class="logo">Les histoires dont vous êtes la protagoniste</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="AddStory.php">Créez votre propre histoire</a></li>
        <?php  if (isUserConnected()){?>
            <li><a href="Src/AddStory.php">Créez votre propre histoire</a></li> 
            <li><a href="login.php">Se déconnecter</a></li>
        <?php }
        else {?>
                    <li><a href="login.php">Se connecter</a></li>
        <?php }?>
</ul>
</header>

<?php require_once "scripts.php"; ?> 


