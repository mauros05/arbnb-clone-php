<main role="main">
  <section class="jumbotron text-center mt-5 mb-5">
    <div class="container">
      <h1 class="jumbotron-heading">Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      <?php for ($i = 0; $i < count($res["nombre"]); $i++){ ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22508%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20508%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_185520eba0e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_185520eba0e%22%3E%3Crect%20width%3D%22508%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22169.74478912353516%22%20y%3D%22123.70000076293945%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
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
    <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
  </div>
</footer>

<svg xmlns="http://www.w3.org/2000/svg" width="508" height="225" viewBox="0 0 508 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body>