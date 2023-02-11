
<section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center  mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
					<?php
					$connexionDB=connexionDB();
					$sqlQuery = "SELECT `annonce`.*,`user`.`nom`,`user`.`prenom` FROM `annonce`,`user`  WHERE `annonce`.`id_user`= `user`.`id`";
					$annonces = $connexionDB->prepare($sqlQuery);
					$annonces->execute();
					$annonces= $annonces->fetchAll();

					foreach ($annonces as $annonce) {

					?>
    					<div class="item" id="<?php	echo $annonce["id"]?>">
    						<div class="car-wrap rounded ">
							<img class="car-image img" src="assets/photos/<?php
								  echo $annonce["photo"]?>" height="100px" width="200px">	
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php
								  echo $annonce["marque"]?></a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat"><?php
								  echo $annonce["modele"]?></span>
			    						<p class="price ml-auto"><?php
								  echo $annonce["prixpj"]?> DH<span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="index.php?annonce=<?php echo $annonce["id"]?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
							<?php
							}
							?>	
    					</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



