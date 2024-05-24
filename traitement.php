<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    echo "Prenom : ".$_POST["prenom"];
    echo "<br>Nom : $nom";
    echo "<br>Email : $email";
    echo "<br>Mot de passe : $mdp";
}else{
    echo "Veuillez renseigner d'abord le formulaire";
}

