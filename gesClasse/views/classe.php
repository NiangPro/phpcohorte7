<div class="container mt-3 card">
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
                            <a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>