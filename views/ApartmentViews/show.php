<main role="main">
    <div class="jumbotron mt-5">
        <div class="container">
            <h1 class="display-3"><?= $res["nombre"]; ?></h1>
            <p><?= $res["descripcion"]; ?></p>
            <p class="mt-2"><a class="btn btn-primary btn-lg" href="#" role="button">Reservar</a></p>
            <p>Owner: <span><?= $res["nombre_completo"]; ?></span></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Price: <span><?= $res["precio"]; ?></span></h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
        </div>
        <hr>
    </div> <!-- /container -->
</main>
<footer class="container">
    <p>© Company 2017-2018</p>
</footer>