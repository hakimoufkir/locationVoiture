<?php
	session_start();
	require_once("../functions/fonctSession.php"); 
	require_once("../functions/fonctConnexion.php"); 

if(!empty($_POST)&&(!empty($_FILES)))
{
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
	$path = '../../assets/photos/'; 
	$img = $_FILES['chphoto']['name'];
	$tmp = $_FILES['chphoto']['tmp_name'];
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));


	if(in_array($ext, $valid_extensions)) 
	{ 
			$nom_photo='_'.time().'_'.$img;
			$path = $path.$nom_photo; 
			if(move_uploaded_file($tmp,$path)) 
			{
			$nom=$_POST["chnom"];
			$prenom=$_POST["chprenom"];
			$email=$_POST["chemail"];
			$mp=$_POST['chmp'];
			$tele=$_POST['chtel'];
			$connexionDB=connexionDB();
			$sqlQuery = "INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `mdp`, `photo`, `tele`) VALUES (NULL, '$nom', '$prenom', '$email', '$mp','$nom_photo','$tele');";
			$users = $connexionDB->prepare($sqlQuery);
			$users->execute();
			$id=$connexionDB->lastInsertId();
			addSession($id,$nom,$prenom,$email,$nom_photo);
			echo "true";
			}
			else
			{
				echo 'invalide';
			}
		}
		else
		{
			echo "extension invalide";
		}
}
?>