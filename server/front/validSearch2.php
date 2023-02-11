<?php

    $connexionDB=connexionDB();

    $ville_depart=$_GET['ville_depart'];
    $ville_arrivee=$_GET['ville_arrivee'];
    $date_depart=$_GET['date_depart'];
    $date_arrivee=$_GET['date_arrivee'];
    $date_depart_conv=date("Y-m-d",strtotime($date_depart));
    $date_arrive_conv=date("Y-m-d",strtotime($date_arrivee));

    $sqlQuery = "SELECT * FROM `annonce` WHERE `ville_depart` LIKE '$ville_depart' OR `ville_arrivee` LIKE 'casa' OR `date_depart` LIKE '$date_depart_conv' OR `date_arrivee` LIKE '$date_arrive_conv'";

    // $sqlQuery = "SELECT * FROM `annonce` WHERE `ville_depart` LIKE 'larache' OR `ville_arrivee` LIKE 'casa' OR `date_depart` LIKE '2022-05-25' OR `date_arrivee` LIKE '0000-00-00' OR `temps` LIKE '1 '";



    $search= $connexionDB->prepare($sqlQuery);
    $search->execute();
    $search= $search->fetchAll();


    // echo "</pre>";
    // print_r($search)."\n";
    // echo "</pre>";
    

?>




<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animated pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
		


<div class="container">
<div class="row">
  <!-- BEGIN SEARCH RESULT -->
  <div class="col-md-12">
    <div class="grid search">
      <div class="grid-body">
        <div class="row">
          <!-- BEGIN FILTERS -->
          <div class="col-md-3">
            <h2 class="grid-title"><i class="fa fa-filter"></i> Filters</h2>
            <hr>
        <form action="#!" method="post" id="form_filter">
            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>By category:</h4>
            <?php

            $query = "
            SELECT DISTINCT`marque`FROM annonce;
            ";
            $connexionDB=connexionDB();
            $statement = $connexionDB->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector marque" value="<?php echo $row['marque']; ?>"> <?php echo $row['marque']; ?></label>
            </div>
            <?php    
            }

            ?>
            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding mt-3"></div>
            <h4>By date:</h4>

            <?php
            if(isset($_GET["date_depart"]) && !empty($_GET["date_depart"]))
            {
              $date_depart=$_GET['date_depart'];
              $date_depart_conv=date("Y-m-d",strtotime($date_depart));
              ?>
            <!-- BEGIN FILTER BY DATE -->
            From
            <div class="input-group date form_date " >
              <input value="<?php echo $date_depart_conv;?>" id="date_depart" type="date" class="form-control common_selector_date">
            </div>
            <?php
            }
            else
            {
            ?>
             From
            <div class="input-group date form_date " >
              <input value="" id="date_depart" type="date" class="form-control common_selector_date">
            </div>
            <?php
            }
            ?>

            <?php
            if(isset($_GET["date_arrivee"]) && !empty($_GET["date_arrivee"]))
            {
              $date_arrivee=$_GET['date_arrivee'];
              $date_arrivee_conv=date("Y-m-d",strtotime($date_arrivee));
              ?>
            <!-- BEGIN FILTER BY DATE -->
            To
            <div class="input-group date form_date " >
              <input value="<?php echo $date_arrivee_conv;?>" id="date_arrivee" type="date" class="form-control common_selector_date">
            </div>
            <?php
            }
            else
            {
            ?>
              To
              <div class="input-group date form_date " >
                <input id="date_arrivee" type="date" class="form-control common_selector_date">
              </div>

            <?php
            }
            ?>


            <h4 class="mt-3">By place:</h4>






            <?php
            if(isset($_GET["ville_depart"]) && !empty($_GET["ville_depart"]))
            {
              $ville_depart=$_GET['ville_depart'];
              ?>
            <!-- BEGIN FILTER BY DATE -->
            ville_depart
            <div class="input-group date form_date " >
              <input value="<?php echo $ville_depart;?>" id="ville_depart" type="text" class="form-control common_selector_date">
            </div>
            <?php
            }
            else
            {
            ?>
            ville_depart
            <div class="input-group date form_date " >
              <input value="" id="ville_depart" type="text" class="form-control common_selector_date">
            </div>
            <?php
            }
            ?>
            
            <?php
            if(isset($_GET["ville_arrivee"]) && !empty($_GET["ville_arrivee"]))
            {
              $ville_arrivee=$_GET['ville_arrivee'];
              ?>
            <!-- BEGIN FILTER BY DATE -->
            ville_arrivee
            <div class="input-group date form_date " >
              <input value="<?php echo $ville_arrivee;?>" id="ville_arrivee" type="text" class="form-control common_selector_date">
            </div>
            <?php
            }
            else
            {
            ?>
              ville_arrivee
              <div class="input-group date form_date " >
                <input id="ville_arrivee" type="text" class="form-control common_selector_date">
              </div>

            <?php
            }
            ?>


            <!-- END FILTER BY DATE -->
            
            <div class="padding"></div>
            
            <!-- BEGIN FILTER BY PRICE -->
     
           
                <div class="form-row mt-3">
                <div class="form-group col-md-6">
                <div class="list-group">
                <h3>Price</h3>
                <label for="min-price" class="form-label">Min prix: </label>
                    <span id="min-price-txt">0 DH</span>
                    <br>
                    <input type="range" class="form-range common_selector_date" min="0" max="5000" id="hidden_minimum_price" step="100" value="0">
                    <br>
                    <label for="max-price" class="form-label">Max prix: </label>
                    <span id="max-price-txt">400000 DH</span><br>
                    <input type="range" class="form-range common_selector_date" min="1" max="5000" id="hidden_maximum_price" step="100" value="5000">
                </div>	
                </div>
              </div> <!-- form-row.// -->
        
	        
            <!-- END FILTER BY PRICE -->

        </form>
          </div>
          <!-- END FILTERS -->
          <!-- BEGIN RESULT -->
          <div class="col-md-9">
            <h2><i class="fa fa-file-o"></i> Result</h2>
            <hr>
            <!-- BEGIN SEARCH INPUT -->
            <div class="input-group">
              <input id="searchFilter" type="text" class="form-control common_selector_date" placeholder="ex : larache">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <!-- END SEARCH INPUT -->
            
            <div class="padding"></div>
            
            <div class="row">
              <!-- BEGIN ORDER RESULT -->
             
              <!-- END ORDER RESULT -->
              
            
            </div>

            <!-- BEGIN TABLE RESULT -->
            <div class="filter_data"></div>
            <!-- END TABLE RESULT -->
            


            <div class="d-flex justify-content-center my-5">
            <select class="common_selector_date" id="page">
            <?php
                $query = "SELECT COUNT(`id`) FROM `annonce`";
                $statement = $connexionDB->prepare($query);
                $statement->execute();
                $result = $statement->fetch();
                $nbrPages=ceil($result[0]/2);
                for ($i = 1; $i <=$nbrPages ; $i++) {
                ?>

                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                }
                ?>
            </select>
            </div>


            <!-- BEGIN PAGINATION -->
            <!-- <ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul> -->
            <!-- END PAGINATION -->
          </div>
          <!-- END RESULT -->
        </div>
      </div>
    </div>
  </div>
  <!-- END SEARCH RESULT -->
</div>
</div>


<style>

body{
}

.btn {
    margin-bottom: 5px;
}

.grid {
    position: relative;
    width: 100%;
    background: #fff;
    color: #666666;
    border-radius: 2px;
    margin-bottom: 25px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}

.grid .grid-body {
    padding: 15px 20px 15px 20px;
    font-size: 0.9em;
    line-height: 1.9em;
}

.search table tr td.rate {
    color: #f39c12;
    line-height: 50px;
}

.search table tr:hover {
    cursor: pointer;
}



.search table tr td.rate {
	color: #f39c12;
	line-height: 50px;
}

.search table tr td.price {
	font-size: 1.5em;
	line-height: 50px;
}

.search #price1,
.search #price2 {
	display: inline;
	font-weight: 600;
}
  </style>