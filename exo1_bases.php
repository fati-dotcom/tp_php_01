
<?php
/*
 les variables, constantes, types, conversions
et chaînes de caractères en PHP

*/

require "config.php";

echo "<h1>Partie 1 : Variables, constantes, types et chaînes</h1>";

// variables

/*
$x  : lettre
$_x : il commence par un underscore
$2x : un nom de variable ne peut pas commencer par un chiffre.
$x-y  : le caractère - n'est pas autorisé dans un nom.
$Prix_HT  : les lettres et le underscore sont autorisés.
$prix ht : un espace n'est pas autorisé dans un nom.
$état est accepté par PHP 8 comme identifiant Unicode,
mais il est conseillé d'utiliser des noms simples comme $etat.
*/

$x = 10;
$_x = 20;
$Prix_HT = 60;
$etat = "valide";

$a = 1;
$A = 2;

echo "<h2>Exercice 1.1 : Variables</h2>";
echo '$x = ' . $x . "<br>";
echo '$_x = ' . $_x . "<br>";
echo '$Prix_HT = ' . $Prix_HT . "<br>";
echo '$etat = ' . $etat . "<br>";
echo '$a = ' . $a . "<br>";
echo '$A = ' . $A . "<br>";

/*
$a et $A sont deux variables pour
majuscules et les minuscules.
*/

// Exercice 1.2 : Constantes

echo "<h2>Exercice 1.2 : Constantes</h2>";

echo "ETABLISSEMENT : " . ETABLISSEMENT . "<br>";
echo "NOTE_MIN : " . NOTE_MIN . "<br>";
echo "NOTE_MAX : " . NOTE_MAX . "<br>";
echo "SEUIL : " . SEUIL . "<br>";

echo "SEUIL est définie : ";
var_dump(defined("SEUIL"));

echo "<br>INCONNUE est définie : ";
var_dump(defined("INCONNUE"));

// Exercice 1.3 : Calcul du prix TTC

echo "<h2>Exercice 1.3 : Calcul du prix TTC</h2>";

$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.";

/*
Calcul :
Prix TTC = Prix HT + (Prix HT * TVA / 100)
Prix TTC = 60 + (60 * 20 / 100) = 72 €
Résultat attendu : Le prix TTC du produit est de 72 €.
*/

// Exercice 1.4 : Types et conversions

echo "<h2>Exercice 1.4 : Types et conversions</h2>";

$test = 42;
$test = (string) $test;

echo "Conversion de 42 en string : ";
var_dump($test);

/*
Le cast (string) transforme la valeur 42 en chaîne "42".
*/

// Question 2 : Conversion en booléen

echo "<h3>Conversions en booléen</h3>";

var_dump((bool) 0);       // false
echo "<br>";

var_dump((bool) 0.0);     // false
echo "<br>";

var_dump((bool) "0");     // false
echo "<br>";

var_dump((bool) "");      // false
echo "<br>";

var_dump((bool) "abc");   // true
echo "<br>";

var_dump((bool) []);      // false
echo "<br>";

var_dump((bool) null);    // false
echo "<br>";

/*
Les valeurs 0, 0.0, "0", "", [] et null sont converties en false.
La chaîne non vide "abc" est convertie en true.
*/

// Question 3 : Autres conversions

echo "<h3>Autres conversions</h3>";

var_dump((int) 3.9);       // int(3)
echo "<br>";

var_dump((int) "12abc");   // int(12) dans le contexte de cette conversion
echo "<br>";

var_dump((float) "1.5e3"); // float(1500)
echo "<br>";

var_dump((int) true);      // int(1)
echo "<br>";

/*
(int) 3.9 supprime la partie décimale.
(float) "1.5e3" représente 1.5 * 10^3, donc 1500.
true converti en entier donne 1.
*/

// Question 4 : Représentation du nombre 255

echo "<h3>Représentations du nombre 255</h3>";

$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Décimal : " . $decimal . "<br>";
echo "Hexadécimal : " . $hexadecimal . "<br>";
echo "Octal : " . $octal . "<br>";
echo "Binaire : " . $binaire . "<br>";

/*
255 en décimal s'écrit 255.
255 en hexadécimal s'écrit FF.
255 en octal s'écrit 377.
255 en binaire s'écrit 11111111.
PHP affiche ici la valeur numérique décimale de chaque variable.
*/

// Exercice 1.5 : Chaînes de caractères

echo "<h2>Exercice 1.5 : Chaînes de caractères</h2>";

$traitees = "égales à";
$ici = 2;

// Question 1
echo 'Ahmed a dit : "J\'ai réussi"<br>';

// Question 2
echo 'Voulez-vous supprimer C:\\*.*?<br>';

// Question 3 : afficher \n littéralement
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';

// Question 4 : variables non interprétées
echo 'Les variables ne seront pas $traitees $ici<br>';

// Question 5 : variables interprétées
echo "Les variables seront $traitees $ici<br>";

/*
Avec les guillemets simples, les variables ne sont pas interprétées.
Avec les guillemets doubles, les variables sont remplacées par leurs valeurs.
*/

// Question 6 : supprimer les étoiles avec trim()

$chaine = "*Bonjour les développeurs*";
$resultat = trim($chaine, "*");

echo $resultat . "<br>";

/*
trim($chaine, "*") supprime les caractères * au début et à la fin.
*/

// Question 7 : afficher chaque lettre sur une ligne différente

$mot = "PHP";

for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}

/*
strlen() retourne la longueur de la chaîne en octets.
La boucle for parcourt les indices de 0 à strlen($mot) - 1.
$mot[$i] permet d'accéder à chaque caractère.
*/

?>
