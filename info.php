
<?php
/*


 Traiter les informations envoyées par GET.

*/
require_once "includes/entete_inc.php";
require_once "includes/menu_inc.php";

$nom = htmlspecialchars($_GET["nom"] ?? "");
$prenom = htmlspecialchars($_GET["prenom"] ?? "");
$sexe = $_GET["sexe"] ?? "M";

if ($sexe === "F") {
    echo "<p>Bonjour Madame " . $prenom . " " . $nom . "</p>";
} else {
    echo "<p>Bonjour Monsieur " . $prenom . " " . $nom . "</p>";
}

require_once "includes/pied_inc.php";
?>
