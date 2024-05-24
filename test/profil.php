<?php require_once("entete.php"); ?>
<?php 
    if(!isset($_GET["prenom"])){
        header("Location: inscription.php");
    }

?>
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
            <td><?= $_GET["prenom"]  ?></td>
            <td><?= $_GET["nom"]  ?></td>
            <td><?= $_GET["sexe"]  ?></td>
            <td><?= $_GET["adresse"]  ?></td>
        </tr>
    </table>
</div>
<?php 

require_once("pied.php");
?>