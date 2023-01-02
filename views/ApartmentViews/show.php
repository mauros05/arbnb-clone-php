<main role="main">
    <div class="jumbotron mt-5">
        <div class="container">
            <h1 class="display-3"><?= $res["nombre"]; ?></h1>
            <p>Direccion: <span><?= $res["direccion"]; ?></span></p>
            <p>Owner: <span><?= $res["nombre_completo"]; ?></span></p>
            <p class="mt-2 mb-2"><a class="btn btn-primary btn-lg" href="#" role="button">Reservar</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Price: <span><?= $res["precio"]; ?></span></h2>
                <p><?= $res["descripcion"]; ?></p>
            </div>
        </div>
        <hr>
    </div>
</main>

<footer class="container">
    <p>© Company 2017-2018</p>
</footer>