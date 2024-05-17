<?php 

    $note = 25;

    if ($note <=20 && $note > 17) {
        echo "Excellent";
    }elseif ($note <= 17 && $note >= 16) {
        echo "Tres bien";
    }else if ($note < 16 && $note >= 14) {
        echo "Bien";
    }else if ($note < 14 &&  $note >= 13) {
        echo "A Bien";
    }elseif ($note < 13 && $note >= 10) {
        echo "Passable";
    }else if ($note < 10 && $note >= 0) {
        echo "Mediocre";
    }else{
        echo "Veuillez entrer une bonne note";
    }
