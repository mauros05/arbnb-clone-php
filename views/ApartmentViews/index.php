<main role="main">
    <div class="jumbotron d-flex align-items-center" style="background-color: white; height: 200px; width: auto;">
        <div class="container d-flex justify-content-center ">
            <h1 class="jumbotron-heading">Your Apartments</h1>
        </div>
    </div>
    <div class="album py-5">
        <div class="container">
        <div class="row">
        <?php if(isset($res["message"])){?>
                <h1><?=$res["message"]?></h1>
        <?php } else {?>
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
        <?php } ?>
        </div>
        </div>
    </div>
</main>