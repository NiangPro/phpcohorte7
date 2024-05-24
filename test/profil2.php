<?php require_once("entete.php"); ?>

<div class="container">
    <h3>Page de profil</h3>
    <table class="table">
        <tr>
            <td>Prenom</td>
            <td>Nom</td>
            <td>Sexe</td>
            <td>Adress</td>
        </tr>
        <tr>
           <td><?= $_SESSION["prenom"] ?></td>
           <td><?= $_SESSION["nom"] ?></td>
           <td><?= $_SESSION["sexe"] ?></td>
           <td><?= $_SESSION["adresse"] ?></td>
        </tr>
    </table>
</div>
<?php require_once("pied.php"); ?>