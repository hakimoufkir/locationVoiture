
<section id="posts" class="posts">
      <div class="container mt-4" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-12">
<!-- Horizontal Steppers -->
<div class="row">
  <div class="col-md-12">

    <!-- Stepers Wrapper -->
    <ul class="stepper stepper-horizontal">

      <!-- First Step -->
      <li class="completed">
        <a href="#!">
          <span class="circle">1</span>
          <span class="label">Commencez par l’essentiel</span>
        </a>
      </li>

      <!-- Second Step -->
      <li class="warning">
        <a href="#!">
          <span class="circle">2</span>
          <span class="label">Décrivez-nous votre véhicule</span>
        </a>
      </li>

      <!-- Third Step -->
      <li class="warning">
        <a href="#!">
          <span class="circle">3</i></span>
          <span class="label">Deposer!</span>
        </a>
      </li>

    </ul>
    <!-- /.Stepers Wrapper -->

  </div>
</div>
<!-- /.Horizontal Steppers -->

</div>

</div> <!-- End .row -->
</div>
</section> <!-- End Post Grid Section -->




<!-- etape 01 -->
  <div class="container my-5 py-5 z-depth-2">

  <!--Section: Content-->
  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


    <!--Grid row-->
    <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6">

        <!-- Default form contact -->
        <form class="text-center" action="server/back/validerDesposer.php" method="post" enctype="multipart/form-data">

         <h3 class="font-weight-bold mb-4">Locataire Information</h3>

          <!-- nom -->
          <input type="text" name="nom" required disabled id="defaultContactFormName" class="form-control mb-4" value="<?php echo $_SESSION['info']['nom'];?>">
          <!-- prenom -->
          <input type="text" name="prenom" required disabled id="defaultContactFormName" class="form-control mb-4" value="<?php echo $_SESSION['info']['prenom'];?>">

          <!-- Email -->
          <input type="email" name="email" required disabled id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $_SESSION['info']['email']?>">

          <!-- telephone -->
          <input type="tel" name="tele" disabled required id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $_SESSION['info']['tele']?>">

          <!-- Subject -->
          <h3 class="font-weight-bold mb-4">Voiture Information</h3>
          <select class="browser-default custom-select mb-4" name="marque" required>
            <option value="" disabled>Choose option</option>
            <option value="1" selected>Marque</option>
            <option value="Dacia">Dacia duster</option>
            <option value="Mercedes">Mercedes benze</option>
            <option value="Renaut">Renaut clio 4</option>
            <option value="toyota">toyota</option>
            <option value="megan">renault megan</option>
          </select>
          <select class="browser-default custom-select mb-4" name="modele" required>
            <option value="" disabled>Choose option</option>
            <option value="1" selected>Modele</option>
            <option value="52S">coupés</option>
            <option value="6L">berlines</option>
            <option value="larache">hayons</option>
            <option value="larache">SUV</option>
            <option value="larache">Les mini-fourgonnettes</option>
          </select>
          <select class="browser-default custom-select mb-4" name="annee" required>
            <option value="" disabled>Choose option</option>
            <option value="1" selected>annee</option>
            <option value="2017">2017</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2020">2021</option>
            <option value="2020">202</option>
          </select>


          <label>Image de votre Voiture</label>
          <input type="file" name="chphoto" id="chphoto" class="form-control" placeholder="Phone number" aria-describedby="descriphoto">
            <small id="descriphoto" class="form-text text-muted mb-4">
                (.jpg, .png, .gif)
            </small>
<!-- /etape 01 -->

<!-- etape 02 -->
  <h3 class="font-weight-bold mb-4">Voiture Date</h3>

  <label for="" class="label">Pick-up date</label>
  <input type="text"  name="date_depart"  class="custom-select mb-4 " id="book_pick_date" placeholder="Date">
  <label for="" class="label">Drop-off date</label>
  <input type="text"  name="date_arrivee" class="custom-select mb-4 " id="book_off_date" placeholder="Date">
  <label for="" class="label">Pick-up time</label>
  <input type="text"  name="temps" class="custom-select mb-4 " id="time_pick" placeholder="Time">
<!-- /etape 02 -->

<!-- etape 03 -->
  <h3 class="font-weight-bold mb-4">Description de votre annone</h3>

         <!-- browser-default custom-select mb-4  -->

         <div class="md-form mb-0">
            <input type="text" id="subject" name="titre" class="form-control">
            <label for="subject" class="">Titre</label>
       
        
            </br>

                    <textarea name="description" class="form-control" placeholder="Texte de l’annonce"></textarea>
            </br>

            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">MAD</span>
              </div>
              <input type="text" placeholder="Prix par heure" name="prixph" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>


            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">MAD</span>
              </div>
              <input type="text" placeholder="Prix par jour" class="form-control"  name="prixpj" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>



            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">MAD</span>
              </div>
              <input type="text" placeholder="Prix par mois" name="prixpm" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
<!-- /etape 03 -->















          <!-- Send button -->
<!--         
          <a href="?page=2etape" value="Submit" class="btn btn-success">Suivant</a> -->

          <input type="submit" value="Submit">


        </form>
        <!-- Default form contact -->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->


  </section>
  <!--Section: Content-->


</div>


	
