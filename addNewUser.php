<?php require_once "includes/functions.php"; ?> 


<!DOCTYPE html>
<html>

<?php require_once "includes/head.php"; ?>
   
<body>
    <?php require_once "includes/header.php"; ?>
    
    <div class="well">
        <form class="form-signin form-horizontal" role="form" action="login.php" method="post">
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo" required>
                </div>
            </div>    
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="text" name="login" class="form-control" placeholder="Entrez votre login" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Vous n'avez pas encore de compte ?
                    <br>
                    <a href="addNewUser.php"><span class="glyphicon glyphicon-log-in"></span> Créer un compte</a>
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
	if (empty($_POST["nom"]) or empty($_POST["prenom"]) or empty($_POST["mail"]) or empty($_POST["login"]) or empty($_POST["pass"]) or empty($_POST["pass1"]) ) {
		die("Vous devez remplir TOUS les champs !");
	}
	else {
		// tous les champs sont remplis, je récupère les données
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$mail = $_POST["mail"];
		$login= $_POST["login"];
		$pass = $_POST["pass"];
		$pass1 = $_POST["pass1"];
		

		// test de la cohérence des mots de passe
		if ($pass != $pass1) {
			die('Les deux mots de passe doivent être identiques !<a href="index - copie.php">Retour à l\'accueil</a>');
		}
		else {
			// tout va bien

			// Connexion à la base
			mysql_connect("localhost","root","");
			mysql_select_db("projet_db");

			// Création de la requête
			$req='INSERT INTO spectateur(Nom,Prenom,Mail,login
    ,Password) VALUES ("'.$nom.'","'.$prenom.'","'.$mail.'","'.$login
    .'","'.$pass.'");';

			// Envoi de la requête
			mysql_query($req);

			// Pas de traitement
			// Fermeture de la connexion
			mysql_close();
			
			// Affichage d'un message de confirmation
			echo 'Vous avez bien été enregistré avec le login
     '.$login
    .' et le mot de passe '.$pass;
			echo '<br><a href="index - copie.php">Retour à l\'accueil</a>';
		}
	}
?>
    <?php require_once "includes/scripts.php"?> 
</body>
</html>