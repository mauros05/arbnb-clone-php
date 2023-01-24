<div class="container" >
  <form action="" method="" enctype="multipart/form-data" class="mt-3" id="create-apartament">
    <h1 class="mb-3">New Apartament</h1>
    
    <div class="row mb-4">
      <div class="col">
        <div>
          <label for="name" class="form-label">Name:</label>
          <input type="text"  class="form-control" name="name" id="name" value=''/>
          <div id="name-error" style="color: red" hidden></div>
        </div>
      </div>

      <div class="col">
        <div>
          <label for="address" class="form-label">Address:</label>
          <input type="text" name="address" class="form-control" id="address" value=''/>
          <div id="address-error" style="color: red" hidden></div>
        </div>
      </div>

      <div class="col">
        <div>
          <label for="price" class="form-label">Price per night:</label>
          <input type="number" name="price" class="form-control" id="price" value=''/>
          <div id="price-error" style="color: red" hidden></div>
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description:</label>
      <textarea type="text" name="description" class="form-control" id="description" value=''></textarea>
      <div id="description-error" style="color: red" hidden></div>
    </div>

    <input type="text" name="id_user" value="<?= $_SESSION["id_usuario"] ?>" hidden>
    <input type="text" name="action" value="ca" hidden>
        
    <button type="button" class="btn btn-dark mt-3 mb-3" id="createApartament">Create</button>
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