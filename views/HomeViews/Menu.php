<main role="main">
  <section class="jumbotron text-center mt-5 mb-5">
    <div class="container">
      <h1 class="jumbotron-heading">Arbnb with PHP example</h1>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      <?php for ($i = 0; $i < count($res["nombre"]); $i++){ ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://th.bing.com/th/id/R.9dcea427c53a13bd14ffabb616695283?rik=78OKYed8RImlhQ&pid=ImgRaw&r=0" data-holder-rendered="true">
            <div class="card-body">
              <h3><?= $res["nombre"][$i] ?></h3>
              <p class="card-text"><?= $res["descripcion"][$i] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="apartment.php?ac=s&idap=<?= $res["id_apartment"][$i] ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <span class="text-muted">$<small class="text-muted"><?= $res["precio"][$i] ?></small></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Arbnb clone example is © Bootstrap, but please download and customize it for yourself!</p>
  </div>
</footer>

<svg xmlns="http://www.w3.org/2000/svg" width="508" height="225" viewBox="0 0 508 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body>