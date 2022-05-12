<?php
try {
    $BDD = new PDO("mysql:host=localhost:8889;dbname=SunStory;charset=utf8","sunstory_user","Sun",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die('Erreur fatale : '.$e->getMessage());
}
