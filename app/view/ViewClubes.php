<?php

class ViewClubes
{

    public function showClubes($clubes)
    {

        include "templates/header.php" ?>

        <div class="container">
            <div class="row">
                <?php

                foreach ($clubes as $club) {  ?>
                    <div class="col">
                        <div class="card" style="width: 21rem;">
                            <!-- <img src="<?= $club['img'] ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"> <?= $club->nombre ?> </h5>
                                <h5 class="card-title"> <?= $club->fecha_fundacion ?> </h5>
                                <h5 class="card-title"> <?= $club->pais ?> </h5>
                                <a href="club/<?= $club->id  ?>" class="btn btn-primary">Ver detalle</a>
                                <a href="borrar/<?= $club->id  ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>

                <?php
                }

                ?>
            </div>

        </div>

    <?php include "templates/footer.php";
    }

    public function showClub($club)
    {
        include "templates/header.php"; ?>

        <?php

        if ($club) { ?>
            <!-- mx-auto m es el margen la x el eje horizontal -->
            <div class="card mx-auto" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $club->nombre  ?></h5>
                    <h5 class="card-title"><?= $club->fecha_fundacion  ?></h5>
                    <h5 class="card-title"><?= $club->pais ?></h5>
                    <a href="home" class="btn btn-primary">Volver</a>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="alert alert-danger" role="alert">
                El club no existe <a href="home" class="alert-link">Volver</a>
            </div>
        <?php
        }


        ?>
<?php include "templates/footer.php";
    }
}
