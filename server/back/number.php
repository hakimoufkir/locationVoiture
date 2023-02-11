<?php

    $idUser = $_SESSION['info']['id'];
    $connexionDB=connexionDB();
    $sqlQuery = "SELECT `tele` FROM `user` WHERE id = 6";
    $numTele = $connexionDB->prepare($sqlQuery);
    $numTele->execute();
    $numTele= $numTele->fetch();
    foreach ( $numTele as $key => $val) {
        echo $val;
     }


?>