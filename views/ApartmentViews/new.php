<div class="container">
    <form action="" method="post" enctype="multipart/form-data" class="mt-3" id="crear-solicitud">
        <h1 class="mb-3">Crear Departamento</h1>
			
        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="folio" class="form-label">Nombre:</label>
                    <input type="text"  class="form-control" name="nombre" id="nombre" value=''/>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="fecha" class="form-label">Direccion:</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value=''/>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="fecha" class="form-label">Precio:</label>
                    <input type="number" name="precio" class="form-control" id="precio" value=''/>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <textarea type="text" name="descripcion" class="form-control" id="descripcion" value=''></textarea>
            <div id="descripcionAlert" style="color: red" hidden></div>
        </div>
            
        <button type="button" class="btn btn-dark mt-3 mb-3" id="crearSolicitud">Crear Departamento</button>
    </form>
</div>