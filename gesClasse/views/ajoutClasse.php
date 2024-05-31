<div class="container col-md-7 mt-3 card">
    <div class="card-header bg-danger text-white row">
        <h1 class="col-md-10">Formulaire d'ajout classe</h1>
        <div class="col-md-2 text-end">
            <a href="?page=classe" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Retour</a>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Taille</label>
                <input type="number" name="taille" min="0" required class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-success mt-3"><i class="fa fa-plus"></i> Ajouter</button>
        </form>
    </div>
</div>