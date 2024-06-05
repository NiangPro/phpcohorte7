<div class="container col-md-8 mt-3 card">
    <div class="card-header bg-danger text-white row">
        <h1 class="col-md-10">Liste des classes</h1>
        <div class="col-md-2 text-end">
            <a href="?page=classe&type=add" class="btn btn-success">Ajouter</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Taille</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($classes as $c): ?>
                    <tr>
                        <td><?=  $c->nom  ?></td>
                        <td><?=  $c->taille  ?></td>
                        <td>
                            <a href="?page=classe&type=edit&id=<?= $c->id ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c->id ?>"><i class="fa fa-trash"></i></a>
                            <div class="modal fade" id="exampleModal<?= $c->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous sûr de vouloir supprimer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NON</button>
                                        <a href="?page=classe&idDeleting=<?= $c->id ?>" type="button" class="btn btn-danger">OUI</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>