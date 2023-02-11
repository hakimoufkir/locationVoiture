<?php

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'inscription':
            require_once('server/front/inscription.php');
            break;
        case 'deposer':
            require_once('server/front/deposer.php');
            break;
        case 'pricing':
            require_once('server/front/pricing.php');
            break;
        case 'car':
            require_once('server/front/car.php');
            break;
        case 'modify':
            require_once('server/front/modify.php');
            break;
        case 'car':
            require_once('server/front/car.php');
            break;
        case 'validSearch2':
            require_once('server/front/validSearch2.php');
            break;
        case 'faq':
            require_once('server/front/faq.php');
            break;
        case 'terms':
            require_once('server/front/terms.php');
            break;

        
        default: 
            echo "???";
            break;

    }
}

else if(isset($_GET['annonce'])&& (!verfiSession()))
    {
        require_once('server/front/carDetail.php');        
    }
else if(isset($_GET['search'])) 
    {
        require_once('server/front/carSearch.php');
    }

else if(!isset($_GET['page']))
    {
        require("server/front/bg_car.php");
        require("server/front/pickUpLocation.php");
        require("server/front/offerORdetail.php");
        require("server/front/aboutUs.php");
        require("server/front/services.php");
        require("server/front/locataire.php");
        require("server/front/happyClients.php");
    }
else
    {
        require_once('server/front/404.php');
    }
?>
