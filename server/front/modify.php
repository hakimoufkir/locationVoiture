<h2 class="font-weight-bold mb-4 text-center m-5 text-info">modifier votre annone</h2>


<?php
    if(isset($_GET['id'])){
    $idModify = $_GET['id'];
    $connexionDB=connexionDB();
    $sqlQuery = "SELECT * FROM `annonce` WHERE `id`= $idModify";
    $modify = $connexionDB->prepare($sqlQuery);
    $modify->execute();
    $modify= $modify->fetchAll();
    // print_r($modify);
    foreach ($modify as $modif) {
    }
?>


<!-- etape 01 -->
  <div class="container my-5 py-5 z-depth-2">

  <!--Section: Content-->
  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


    <!--Grid row-->
    <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6">

        <!-- Default form contact -->
        <form class="text-center" action="server/back/updateAnnonce.php" method="post" enctype="multipart/form-data">

          <!-- id -->
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">

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
            <option value="0" selected><?php echo $modif['marque'];?></option>
            <option value="1" >Marque</option>
            <option value="Dacia">Dacia</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Renaut">Renaut</option>
          </select>
          <select class="browser-default custom-select mb-4" name="modele" required>
            <option value="" disabled>Choose option</option>
            <option value="0" selected><?php echo $modif['modele'];?></option>
            <option value="1" >Modele</option>
            <option value="52S">52S</option>
            <option value="6L">1.6L</option>
            <option value="larache">larache</option>
          </select>
          <select class="browser-default custom-select mb-4" name="annee" required>
            <option value="" disabled>Choose option</option>
            <option value="0" selected><?php echo $modif['annee'];?></option>
            <option value="1" >annee</option>
            <option value="2017">2017</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
          </select>


          <label>Image de votre Voiture</label>
          </br>
          <img src="assets/photos/<?php echo $modif['photo'];?>" width="200px">
          <input type="file" name="chphoto" id="chphoto" class="form-control" placeholder="Phone number" aria-describedby="descriphoto">
            <small id="descriphoto" class="form-text text-muted mb-4">
                (.jpg, .png, .gif)
            </small>
<!-- /etape 01 -->

<!-- etape 02 -->
  <h3 class="font-weight-bold mb-4">Voiture Date</h3>

  <label for="" class="label">Pick-up date</label>
  <input type="text"  name="date_depart"  class="custom-select mb-4 " id="book_pick_date" placeholder="Date" value="<?php echo $modif['date_depart'];?>">
  <label for="" class="label">Drop-off date</label>
  <input type="text"  name="date_arrivee" class="custom-select mb-4 " id="book_off_date" placeholder="Date" value="<?php echo $modif['date_arrivee'];?>">
  <label for="" class="label">Pick-up time</label>
  <input type="text"  name="temps" class="custom-select mb-4 " id="time_pick" placeholder="Time" value="<?php echo $modif['temps'];?>">
<!-- /etape 02 -->

<!-- etape 03 -->
  <h3 class="font-weight-bold mb-4">Description de votre annone</h3>

         <!-- browser-default custom-select mb-4  -->
         
           <label for="Titre" class="">Titre</label>
           </br>
            <input type="text" id="subject" name="titre" class="form-control" value="<?php echo $modif['titre'];?>">

          </br>
          <label for="subject" class="">description</label>

                    <textarea name="description" class="form-control" placeholder="Texte de l’annonce" aria-label="With textarea"><?php echo $modif['description'];?></textarea>
            </br>

            <label for="subject" class="float-left">Prix par heure</label>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">MAD</span>
              </div>
              <input type="text" name="prixph" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $modif['prixph'];?>">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>

            <label for="subject" class="float-left">Prix par jour</label>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">MAD</span>
              </div>
              <input type="text" class="form-control"  name="prixpj" aria-label="Amount (to the nearest dollar)" value="<?php echo $modif['prixpj'];?>">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>


            <label for="subject" class="float-left" >Prix par mois</label>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">MAD</span>
              </div>
              <input type="text" name="prixpm" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $modif['prixpm'];?>">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
<!-- /etape 03 -->









<?php
    }
?>





          <!-- Send button -->
<!--         
          <a href="?page=2etape" value="Submit" class="btn btn-success">Suivant</a> -->

          <input type="submit" value="modify" class="btn btn-success">


        </form>
        <!-- Default form contact -->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->


  </section>
  <!--Section: Content-->


</div>


