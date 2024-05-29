
<?php 
    $classes = recupererLesClasses();
?>

<div class="container mt-3">
    <div class="row">
        <h1 class="col-md-10">Liste des classes</h1>
        <div class="col-md-2">
            <a href="" class="btn btn-outline-success">Ajouter</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Taille</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($classes as $c): ?>
            <tr>
                <td><?= $c["nom"] ?></td>
                <td><?= $c["taille"] ?></td>
                <td></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>