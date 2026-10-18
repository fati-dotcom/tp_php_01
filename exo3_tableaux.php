
<?php
/*
 les tableaux
*/

require_once "config.php";
function mention($note)
{
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}


// Exercice 3.1 : Création des tableaux
$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

$modules = ["PHP", "HTML", "Bases de données"];

echo "<h2>Exercice 3.1 : Modules</h2>";

foreach ($modules as $module) {
    echo htmlspecialchars($module) . "<br>";
}

echo "Premier module : " . $modules[0] . "<br>";
echo "Deuxième module : " . $modules[1] . "<br>";
echo "Troisième module : " . $modules[2] . "<br>";

// Exercice 3.2 : Affichage HTML des notes
echo "<h2>Exercice 3.2 : Liste des apprenants</h2>";

echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";

foreach ($notes as $nom => $note) {
    $style = ($note < SEUIL) ? "color:red;" : "";
    echo "<tr style='$style'>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}

echo "</table>";

// Exercice 3.3 : Statistiques sans array_sum()
echo "<h2>Exercice 3.3 : Statistiques</h2>";

$somme = 0;
$meilleure = null;
$plus_faible = null;

foreach ($notes as $note) {
    $somme += $note;

    if ($meilleure === null || $note > $meilleure) {
        $meilleure = $note;
    }

    if ($plus_faible === null || $note < $plus_faible) {
        $plus_faible = $note;
    }
}

$nombre = count($notes);
$moyenne = $somme / $nombre;

echo "Nombre d'apprenants : $nombre<br>";
echo "Somme des notes : $somme<br>";
echo "Moyenne : " . number_format($moyenne, 2) . "<br>";
echo "Meilleure note : $meilleure<br>";
echo "Plus faible note : $plus_faible<br>";

// Vérification avec les fonctions PHP
echo "<h3>Vérification avec les fonctions PHP</h3>";
echo "Somme : " . array_sum($notes) . "<br>";
echo "Nombre : " . count($notes) . "<br>";
echo "Maximum : " . max($notes) . "<br>";
echo "Minimum : " . min($notes) . "<br>";

// Effectifs par mention
$effectifs = [];

foreach ($notes as $note) {
    $m = mention($note);

    if (!isset($effectifs[$m])) {
        $effectifs[$m] = 0;
    }

    $effectifs[$m]++;
}

echo "<h3>Nombre d'apprenants par mention</h3>";

foreach ($effectifs as $m => $total) {
    echo htmlspecialchars($m) . " : $total<br>";
}

// Exercice 3.4 : Fonction d'affichage
function afficher($tab)
{
    echo "<table border='1' cellpadding='6'>";
    echo "<tr><th>Nom ou indice</th><th>Note ou valeur</th></tr>";

    foreach ($tab as $cle => $valeur) {
        echo "<tr><td>" . htmlspecialchars((string)$cle) . "</td>";
        echo "<td>" . htmlspecialchars((string)$valeur) . "</td></tr>";
    }

    echo "</table><br>";
}

echo "<h2>Exercice 3.4 : Tri des tableaux</h2>";

$tri = $notes;
ksort($tri);
echo "<h3>Tri par noms croissants (ksort)</h3>";
afficher($tri);

$tri = $notes;
arsort($tri);
echo "<h3>Tri par notes décroissantes (arsort)</h3>";
afficher($tri);

$tri = $notes;
krsort($tri);
echo "<h3>Tri par noms décroissants (krsort)</h3>";
afficher($tri);

$tri = $notes;
asort($tri);
echo "<h3>Tri par notes croissantes (asort)</h3>";
afficher($tri);

// Tri du tableau indexé des modules
echo "<h3>Modules triés par ordre alphabétique</h3>";
$modules_tries = $modules;
sort($modules_tries);
afficher($modules_tries);

// Exercice 3.5 : Opérateurs de tableaux
echo "<h2>Exercice 3.5 : Opérateurs de tableaux</h2>";

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "<pre>";
print_r($a + $b);
echo "</pre>";

echo "\$a == \$b : ";
var_dump($a == $b);

echo "\$a === \$b : ";
var_dump($a === $b);
?>
