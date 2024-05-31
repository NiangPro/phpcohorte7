<?php  

require_once("models/database.php");  
require_once("includes/entete.php"); 

if (isset($_GET["page"])) {
//    routeur 
    switch ($_GET["page"]) {
        case 'inscription':
            require_once("inscription.php");
            break;
        case "classe":
            require_once("controllers/classeController.php");
           break; 
        
        default:
            require_once("accueil.php");
            break;
    }
}else{
    require_once("accueil.php");
}
require_once("includes/pied.php");  ?>
