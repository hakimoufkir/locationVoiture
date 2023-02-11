<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animated pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Mes Annonces</h1>
          </div>
        </div>
      </div>
</section>


				

	 <?php
	require("server/back/pagination.php");
    foreach ($annonces as $annonce) {
	 ?>



    <section class="ftco-section ftco-cart p-0">
			<div class="container">
				<div class="row">
    			<div class="col-md-18 ftco-animated">
	    				<table class="table">
						    <tbody>
								<tr class="">
								  <td>
								   
										
								  </td>
								  <td>
								  <img class="car-image img" src="assets/photos/<?php
								  echo $annonce["photo"]?>" height="100px" width="200px">	   	 
								</td>
						        <td class="product-name">
									<!-- marque -->
						        	<h3><?php echo $annonce["marque"]?></h3>

						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
											<!-- prixph -->
							        		<span class="num"><small 
											class="currency"></small><?php echo $annonce["prixph"]?></span>
							        		<span class="per">/per hour</span>
							        	</h3>
						        	</div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
											<!-- prixpj -->
							        		<span class="num"><small class="currency"></small><?php echo $annonce["prixpj"]?></span>
							        		<span class="per">/per day</span>
							        	</h3>
						        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
											<!-- prixpm -->
							        		<span class="num"><small class="currency"></small><?php echo $annonce["prixpm"]?></span>
							        		<span class="per">/per month</span>
							        	</h3>
							        </div>
						        </td>
								<!-- remove -->
								<td class="price">
								<a href="server/back/removeAnonnce.php?idRemove=<?php echo $annonce["id"]?>" class="far fa-trash-alt"></a>
								</td>
								<!-- modify -->
								<td class="price">
								<a href="index.php?page=modify&id=<?php echo $annonce["id"]?>" class="fas fa-edit"></a>		</td>
						      </tr><!-- END TR-->
							  <?php
		}
		?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>

			<!-- search-->
			<nav aria-label="Page navigation example">
					<ul class="pagination pg-blue d-flex justify-content-center">
					<li class="page-item <?php echo $disabled = ($nbrpage == 1) ? 'disabled' : '';?>">
					<a href="<?php echo $lien?>page=pricing&nbrpage=<?php echo $nbrpage-1?>" class="page-link" tabindex="-1">Previous</a>
					</li>

					<?php 
					for($i=1;$i<=$nbrPages;$i++)
					{
						?>
							<li class="page-item <?php echo $active = ($i == $nbrpage) ? 'active' : '';?>"><a href="<?php echo $lien?>page=pricing&nbrpage=<?php echo $i?>" class="page-link"><?php echo $i?></a></li>
						<?php
					}
					?>
				

				
				<li class="page-item <?php echo $disabled = ($nbrpage == $nbrPages) ? 'disabled' : '';?>">
				<a href="<?php echo $lien?>page=pricing&nbrpage=<?php echo $nbrpage+1?>" class="page-link">Next</a>
				</li>
			</ul>
			</nav>


	</section>

