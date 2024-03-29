<div class="container my-5 py-5 z-depth-1">

<?php 

$idannonce=$_GET['annonce'];
$sqlQuery = "SELECT `annonce`.*,`user`.`nom`,`user`.`prenom` FROM `annonce`,`user`  WHERE `annonce`.`id_user`= `user`.`id` AND `annonce`.`id`=$idannonce ";
$annonces = $connexionDB->prepare($sqlQuery);
$annonces->execute();
$annonces= $annonces->fetchAll();
 foreach ($annonces as $annonce) {
?>
  <!--Section: Content-->
  <section class="text-center">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-5">Product Details</h3>

    <div class="row">

      <div class="col-lg-6">

          <!--Slides-->
          <div class="carousel-inner text-center text-md-left" role="listbox">
            <div class="carousel-item active">
              <img src="assets/photos/<?php echo $annonce["photo"];?>"
                alt="First slide" class="img-fluid">
            </div>


        </div>
        <!--/.Carousel Wrapper-->

      </div>

      <div class="col-lg-5 text-center text-md-left">

        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
          <strong><?php echo $annonce["marque"];?></strong>
        </h2>
        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4"><?php echo $annonce["modele"];?></span>
        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
          <span class="red-text font-weight-bold">
            <strong><?php echo $annonce["prixph"];?>DH</strong>
          </span>
          <span class="grey-text">
            <small>
              <s>$89</s>
            </small>
          </span>
        </h3>

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <h5 class="mb-0">
                  Description
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              <?php echo $annonce["description"];?>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                aria-expanded="false" aria-controls="collapseTwo2">
                <h5 class="mb-0">
                  Details
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
              data-parent="#accordionEx">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                moon
                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingThree3">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                aria-expanded="false" aria-controls="collapseThree3">
                <h5 class="mb-0">
                  Shipping
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
              data-parent="#accordionEx">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                moon
                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

        </div>
        <!--/.Accordion wrapper-->

        <!-- Add to Cart -->
        <section class="color">
            <div class="row mt-3">
              <div class="col-md-12 text-center text-md-left text-md-right">
               
                <a href="index.php"> Precedent
                <button class="btn btn-success btn-rounded"></a> 
                <i class="fab fa-whatsapp"></i></i><?php require("server/back/number.php");?></button>
              </div>
            </div>
          </div>
        </section>
        <!-- /.Add to Cart -->

      </div>

    </div>

  </section>
  <!--Section: Content-->

<?php
} 
?>
</div>