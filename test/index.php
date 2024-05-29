<?php  

require_once("database.php");  
require_once("entete.php"); 

if (isset($_GET["page"])) {
//    routeur 
    switch ($_GET["page"]) {
        case 'inscription':
            require_once("inscription.php");
            break;
        case "classe":
            require_once("classe.php");
           break; 
        
        default:
            require_once("accueil.php");
            break;
    }
}else{
    require_once("accueil.php");
}
require_once("pied.php");  ?>
