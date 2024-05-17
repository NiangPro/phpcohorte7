<?php 

function recherche($tab = []){
    foreach($tab as $valeur){
        if (strchr($valeur, "ent") || strchr($valeur, "ment")) {
            echo $valeur." - ";
        }
    }

    // for ($i=0; $i < count($tab); $i++) { 
    //     if (strchr($tab[$i], "ent") || strchr($tab[$i], "ment")) {
    //         echo $tab[$i]." - ";
    //     }
    // }
}

recherche(["president", "directeur", "détriment", "piment", "aliou"]);