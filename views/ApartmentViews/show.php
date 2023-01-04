<form action="">
<main role="main">
    <div class="jumbotron mt-5">
        <div class="container">
            <h1 class="display-3"><?= $res["nombre"]; ?></h1>
            <p>Direccion: <span><?= $res["direccion"]; ?></span></p>
            <p>Owner: <span><?= $res["nombre_completo"]; ?></span></p>
            <div class="d-flex">
                <p class="mt-2 mb-2"><a class="btn btn-dark btn-lg me-2" href="#" role="button">Reservar</a></p>
                <?php if (isset($_SESSION["id_usuario"]) && $_SESSION["id_usuario"] == $res["id_usuario"]) { ?>
                    <p class="mt-2 mb-2"><a class="btn btn-primary btn-lg me-2" href="apartment.php?ac=e&idap=<?= $res["id_apartment"] ?>" role="button">Editar</a></p>
                    <p class="mt-2 mb-2"><a href="apartment.php?ac=e&idap=<?= $res["id_apartment"] ?>" role="button"></a></p>
                    <p class="mt-2 mb-2"><button  type="button" class="btn btn-warning btn-lg" id="delete-apartment">Borrar</button></p>   
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Price: <span><?= $res["precio"]; ?></span></h2>
                <p><?= $res["descripcion"]; ?></p>
            </div>
        </div>
        <hr>
    </div>
</main>

<footer class="container">
    <p>© Company 2017-2018</p>
</footer>

<input type="text"  id="id-apartment" value="<?= $res["id_apartment"] ?>" hidden>

<div class="modal fade" id="modalDeleteApartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Seguro que quieres borrar este Apartamento?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="btn-borrar-modal">Borrar</button>
      </div>
    </div>
  </div>
</div>
</form>