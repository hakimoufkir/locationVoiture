<?php

//fetch_data.php

include('../functions/fonctConnexion.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM annonce where 1
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND prixph BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["marque"]))
	{
		$brand_filter = implode("','", $_POST["marque"]);
		$query .= "
		 AND marque IN('".$brand_filter."')
		";
	}
	if(isset($_POST["searchFilter"])  && !empty($_POST["searchFilter"]))
	{ 
		$search = $_POST["searchFilter"];
		$query .= "
		AND (`marque` LIKE '%$search%' OR `titre` LIKE '%$search%' OR `description` LIKE '%$search%')
		";
	}
	if(isset($_POST["date_depart"], $_POST["date_arrivee"]) && !empty($_POST["date_depart"]) && !empty($_POST["date_arrivee"]))
	{
		$date_depart=$_POST['date_depart'];
		$date_arrivee=$_POST['date_arrivee'];
		$date_depart_conv=date("Y-m-d",strtotime($date_depart));
		$date_arrive_conv=date("Y-m-d",strtotime($date_arrivee));


		$query .= "
		 AND date_depart = '".$date_depart_conv."' AND date_arrivee '".$date_arrive_conv."'
		";
	}
	if(isset($_POST["ville_depart"], $_POST["ville_arrivee"]) && !empty($_POST["ville_depart"]) && !empty($_POST["ville_arrivee"]))
	{
		$ville_depart=$_POST['ville_depart'];
		$ville_arrivee=$_POST['ville_arrivee'];
		$query .= "
		 AND ville_depart = '".$ville_depart."' AND ville_arrivee '".$ville_arrivee."'
		";
	}
	if((isset($_POST["page"])) && (!empty($_POST["page"])))
  {
        $page=$_POST["page"];
    $debut=2*($page-1);
        $query .= "
    limit $debut,2
        ";
    }
	echo $query;
    $connexionDB=connexionDB();
	$statement = $connexionDB->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="table-responsive">
              <table class="table table-hover">
                <tbody><tr>
                  <td class="image"><img src="assets/photos/'.$row['photo'].'" width="250px" height="200px" alt=""></td>
                  <td class="product"><strong>'.$row['marque'].'</strong><br>'.$row['description'].'.</td>
                  <td class="rate text-right"></td>

				<td class="price">
				<p class="btn-custom"><a href="#">Rent</a></p>
				<div class="price-rate">
					<h3>
						<span class="num"><sclass="currency"></small>'.$row['prixph'].'</span>
						<span class="per">/per month</span>
					</h3>
				</div>
				</td></tr>
			   </tbody></table>
			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>