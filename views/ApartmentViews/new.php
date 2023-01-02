<div class="container">
    <form action="" method="post" enctype="multipart/form-data" class="mt-3" id="crear-solicitud">
        <h1 class="mb-3">Crear Solicitud de Compra</h1>
			
        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="folio" class="form-label">Nombre:</label>
                    <input type="text"  class="form-control" name="folio" id="folio" value='<?php echo $folio; ?>' readonly='readonly'/>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="fecha" class="form-label">Direccion:</label>
                    <input type="text" name="fecha" class="form-control" id="fecha" value='<?php echo date("Y-m-d"); ?>' readonly='readonly'/>
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="departamento" class="form-label">Usuario:</label>
            <input type="text"  class="form-control" id="departament" value='<?php echo $_SESSION['nombre']; ?>' readonly='readonly'/>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="departamento" class="form-label">Departamento:</label>
                <input type="text"  class="form-control" id="departament" value='<?php echo $resUsuario['departamento']; ?>' readonly='readonly'/>
            </div>
            
            <div class="col">
                <label for="lider" class="form-label">Lider de Departamento:</label>
                <input type="text" class="form-control" id="lider" value='<?php echo $resUsuario['nombre_lider']; ?>' readonly='readonly'/>
            </div>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <textarea type="text" name="descripcion" class="form-control" id="descripcion" value=''></textarea>
            <div id="descripcionAlert" style="color: red" hidden></div>
        </div>
            
        <button type="button" class="btn btn-primary mt-3 mb-3" id="crearSolicitud">Crear Solicitud</button>
        
    </form>
</div>