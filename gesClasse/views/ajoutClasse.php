<div class="container col-md-7 mt-3 card">
    <div class="card-header bg-danger text-white row">
        <h1 class="col-md-10">Formulaire d'<?= $_GET["type"] == "add" ? "ajout" : "édition" ?> classe</h1>
        <div class="col-md-2 text-end">
            <a href="?page=classe" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Retour</a>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" value="<?= isset($c) ? $c->nom : "" ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Taille</label>
                <input type="number" value="<?= isset($c) ? $c->taille : "" ?>" name="taille" min="0" required class="form-control">
            </div>

            <?php if ($_GET["type"] == "add"): ?>
            <button type="submit" name="ajouter" class="btn btn-outline-success mt-3">
                <i class="fa fa-plus"></i> Ajouter
            </button>
            <?php else: ?>
                <button type="submit" name="modifier" class="btn btn-outline-warning mt-3">
                <i class="fa fa-edit"></i> Modifier
            </button>
            <?php endif; ?>

        </form>
    </div>
</div>