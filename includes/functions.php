<?php 


function isUserConnected() {
    return isset($_SESSION['login']);
} 

function escape($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}



 ?>