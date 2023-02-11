<?php

//pagination
    $idUser = $_SESSION['info']['id'];
    $lien="index.php?";
    $connexionDB=connexionDB();
    $sqlQuery = "SELECT * FROM annonce WHERE id_user =  '$idUser'";
    $annonces = $connexionDB->prepare($sqlQuery);
    $annonces->execute();
    $annonces= $annonces->fetchAll();
    
    $nbrAnnonces=count($annonces);
    $annoncePage=6;
    $nbrPages=ceil($nbrAnnonces/$annoncePage);

        if(isset($_GET['nbrpage']))
        {
        $nbrpage=$_GET['nbrpage'];
        }
        else
        {
        $nbrpage=1;
        }

    $debut=$annoncePage*($nbrpage-1);
    $sqlQuery.=" limit $debut,$annoncePage";
        
    $annonces = $connexionDB->prepare($sqlQuery);
    $annonces->execute();
    $annonces= $annonces->fetchAll();   
    // foreach ($annonces as $annonce) {

    // }

//end pagination








?>