<?php
if((isset($_GET['page']))&& ($_GET['page']==='inscription') && (!verfiSession()))
{
	require_once('server/front/inscription.php');
}
else if((isset($_GET['page']))&& ($_GET['page']==='deposer') && (verfiSession()))
{
	require_once('server/front/deposer.php');
}
else if((isset($_GET['page']))&& ($_GET['page']==='2etape') && (verfiSession()))
{
	require_once('server/front/2etape.php');
}
else if((isset($_GET['page']))&& ($_GET['page']==='3etape') && (verfiSession()))
{
	require_once('server/front/3etape.php');
}
else if((isset($_GET['page']))&& ($_GET['page']==='pricing') && (verfiSession()))
{
	require_once('server/front/pricing.php');
}

else if(isset($_GET['search'])) 
{
	require_once('server/front/carSearch.php');
}
else if((isset($_GET['page']))&& ($_GET['page']==='car'))
{
	require_once('server/front/car.php');

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
require("server/front/experience.php");
}


else
{
	require_once('server/front/404.php');
}






?>
