
<?php
/*
Objectif : Déconnecter l'utilisateur

*/

session_start();

$_SESSION = [];
session_destroy();

header("Location: login.php");
exit;
?>
