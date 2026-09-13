<?php

class ViewJugadores {
    
    public function showJugador($jugador) {
     
        include "templates/header.php"; ?>

        <?php

        if ($jugador) { ?>
            <!-- mx-auto m es el margen la x el eje horizontal -->
            <div class="card mx-auto" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $jugador->nombre ?></h5>
                    <h5 class="card-title"><?= $jugador->apellido  ?></h5>
                    <h5 class="card-title"><?= $jugador->posicion ?></h5>
                    <a href="jugadores" class="btn btn-primary">Volver</a>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="alert alert-danger" role="alert">
                El jugador no existe <a href="jugadores" class="alert-link">Volver</a>
            </div>
        <?php
        }
        ?>
    <?php include "templates/footer.php";
    }

}