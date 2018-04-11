<?php
session_start(); 
unset($_SESSION['usuarioNome']);
session_destroy();
header("Location: index"); exit;

?>


?>