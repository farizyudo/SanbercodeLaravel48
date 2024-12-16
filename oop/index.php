<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$animal = new animal("shaun");

echo "Name : " . $animal->hewan . "<br>";            // "shaun"
echo "Legs : " . $animal->legs . "<br>";             // 4
echo "Cold Blooded : " . $animal->coolBlooded;       // "no"
echo "<br><br>";

$kodok = new kodok("buduk");

echo "Name : " . $kodok->hewan . "<br>";                // "buduk"
echo "Legs : " . $kodok->legs . "<br>";                 // 4
echo "Cold Blooded : " . $kodok->coolBlooded . "<br>";  // "no"
$kodok->jump() ;                                        // "hop hop"
echo "<br><br>";

$sungokong = new ape("kera sakti");

echo "Name : " . $sungokong->hewan . "<br>";                // "kera sakti"
echo "Legs : " . $sungokong->legs . "<br>";                 // 2
echo "Cold Blooded : " . $sungokong->coolBlooded . "<br>";  // "no"
$sungokong->yell();                                         // Auoo"

?>