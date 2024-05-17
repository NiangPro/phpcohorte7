<?php 

$nombre = 9;

echo "La table de multiplication de $nombre est : <br>";
for ($i=1; $i <= 10 ; $i++) { 
    echo "$nombre x $i = ".($nombre * $i)."<br>";
}

$nbre = 123;

settype($nbre, "string");

$resultat = 0;
for ($i=0; $i < strlen($nbre) ; $i++) { 
    $resultat +=$nbre[$i];
}

echo "La somme des chiffres de $nbre est $resultat";
