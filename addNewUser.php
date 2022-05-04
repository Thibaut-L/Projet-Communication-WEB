<?php require_once "includes/functions.php"; ?> 


<!DOCTYPE html>
<html>

<?php 
$pageTitle = "Connexion";
require_once "includes/head.php";
?>   
<body>
    <?php require_once "includes/header.php"; ?>
<br><br><br>
    <div class="well">
        <form class="form-signin form-horizontal" role="form" action="login.php" method="post">
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Entrez votre pseudo : <br>
                    <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo" required>
                </div>
            </div>    
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                Entrez votre login <br>
                    <input type="text" name="login" class="form-control" placeholder="Entrez votre login" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Entrez votre mot de passe : <br>
                    <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Créer</button>
                </div>
            </div>
        </form>
    </div>



    <?php
	if (isset($_SESSION['login']) AND $_SESSION['password'] != "") {
		die('Vous êtes déjà connecté !! <a href="index - copie.php">Retour à l\'accueil</a>');
	}
    ?>

    <?php
	// vérification que tous les champs sont remplis
	if (empty($_POST["pseudo"]) or empty($_POST["login"]) or empty($_POST["password"])) {
		die("Vous devez remplir TOUS les champs !");
	}
	else {
		// tous les champs sont remplis, je récupère les données
		$pseudo = $_POST["pseudo"];
		$login = $_POST["login"];
		$password = $_POST["password"];
		
		// Connexion à la base
		//mysql_connect("localhost","root","");
		//mysql_select_db("projet_db");

		// Création de la requête
		$req='INSERT INTO Utilisateur(usr_login ,usr_password) VALUES ("'.$login.'","'.$password.'");';

		// Envoi de la requête
		mysql_query($req);

		// Pas de traitement
		// Fermeture de la connexion
		mysql_close();
			
		// Affichage d'un message de confirmation
		echo 'Vous avez bien été enregistré avec le login'.$login.' et le mot de passe '.$pass;
		echo '<br><a href="index - copie.php">Retour à l\'accueil</a>';
		
	}
?>
    <?php require_once "includes/scripts.php"?> 
</body>
</html>