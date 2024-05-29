<?php 

try {
    $db = new PDO("mysql:dbname=gesClasse;host=localhost", "root", "");

} catch (PDOException $th) {
    die("Erreur: ".$th->getMessage());
}

function recupererLesClasses(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM classe ORDER BY nom ASC");

        $q->execute();

        return $q->fetchAll();
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}
