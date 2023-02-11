 <form class="form-inline mx-auto" method="post" action="index.php">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="email" placeholder="email" aria-label="email" name="emailConnexion">
        </div>
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="password" placeholder="password" aria-label="password" name="passwordConnexion">
        </div>
        <div class="md-form my-0">
         <button class="btn btn-success">Connexion</button>
        </div>

        <div class="md-form my-0">
         <a href="?page=inscription" class="btn btn-success">S'inscrir</a>
        </div>
        <!-- <?php 
        if(isset($erreurConnexion))
        {
          ?>
            <div class="alert alert-danger">
              Erreur de connexion !!!!
            </div>

          <?php
        }
        ?> -->
 </form>