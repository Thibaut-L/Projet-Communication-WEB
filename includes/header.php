<?php require_once "functions.php"; ?> 


<header class="header">
<a href="" class="logo">Les histoires dont vous êtes la protagoniste</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="Index.php">Accueil</a></li>
        <?php  if (isUserConnected()){?>
            <li><a href="Src/AddStory.php">Créez votre propre histoire</a></li> 
        <?php } ?>
        <li><a href="#contact">Autre</a></li>
        <li><a href="login.php">Se connecter</a></li>
  
</ul>
</header>

<?php require_once "scripts.php"; ?> 


