<?php
	session_start();
	require_once("../functions/fonctSession.php"); 
	require_once("../functions/fonctConnexion.php"); 

if(!empty($_GET))
{	
    $idRemove = $_GET['idRemove'];
    $connexionDB=connexionDB();
    $sqlQuery = "DELETE FROM `annonce` WHERE `id` = '$idRemove'";
    $remove = $connexionDB->prepare($sqlQuery);
    $remove->execute();
    header("Location: ../../index.php?page=pricing");
}
?>