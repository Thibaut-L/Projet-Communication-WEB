<?php
try {
    $BDD = new PDO("mysql:host=localhost;dbname=SunStory;charset=utf8","sunstory_user","SunStory_123",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die('Erreur fatale : '.$e->getMessage());
}
