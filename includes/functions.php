<?php 
// Check if a user is connected
function isUserConnected() {
    return isset($_SESSION['login']);
} 

// Escape a value to prevent XSS attacks
function escape($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}

// Redirect to a URL
function redirect($url) {
    header("Location: $url");
}

 ?>

