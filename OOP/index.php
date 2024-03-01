<?php
require_once("animal.php");
require_once("frog.php");
require_once("ape.php");

echo "<h2>Release 0 </h2>";

$sheep = new Animal("shaun");
echo "Nama Hewan: " . $sheep->namahewan . "<br>";
echo "Kaki Hewan: " . $sheep->legs . "<br>";
echo "Telinga Hewan: " . $sheep->telinga . "<br>";
echo "Jenis Hewan: " . $sheep->animal . "<br>";
echo "cold blooded: " . $sheep->cold_blooded . "<br><br>";

echo "<h2>Release 1 </h2>";
$kodok = new Frog("buduk");
echo "Nama Hewan: " . $kodok->namahewan . "<br>";
echo "Kaki Hewan: " . $kodok->legs . "<br>";
echo "Telinga Hewan: " . $kodok->telinga . "<br>";
echo "Jenis Hewan: " . $kodok->animal . "<br>";
echo "cold blooded: " . $kodok->cold_blooded . "<br>";
echo $kodok->jump("hop hop") . "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Nama Hewan: " . $sungokong->namahewan . "<br>";
echo "Kaki Hewan: " . $sungokong->legs . "<br>";
echo "Telinga Hewan: " . $sungokong->telinga . "<br>";
echo "Jenis Hewan: " . $sungokong->animal . "<br>";
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
echo $sungokong->yell("Auoo");
