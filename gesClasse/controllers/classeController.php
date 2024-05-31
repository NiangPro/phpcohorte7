<?php 

$classes = listeDesClasses();

if (isset($_GET["type"])) {
    require_once("views/ajoutClasse.php");
}else{
    require_once("views/classe.php");
}