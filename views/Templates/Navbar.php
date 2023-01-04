<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Arbnb</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php if (isset($_SESSION["id_usuario"])) { ?>
          <a class="nav-link active" aria-current="page" href="http://localhost/arbnb-clone/index.php?ac=h">Home</a>
        <?php } else { ?>
          <a class="nav-link active" aria-current="page" href="http://localhost/arbnb-clone/">Home</a>
        <?php } ?>
        </li>
        <?php if (isset($_SESSION["id_usuario"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="apartment.php?ac=n">Create New Department</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link disabled">Mis Apartamentos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <?php if (isset($_SESSION["id_usuario"])) { ?>
          <a href="logout.php" class="btn btn-outline-danger">LogOut</a>
        <?php } else { ?>
          <a href="login.php?ac=lg" class="btn btn-outline-success">Login</a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>