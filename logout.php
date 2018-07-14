<?php 

$cookie_name = 'email';
unset($_COOKIE[$cookie_name]);
setcookie($cookie_name, null, time() - 3700, '/') ;
header('Location: index.php');

?>