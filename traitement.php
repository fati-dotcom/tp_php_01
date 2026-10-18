<?php
$nom       = $_POST['nom'];
$note_info = $_POST['note_info'];
$note_math = $_POST['note_math'];
$moyenne   = ($note_info + $note_math) / 2;

// Sauvegarde f data/notes.csv
$f = fopen("data/notes.csv", "a");
fputcsv($f, [$nom, $note_info, $note_math]);
fclose($f);

echo "<h2>Résultat</h2>";
echo "<p>Apprenant : $nom</p>";
echo "<p>Note en informatique : $note_info</p>";
echo "<p>Note en mathématiques : $note_math</p>";
echo "<p>Moyenne : $moyenne</p>";
echo "<p><a href='saisie.html'>Nouvelle saisie</a></p>";
?>