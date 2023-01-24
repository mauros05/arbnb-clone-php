<form action="">
  <main role="main">
    <div class="jumbotron">
      <div class="card-category" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(https://a0.muscache.com/im/pictures/miso/Hosting-37914529/original/4619bdce-dfdb-45ff-86f8-a8700cdae496.jpeg?im_w=960)">
        <?= $res["nombre"]; ?>
      </div>
      <div class="container mt-4">
        <p>Address: <strong><?= $res["direccion"]; ?></strong></p>
        <p>Owner: <strong><?= $res["nombre_completo"]; ?></strong></p>
        <p>Description: <?= $res["descripcion"]; ?></p>
        <p>Price: <strong><?= $res["precio"]; ?></strong></p>

        <hr>
        <div class="d-flex">
          <?php if(isset($_SESSION)) {?>
            <?php if($_SESSION["id_usuario"] != $res["id_usuario"]) {?>
              <p class="mt-2 mb-2"><a class="btn btn-dark btn-lg me-2" href="bookings.php?ac=r&idap=<?= $res["id_apartment"] ?>&idu=<?= $_SESSION["id_usuario"] ?>" role="button">Book</a></p>
            <?php } ?>
          <?php } else { ?>
            <p class="mt-2 mb-2"><a class="btn btn-dark btn-lg me-2" href="login.php?ac=lg" role="button">Book</a></p>
          <?php }  ?>
          <?php if (isset($_SESSION["id_usuario"]) && $_SESSION["id_usuario"] == $res["id_usuario"]) { ?>
              <?php var_dump($res); ?>
              <p class="mt-2 mb-2"><a class="btn btn-primary btn-lg me-2" href="apartment.php?ac=e&idap=<?= $res["id_apartment"] ?>" role="button">Edit</a></p>
              <p class="mt-2 mb-2"><a href="apartment.php?ac=e&idap=<?= $res["id_apartment"] ?>" role="button"></a></p>
              <p class="mt-2 mb-2"><button  type="button" class="btn btn-warning btn-lg" id="delete-apartment">Delete</button></p>   
          <?php } ?>
        </div>
      </div>
    </div>  
  </main>

  <input type="text"  id="id-apartment" value="<?= $res["id_apartment"] ?>" hidden>

  <!-- Modal para seleccionar la accion de borrar  -->
  <div class="modal fade" id="modalDeleteApartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Surely you want to delete this Apartment?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="btn-borrar-modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Modal para mostrar que la accion se realizo -->
<div class="modal fade" id="modalAccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="div-message">
        ...
      </div>
    </div>
  </div>
</div>

<style>
  .card-category {
    background-size: cover;
    background-position: center;
    height: 180px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 24px;
    font-weight: bold;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    border-radius: 5px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
  }


</style>