<?php 

    echo "<pre>";
    $chaine = "ma chaine";

    $tab = [
        "prenom" => "bassirou",
        "nom" => "sow",
        "age" => 24
    ];

    print_r($tab);

    var_dump($chaine);

    // unset($chaine);
    
    if (isset($chaine)) {
        // echo ucfirst($chaine) ;
        echo ucwords($chaine) ;
    }else{
        echo "undefined variable";
    }

    echo "</pre>";
    die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-6 mt-5">
        <h3 class="text-center">Inscription</h3>
        <form action="">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3">S'inscrire</button>
            <button type="reset" class="btn btn-danger mt-3">Annuler</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>