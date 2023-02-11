



    <ul class="navbar-nav ml-auto nav-flex-icons">
        <!-- <li class="nav-item">
          <a class="nav-link font-weight-normal waves-effect waves-light">1
            <i class="fas fa-envelope"></i> -->
          </a>
        </li>
        <?php 
		if(verfiSession())
			{
			echo '<li class="nav-item "><a href="index.php?page=deposer" class="nav-link  haha "><p>Deposer une voiture</p></a></li>';
			}
      ?>  
        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
			<img src="assets/photos/<?php echo $_SESSION['info']['avatar']?>" height="30px" width="30px" class="rounded-circle"
              alt="avatar image">
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-dark"
            aria-labelledby="navbarDropdownMenuLink-55">
			<a class="dropdown-item" href="index.php?page=pricing">Mes anonnces</a>
            <a class="dropdown-item" href="?logout">Se deconnecter</a>
          </div>
        </li>
      </ul>