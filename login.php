<?php require_once "includes/ConnectDB.php"; ?>
<?php
require_once "includes/functions.php";
session_start();

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = escape($_POST['login']);
    $password = escape($_POST['password']);
    $stmt = $BDD->prepare('SELECT * FROM Utilisateur WHERE usr_login=? AND usr_password=?');
    $stmt->execute(array($login, $password));
    if ($stmt->rowCount() == 1) {
        // Authentication successful
        $_SESSION['usr_login'] = $login;
        redirect("index.php");
    }
    else {
        $error = "Utilisateur non reconnu";
        echo $error;
    }
}
?>

<!doctype html>
<html>

<?php 
$pageTitle = "Veuillez vous identifier avant tout!";
require_once "includes/head.php";
?>
    

<body class="fondimage">
<?php require_once "includes/header.php"; ?>
    <div class="container d-flex h-100">
        <br><br><br>
        <h2 class="text-center"><?= $pageTitle ?></h2>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <strong>Erreur !</strong> <?= $error ?>
            </div>
        <?php } ?>

        <div class="well row align-self-center" id="blackgroundcontainer">
            <form class="form-signin form-horizontal" role="form" action="login.php" method="post">
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
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        Vous n'avez pas encore de compte ?
                        <br>
                        <a href="addNewUser.php"> Créer un compte</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>
</body>

</html>