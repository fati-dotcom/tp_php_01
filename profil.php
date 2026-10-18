
<?php
/*
Auteur : Irhirane Fatima
Objectif : Afficher le profil de l'utilisateur connecté.
Date : 18/10/2026
*/

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>
    <h1>Profil utilisateur</h1>

    <p>Bienvenue <?php echo htmlspecialchars($_SESSION["login"]); ?> !</p>

    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>
