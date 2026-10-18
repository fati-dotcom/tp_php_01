
<?php
/*
Auteur : Irhirane Fatima
Objectif : Exporter les notes des apprenants au format CSV.
Date : 18/10/2026
*/

require_once "config.php";

$fichier = __DIR__ . "/data/notes.csv";

if (!file_exists($fichier)) {
    die("Erreur : le fichier notes.csv n'existe pas.");
}

header("Content-Type: text/csv; charset=UTF-8");
header('Content-Disposition: attachment; filename="notes.csv"');

readfile($fichier);
exit;
?>
