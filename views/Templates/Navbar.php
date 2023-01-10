<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <?php if (isset($_SESSION["id_usuario"])) { ?>
      <a class="navbar-brand"  href="http://localhost/arbnb-clone/index.php?ac=h">Arbnb<i class="fa-solid fa-plane ms-2" style="height: 30px; width: 30px; color: white;"></i></a>
    <?php } else { ?>
      <a class="navbar-brand"  href="http://localhost/arbnb-clone/">Arbnb<i class="fa-solid fa-plane ms-2" style="height: 30px; width: 30px; color: white;"></i></a>
    <?php } ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (isset($_SESSION["id_usuario"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="apartment.php?ac=n">Create New Department</a>
          </li>
        <?php } ?>
        <?php if (isset($_SESSION["id_usuario"])) { ?>
          <li class="nav-item">
            <a class="nav-link"  href="apartment.php?ac=ma&idu=<?=$_SESSION["id_usuario"] ?>">Mis Apartamentos</a>
          </li>
        <?php } ?>
      </ul>
      <form class="d-flex align-items-center" role="search">
        <?php if (isset($_SESSION["id_usuario"])) { ?>
          <div class="d-flex align-items-center me-5 mt-2">
            <i class="fa-solid fa-user " style="height: 30px; width: 30px; color: white;"></i>
            <p class="" style="color: white;"><?= $_SESSION["username"] ?></p> 
          </div>
          <a href="logout.php" class="btn btn-outline-danger">LogOut</a>
        <?php } else { ?>
          <a href="login.php?ac=lg" class="btn btn-outline-success">Login</a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>