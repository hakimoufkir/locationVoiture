

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Casa<span>Car</span></a>


    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto text-uppercase font-weight-normal">
	  <li class="nav-item "><a href="index.php" class="nav-link">Accueil</a></li>
	  <li class="nav-item"><a href="index.php?page=pricing" class="nav-link">Mes Annonces</a></li>
	  <li class="nav-item"><a href="index.php?page=faq" class="nav-link">FAQ</a></li>

      </ul>
      <!-- Links -->
      
	     <!-- si tu es connecte {deposer + deconx} sinon {email+mdp} -->
		 <?php 
            if(verfiSession())
              {
              require("server/front/connected.php");
              }
            else 
              {
                require("server/front/inscrire.php");
              }
            ?>  
    

    </div>
    <!-- Collapsible content -->

  </div>

</nav>
<!--/.Navbar-->
