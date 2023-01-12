<div class="container">
    <form action="" method="" enctype="multipart/form-data" class="mt-3" id="editar-apartamento">
        <h1 class="mb-3">Edit Apartament</h1>
			
        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="nombre" class="form-label">Name:</label>
                    <input type="text"  class="form-control" name="nombre" id="nombre" value='<?php echo isset($res["nombre"])? $res["nombre"] : "" ?>'/>
                    <div id="nombre-error" style="color: red" hidden></div>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="direccion" class="form-label">Adress:</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value='<?php echo isset($res["direccion"])? $res["direccion"] : "" ?>'/>
                    <div id="direccion-error" style="color: red" hidden></div>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="precio" class="form-label">Price per night:</label>
                    <input type="number" name="precio" class="form-control" id="precio" value='<?php echo isset($res["precio"])? $res["precio"] : "" ?>'/>
                    <div id="precio-error" style="color: red" hidden></div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Description:</label>
            <textarea type="text" name="descripcion" class="form-control" id="descripcion"><?php echo isset($res["descripcion"])? $res["descripcion"] : "" ?></textarea>
            <div id="descripcion-error" style="color: red" hidden></div>
        </div>

        <input type="text" name="id_apartment" value="<?= $res["id_apartment"] ?>" hidden>
        <input type="text" name="id_usuario" value="<?= $_SESSION["id_usuario"] ?>" hidden>
        <input type="text" name="accion" value="ea" hidden>
            
        <button type="button" class="btn btn-dark mt-3 mb-3" id="editarApartamento">Edit</button>
    </form>
</div>


<div class="modal fade" id="modalCreateApartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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