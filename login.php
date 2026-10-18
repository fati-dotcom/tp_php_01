
<?php
/*
 Gérer la connexion de l'utilisateur

*/

session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST["login"] ?? "");
    $mot_de_passe = $_POST["mot_de_passe"] ?? "";

    if ($login === "fati" && $mot_de_passe === "1415") {
        $_SESSION["login"] = $login;
        header("Location: profil.php");
        exit;
    } else {
        $message = "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    <p><?php echo htmlspecialchars($message); ?></p>

    <form method="POST">
        <label>Login :</label>
        <input type="text" name="login" required>
        <br><br>

        <label>Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>
        <br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>

