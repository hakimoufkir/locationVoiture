<?php
	session_start();
	require_once("../functions/fonctSession.php"); 
	require_once("../functions/fonctConnexion.php"); 
    echo json_encode($_POST);
?>