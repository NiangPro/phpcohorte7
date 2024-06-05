<?php 

    require_once("models/database.php"); 
    require_once("includes/entete.php"); 
    
    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case 'classe':
                require_once("controllers/classeController.php");
                break;
            case 'eleve':
                require_once("controllers/eleveController.php");
                break;
            default:
            require_once("controllers/accueilController.php");

                break;
        }
    }else{

        require_once("controllers/accueilController.php");
    }
    
    require_once("includes/pied.php"); 
 