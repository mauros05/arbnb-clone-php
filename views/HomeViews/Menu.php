<main role="main">
  <?php require_once "views/Components/Banner.php"; ?>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      <?php for ($i = 0; $i < count($res["nombre"]); $i++){ ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow card-apartment">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://th.bing.com/th/id/R.9dcea427c53a13bd14ffabb616695283?rik=78OKYed8RImlhQ&pid=ImgRaw&r=0" data-holder-rendered="true">
            <div class="card-body">
              <h3><?= $res["nombre"][$i] ?></h3>
              <p class="card-text"><?= substr($res["descripcion"][$i],0, 60) ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="apartment.php?ac=s&idap=<?= $res["id_apartment"][$i] ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <span class="text-muted"><i class="fa-sharp fa-solid fa-dollar-sign"></i><small class="text-muted"><?= $res["precio"][$i] ?></small></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</main>

<style>
  .fa-dollar-sign{
    color: green;
    margin-right: 4px;
  }
</style>