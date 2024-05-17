<?php 

function sayHello(){
    echo "Bonjour tout le monde<br>";
}

function dire_bonjour_a_quelqu_un($prenom = "Bassirou"){
    echo "Bonjour $prenom <br>";
}

function somme($a , $b){
    echo "$a + $b = ".($a+$b)."<br>";
}


sayHello();
dire_bonjour_a_quelqu_un("Moussa");
somme(23, 7);