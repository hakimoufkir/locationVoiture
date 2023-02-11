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
        $titre = $_POST["titre"];     
        $description = $_POST["description"];     
        $marque = $_POST["marque"];     
        $modele = $_POST["modele"];     
        $annee = $_POST["annee"];     
        $nom_photo='_'.time().'_'.$img;

   
        $date_depart=$_POST['date_depart'];
        $date_arrivee=$_POST['date_arrivee'];
        $temps = $_POST['temps'];

        $date_depart_conv=date("Y-m-d",strtotime($date_depart));
        $date_arrive_conv=date("Y-m-d",strtotime($date_arrivee));
        $temps_conv = date("H:i:s",strtotime($temps));
       



        $prixph = $_POST["prixph"];     
        $prixpj = $_POST["prixpj"];     
        $prixpm = $_POST["prixpm"];     
        $id=$_SESSION['info']['id'];       

        $connexionDB=connexionDB();
        
        $sqlQuery = "INSERT INTO `annonce`(`id`,`id_user`,`titre`,`description`,`marque`,`modele`,`annee`,`photo`,`date_depart`,`date_arrivee`,`temps`, `prixph`,`prixpj`,`prixpm`) VALUES (NULL,'$id','$titre','$description','$marque','$modele','$annee','$nom_photo','$date_depart_conv','$date_arrive_conv','$temps_conv','$prixph','$prixpj','$prixpm')";
        echo $sqlQuery;
        echo "<pre>";
        $annonce = $connexionDB->prepare($sqlQuery);
        $annonce->execute();
        echo $sqlQuery;
        header('Location: http://localhost/locationVoiture/index.php?page=pricing');
                }
        }

        else{
                echo "problem immage extention";
        }
        
        // print_r($_SESSION['info']);
        // echo "<pre>";
        // print_r($_POST);
        // echo "<pre>";
        // print_r($nom_photo);
}
?>