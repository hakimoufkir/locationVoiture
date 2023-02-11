<?php 
$connexionDB=connexionDB();
/**************affichage article*****************/
if(isset($_GET['annonce']))
{
      require_once('server/front/carDetail.php');

}
/**************fin affichage article*****************/
else
{
  /**************affichage categorie*****************/
   require_once('server/front/offers.php');
   
}




?>