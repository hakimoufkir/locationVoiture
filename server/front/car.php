
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
		






	<form class="form-inline my-2 my-lg-0 ml-auto" method="get" action="index.php" id="frm_search">
		<input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search" id="search">
		<button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
 	</form>
				


<section class="text-center dark-grey-text">

<h2 class="font-weight-bold text-center dark-grey-text pb-2">
Tous Les voitures :
</h2>
<hr class="w-header my-4">
<!-- Section description -->












<!-- Grid row -->
<div class="row">
    	<?php
	require("server/back/pagination.php");
    foreach ($annonces as $annonce) {
		?>
  <!-- Grid column -->
  <div class="col-md-4 mb-4">

	<div class="view z-depth-1 mb-4">
	  <img src='assets/photos/<?php echo $annonce["photo"]?>' class="img-fluid mx-auto w-100" alt="smaple image">
	</div>
	<h6 class="font-weight-bold"><?php echo $annonce["titre"]?></h6>
	<small class="text-muted text-uppercase"><?php echo $annonce["marque"]?></small>
	<p class="mt-3 text-muted text-left"><?php echo substr($annonce["description"], 0, 200); ?> ...</p>
	<ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 text-muted">
	  <li><i class="fab fa-twitter mx-2"></i></li>
	  <li><i class="fab fa-facebook-f mx-2"></i></li>
	  <li><i class="fab fa-instagram mx-2"></i></li>
	</ul>

  <a href="index.php?annonce=<?php echo $annonce["id"]?>" class="btn btn-primary py-1 px-2">Lire la suite</a>
  </div>
  <!-- Grid column -->
  <?php
	  }
?>
</div>
<!-- Grid row -->
<hr/>
<nav aria-label="Page navigation example">
  <ul class="pagination pg-blue d-flex justify-content-center">
	<li class="page-item <?php echo $disabled = ($nbrpage == 1) ? 'disabled' : '';?>">
	  <a href="<?php echo $lien?>page=car&nbrpage=<?php echo $nbrpage-1?>" class="page-link" tabindex="-1">Previous</a>
	</li>

	  <?php 
	  for($i=1;$i<=$nbrPages;$i++)
	  {
		  ?>
			<li class="page-item <?php echo $active = ($i == $nbrpage) ? 'active' : '';?>"><a href="<?php echo $lien?>page=car&nbrpage=<?php echo $i?>" class="page-link"><?php echo $i?></a></li>
		  <?php
	  }
	  ?>
	

	
	<li class="page-item <?php echo $disabled = ($nbrpage == $nbrPages) ? 'disabled' : '';?>">
	  <a href="<?php echo $lien?>page=car&nbrpage=<?php echo $nbrpage+1?>" class="page-link">Next</a>
	</li>
  </ul>
</nav>
</section>








<!-- <section class="ftco-section bg-light">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<?php
								$connexionDB=connexionDB();
								$sqlQuery = "SELECT `annonce`.*,`user`.`nom`,`user`.`prenom` FROM `annonce`,`user`  WHERE `annonce`.`id_user`= `user`.`id`";
								$annonces = $connexionDB->prepare($sqlQuery);
								$annonces->execute();
								$annonces= $annonces->fetchAll();

								foreach ($annonces as $annonce) {
								?>
								<div class="car-wrap rounded ftco-animated">

									<div class="img rounded d-flex align-items-end" style="background-image: url(assets/photos/<?php echo $annonce["photo"];?>);">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="car-single.html"><?php echo $annonce["marque"];?></a></h2>
										<div class="d-flex mb-3">
											<span class="cat"><?php echo $annonce["modele"];?></span>
											<p class="price ml-auto"><?php echo $annonce["prixpj"];?>DH<span>/day</span></p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
									</div>
								</div>

								<?php } ?>
							</div>
							<div class="col-md-4">
											<?php
									$connexionDB=connexionDB();
									$sqlQuery = "SELECT `annonce`.*,`user`.`nom`,`user`.`prenom` FROM `annonce`,`user`  WHERE `annonce`.`id_user`= `user`.`id`";
									$annonces = $connexionDB->prepare($sqlQuery);
									$annonces->execute();
									$annonces= $annonces->fetchAll();

									foreach ($annonces as $annonce) {
									?>
												<div class="car-wrap rounded ftco-animated">
													<div class="img rounded d-flex align-items-end" style="background-image: url(assets/photos/<?php echo $annonce["photo"];?>);">
													</div>
													<div class="text">
														<h2 class="mb-0"><a href="car-single.html"><?php echo $annonce["marque"];?></a></h2>
														<div class="d-flex mb-3">
															<span class="cat"><?php echo $annonce["modele"];?></span>
															<p class="price ml-auto"><?php echo $annonce["prixpj"];?> <span>/day</span></p>
														</div>
														<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
													</div>
												</div>
												<?php } ?>
							</div>
							<div class="col-md-4">
											<?php
									$connexionDB=connexionDB();
									$sqlQuery = "SELECT `annonce`.*,`user`.`nom`,`user`.`prenom` FROM `annonce`,`user`  WHERE `annonce`.`id_user`= `user`.`id`";
									$annonces = $connexionDB->prepare($sqlQuery);
									$annonces->execute();
									$annonces= $annonces->fetchAll();

									foreach ($annonces as $annonce) {
									?>
												<div class="car-wrap rounded ftco-animated">
													<div class="img rounded d-flex align-items-end" style="background-image: url(assets/photos/<?php echo $annonce["photo"];?>);">
													</div>
													<div class="text">
														<h2 class="mb-0"><a href="car-single.html"><?php echo $annonce["marque"];?></a></h2>
														<div class="d-flex mb-3">
															<span class="cat"><?php echo $annonce["modele"];?></span>
															<p class="price ml-auto"><?php echo $annonce["prixpj"];?>DH<span>/day</span></p>
														</div>
														<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
													</div>
												</div>
												<?php } ?>
							</div>								
						</div>
						 <div class="row mt-5">
							<div class="col text-center">
								<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
								</div>
							</div>
						 </div>
					</div>
</section> -->

<!-- <div class="row">
	<div class="col-md-4">
		<?php
		$connexionDB=connexionDB();
		$sqlQuery = "SELECT `annonce`.*,`user`.`nom`,`user`.`prenom` FROM `annonce`,`user`  WHERE `annonce`.`id_user`= `user`.`id`";
		$annonces = $connexionDB->prepare($sqlQuery);
		$annonces->execute();
		$annonces= $annonces->fetchAll();

		foreach ($annonces as $annonce) {
		?>
		<div class="car-wrap rounded ftco-animated">

			<div class="img rounded d-flex align-items-end" style="background-image: url(assets/photos/<?php echo $annonce["photo"];?>);">
			</div>
			<div class="text">
				<h2 class="mb-0"><a href="car-single.html"><?php echo $annonce["marque"];?></a></h2>
				<div class="d-flex mb-3">
					<span class="cat"><?php echo $annonce["modele"];?></span>
					<p class="price ml-auto"><?php echo $annonce["prixpj"];?>DH<span>/day</span></p>
				</div>
				<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
			</div>
		</div>

		<?php } ?>
	</div>
<div class="row mt-5"> -->