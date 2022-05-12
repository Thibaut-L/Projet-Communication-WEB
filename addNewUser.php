<?php require_once "includes/functions.php"; ?> 
<?php require_once "includes/ConnectDB.php"; ?>

<!DOCTYPE html>
<html>
<title>Création de compte</title>

<?php 
$pageTitle = "Connexion";
require_once "includes/head.php";
?>   

<body class="fondimage" >
<?php require_once "includes/header.php"; ?>
    <br><br><br>
    <h2 class="text-center"><?= $pageTitle ?></h2>
    <div class="container" >
        <div class="well"id="blackground">
            <form class="form-signin form-horizontal" role="form" action="addNewUser.php" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        Entrez votre pseudo : <br>
                        <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo" required>
                    </div>
                </div>    
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Entrez votre login : <br>
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
    </div>



    <?php
	if (isset($_SESSION['login']) AND $_SESSION['password'] != "") {
        echo 'a';
		//die('Vous êtes déjà connecté !! <a href="index - copie.php">Retour à l\'accueil</a>');
	}
    ?>

    <?php
	// vérification que tous les champs sont remplis
	if (empty($_POST["login"]) or empty($_POST["password"])) {
        echo 'b';
		//die("Vous devez remplir TOUS les champs !");
	}
	else {
        echo 'c';
        var_dump($_POST);
		$login = $_POST["login"];
		$password = $_POST["password"];
        $stmt = $BDD->prepare('insert into Utilisateur
        (usr_login, usr_password) values (?, ?)');
        $stmt->execute(array($login, $password));
        redirect("index.php");

			
		// Affichage d'un message de confirmation
		echo 'Vous avez bien été enregistré avec le login'.$login.' et le mot de passe '.$password;
		echo '<br><a href="index - copie.php">Retour à l\'accueil</a>';
		
	}
?>
    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"?> 
</body>
</html>