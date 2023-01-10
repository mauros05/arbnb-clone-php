<div class="container" >
    <form action="" method="" enctype="multipart/form-data" class="mt-3" id="crear-apartamento">
        <h1 class="mb-3">Reservar Apartamento</h1>

        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="nombre" class="form-label">Fecha de Inicio:</label>
                    <input type="date"  class="form-control" name="nombre" id="nombre" value=''/>
                    <div id="nombre-error" style="color: red" hidden></div>
                </div>
            </div>

            <div class="col">
                <div>
                    <label for="direccion" class="form-label">Fecha de Finalizacion:</label>
                    <input type="date" name="direccion" class="form-control" id="direccion" value=''/>
                    <div id="direccion-error" style="color: red" hidden></div>
                </div>
            </div>
        </div>

        <input type="text" name="id_apartment" value="<?= $_SESSION["id_usuario"] ?>" hidden>
        <input type="text" name="id_user_booking" value="<?= $_SESSION["id_usuario"] ?>" hidden>
        <input type="text" name="accion" value="cb" hidden>
            
        <button type="button" class="btn btn-dark mt-3 mb-3" id="crearApartamento">Crear</button>
    </form>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card text-black">
                    
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title"><?= $res["nombre_ap"] ?></h5>
                            <p class="text-muted mb-4"><?= $res["direccion"] ?></p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span>Dueño</span><span><?= $res["nombre_us"] ?></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Precio por noche</span><span>$<?= $res["precio"] ?></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Numero de Noches</span><span>0</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                            <span>Total</span><span>$0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card text-black">
                    
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Perfil de quien Reserva</h5>
                            <p class="mb-4" style="color: blue;">Verifica tus datos</p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span>Tu:</span><span><?= $res["nombre_us_booking"] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
