<?php 

require('animal.php');


$sheep = new Animal("shaun");

echo "Name : ". $sheep->animal ."<br>"; 
echo "Legs : ". $sheep->legs."<br>"; 
echo "cold blooded : ". $sheep->cold_blooded."<br><br>"; 

require('frog.php');
$kodok = new Frog("buduk");

echo "Name : ". $kodok->animal ."<br>";
echo "Legs : ". $kodok->legs."<br>"; 
echo "cold blooded : ". $kodok->cold_blooded."<br>";
echo "Jump : ". $kodok->jump()."<br><br>"; // "Hop Hop"

require('ape.php');
$sungokong = new Ape("kera sakti");

echo "Name : ". $sungokong->animal ."<br>"; 
echo "Legs : ". $sungokong->legs."<br>"; 
echo "cold blooded : ". $sungokong->cold_blooded."<br>";
echo "Yell : ".$sungokong->yell()."<br>"; // "Auooo"

?>