<div class="container">
    <form action="" method="" enctype="multipart/form-data" class="mt-3" id="crear-apartamento">
        <h1 class="mb-3">Editar Apartamento</h1>
			
        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text"  class="form-control" name="nombre" id="nombre" value=''/>
                    <div id="nombre-error" style="color: red" hidden></div>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="direccion" class="form-label">Direccion:</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value=''/>
                    <div id="direccion-error" style="color: red" hidden></div>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" name="precio" class="form-control" id="precio" value=''/>
                    <div id="precio-error" style="color: red" hidden></div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <textarea type="text" name="descripcion" class="form-control" id="descripcion" value=''></textarea>
            <div id="descripcion-error" style="color: red" hidden></div>
        </div>

        <input type="text" name="id_usuario" value="<?= $_SESSION["id_usuario"] ?>" hidden>
        <input type="text" name="accion" value="ca" hidden>
            
        <button type="button" class="btn btn-dark mt-3 mb-3" id="crearApartamento">Crear Apartamento</button>
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