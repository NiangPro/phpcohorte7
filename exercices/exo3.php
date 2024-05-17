<?php 


$tab = [12, 7, 9, 5, 13, 23, 14, 17];

for ($i=0; $i < count($tab) ; $i++) { 
    $cpt = 0;
    for ($j=1; $j <= $tab[$i]; $j++) { 
        if ($tab[$i] % $j == 0) {
            $cpt++;
        }
    }

    if ($cpt == 2 || $tab[$i] == 1) {
        echo $tab[$i]." - ";
    }
}