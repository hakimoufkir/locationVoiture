<?php
session_start();
require_once("../functions/fonctSession.php"); 
require_once("../functions/fonctConnexion.php"); 


echo "<pre>";
print_r($_POST);
echo "</pre>";
print_r($_FILES);
echo "</pre>";
$reqphoto="";


if(!empty($_POST)&&(!empty($_FILES)))
{
			if(!empty($_FILES['chphoto']['name']))
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

						// $reqphoto=`photo`.'='.$nom_photo;
						$reqphoto=',`photo`'.'='.'\''.$nom_photo.'\'';
					}
					
					
					}
				else
				{
						echo "extttttttttttttttttt";
				}
			}
			$id=$_POST["id"];
			$id_user=$_SESSION['info']['id'];
			$marque=$_POST["marque"];
			$modele=$_POST["modele"];
			$annee=$_POST["annee"];
			$date_depart=$_POST['date_depart'];
			$date_arrivee=$_POST['date_arrivee'];
			$temps = $_POST['temps'];
	
			$date_depart_conv=date("Y-m-d",strtotime($date_depart));
			$date_arrive_conv=date("Y-m-d",strtotime($date_arrivee));
			$temps_conv = date("H:i:s",strtotime($temps));

			$titre=$_POST["titre"];
			$description=$_POST["description"];
			$prixph=$_POST['prixph'];
			$prixpj=$_POST['prixpj'];
			$prixpm=$_POST['prixpm'];
			
			$connexionDB=connexionDB();
			
			// echo "update `annonce` SET `titre`='$titre',`description`='$description',`marque`='$marque',`modele`='$modele',`annee`='$annee',".$reqphoto.",`date_depart`='$date_depart_conv',`date_arrivee`='$date_arrive_conv',`temps`='$temps_conv',`prixph`='$prixph',`prixpj`='$prixpj',`prixpm`='$prixpm' WHERE `id`='$id'";
			// echo "</pre>";
 

			$sqlQuery = "UPDATE `annonce` SET `titre`='$titre',`description`='$description',`marque`='$marque',`modele`='$modele',`annee`='$annee'".$reqphoto.",`date_depart`='$date_depart_conv',`date_arrivee`='$date_arrive_conv',`temps`='$temps_conv',`prixph`='$prixph',`prixpj`='$prixpj',`prixpm`='$prixpm' WHERE `id`='$id'";


			$modify = $connexionDB->prepare($sqlQuery);
			$modify->execute();
			echo "</pre>";
			echo $sqlQuery;
			echo "</pre>";
			header("Location: ../../index.php?page=pricing");

			//UPDATE `annonce` SET `titre`='ss',`description`='sss',`marque`='sss',`modele`='ss',`annee`='0000-00-00',`photo`='ss',`date_depart`='0000-00-00',`temps`='00:30:00',`prixph`='1',`prixpj`='11',`prixpm`='111' WHERE `id`='5' AND`id_user`='1';
		
	}
	
else
{
	echo "error POST";
}

?>