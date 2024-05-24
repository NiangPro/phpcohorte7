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
        <?php if(isset($_POST["ajouter"])){?>

            <h1>Prenom: <?php echo $_POST["prenom"]; ?></h1>
            <h1>Nom: <?= $_POST["nom"] ?></h1>
            <h1>Email: <?= $_POST["email"] ?></h1>
            <h1>Mot de passe: <?= $_POST["mdp"] ?></h1>
        <?php }else{  ?>
        <h3 class="text-center">Inscription</h3>
        <form action="" method="post">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3" name="ajouter">S'inscrire</button>
            <button type="reset" class="btn btn-danger mt-3">Annuler</button>
        </form>
        <?php }  ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>