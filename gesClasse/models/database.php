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

function ajouterUneClasse($nom, $taille){
    global $db;

    try{
        // $q = $db->prepare("INSERT INTO classe VALUES(null, :n, :t)");
        $q = $db->prepare("INSERT INTO classe VALUES(null, ?, ?)");

        // return $q->execute([
        //     "t" => $taille,
        //     "n" => $nom
        // ]);

        return $q->execute([$nom, $taille]);

    }catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

function recupererUneClasse($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM classe WHERE id =:id");

        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

function editerClasse($id, $nom, $taille){
    global $db;
    try {
        $q = $db->prepare("UPDATE classe SET nom =:nom, taille =:taille
                            WHERE id =:id");
        return $q->execute([
            "nom" => $nom,
            "taille" => $taille,
            "id" => $id
        ]);
    }  catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}