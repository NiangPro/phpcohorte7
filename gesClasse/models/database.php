<?php 

try {
    $db = new PDO("mysql:dbname=gesClasse;host=localhost", "root", "");
} catch (PDOException $th) {
    die("Erreur: ".$th->getMessage());
}

function listeDesClasses(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM classe ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}