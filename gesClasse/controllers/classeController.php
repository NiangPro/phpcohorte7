<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);
    if(ajouterUneClasse($nom, $taille)){
        header("Location:?page=classe");
        exit();
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (editerClasse($_GET["id"], $nom, $taille)) {
        header("Location:?page=classe");
        exit();
    }
}

if (isset($_GET["idDeleting"])) {
    supprimerUneClasse($_GET["idDeleting"]);
    header("Location:?page=classe");
    exit();
}

$classes = listeDesClasses();

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $c = recupererUneClasse($_GET["id"]);
    }
    require_once("views/ajoutClasse.php");
}else{
    require_once("views/classe.php");
}