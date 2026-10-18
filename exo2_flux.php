
<?php
/*
 les structures 

*/

require_once "config.php";

// Exercice 2.1 : Fonction qui retourne la mention selon la note
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

echo "<h2>Exercice 2.1 : Mentions</h2>";

$notes_test = [18, 15, 13, 10, 7];

foreach ($notes_test as $note) {
    echo "Note : $note / 20 - " . mention($note) . "<br>";
}

// Exercice 2.2 : Afficher le mois actuel avec switch
echo "<h2>Exercice 2.2 : Mois actuel</h2>";

$mois = (int) date("n");

switch ($mois) {
    case 1: $nom_mois = "Janvier"; break;
    case 2: $nom_mois = "Février"; break;
    case 3: $nom_mois = "Mars"; break;
    case 4: $nom_mois = "Avril"; break;
    case 5: $nom_mois = "Mai"; break;
    case 6: $nom_mois = "Juin"; break;
    case 7: $nom_mois = "Juillet"; break;
    case 8: $nom_mois = "Août"; break;
    case 9: $nom_mois = "Septembre"; break;
    case 10: $nom_mois = "Octobre"; break;
    case 11: $nom_mois = "Novembre"; break;
    case 12: $nom_mois = "Décembre"; break;
    default: $nom_mois = "Mois inconnu";
}

echo "Nous sommes au mois de $nom_mois.";

// Exercice 2.3 : Triangle d'étoiles
echo "<h2>Exercice 2.3 : Triangle</h2>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

// Exercice 2.4 : Boucle while de 0 à 20
echo "<h2>Exercice 2.4 : Nombres pairs</h2>";

$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
}

// Exercice 2.5 : for avec continue
echo "<h2>Exercice 2.5 : Continue</h2>";

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "$i ";
}

// Exercice 2.6 : while, switch et break
echo "<h2>Exercice 2.6 : Break</h2>";

$i = 0;
while ($i <= 10) {
    $i++;

    switch ($i) {
        case 5:
        case 10:
            echo "<br>Arrêt à $i<br>";
            break 2;
        default:
            echo "$i ";
    }
}

// Exercice 2.7 : Réécrire avec do-while
echo "<h2>Exercice 2.7 : Do-while</h2>";

$i = 0;
do {
    echo "$i ";
    $i++;
} while ($i <= 10);
?>
