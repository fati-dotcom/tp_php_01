
<?php
/*
Auteur : Irhirane Fatima
Objectif : Vérifier et afficher les notes envoyées par POST.
Date : 18/10/2026
*/

require_once "config.php";

if (
    isset($_POST["nom"], $_POST["note_info"], $_POST["note_math"])
    && trim($_POST["nom"]) !== ""
    && $_POST["note_info"] !== ""
    && $_POST["note_math"] !== ""
) {
    $nom = trim($_POST["nom"]);
    $note_info = filter_var($_POST["note_info"], FILTER_VALIDATE_FLOAT);
    $note_math = filter_var($_POST["note_math"], FILTER_VALIDATE_FLOAT);

    if (
        $note_info !== false &&
        $note_math !== false &&
        $note_info >= NOTE_MIN && $note_info <= NOTE_MAX &&
        $note_math >= NOTE_MIN && $note_math <= NOTE_MAX
    ) {
        echo "<h1>Récapitulatif</h1>";
        echo "<p>Nom : " . htmlspecialchars($nom) . "</p>";
        echo "<p>Note en informatique : " . $note_info . "/20</p>";
        echo "<p>Note en mathématiques : " . $note_math . "/20</p>";
    } else {
        echo "Erreur : les notes doivent être comprises entre 0 et 20.";
    }
} else {
    echo "Erreur : veuillez remplir tous les champs.";
}
?>
