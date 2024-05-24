<?php require_once("entete.php"); ?>

<div class="container">
    <h1 class="text-center">Formulaire d'inscription</h1>
    <form action="" method="post" class="container col-md-6">
        <div class="form-group">
            <label for="">Prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Sexe </label><br>
            <label for="">
                M<input type="radio" value="masculin" name="sexe" checked >
                F<input type="radio" value="feminin" name="sexe" >
            </label>
        </div>
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" name="adresse" class="form-control">
        </div>
        <button type="submit" name="register" class="btn btn-outline-success mt-3">S'inscrire</button>
    </form>
</div>

<?php  require_once("pied.php");  ?>

<?php 

    if (isset($_POST["register"])) {
        extract($_POST);

        $_SESSION["prenom"] = $prenom;
        $_SESSION["nom"] = $nom;
        $_SESSION["sexe"] = $sexe;
        $_SESSION["adresse"] = $adresse;

        header("Location:profil2.php");

        // header("Location: profil.php?prenom=$prenom&nom=$nom&sexe=$sexe&adresse=$adresse");
    }


?>
