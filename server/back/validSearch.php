<?php
	session_start();
	require_once("../functions/fonctSession.php"); 
	require_once("../functions/fonctConnexion.php"); 

    $connexionDB=connexionDB();

    $inputField=$_GET['inputField'];



    $sqlQuery = "SELECT * FROM `annonce` WHERE `modele` LIKE '%$inputField%' OR `titre` LIKE '%$inputField%' OR `description` LIKE '%$inputField%' ";

    $search= $connexionDB->prepare($sqlQuery);
    $search->execute();
    $search= $search->fetchAll();
    print_r($search);
   


?>