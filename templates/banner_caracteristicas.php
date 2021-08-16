<?php

    foreach ($bannerCaracteristicas as $caracteristica) { ?>

    <div class="card">
        <div class="icono">
            <img class="animate__animated animate__fadeInRight animate__delay-1s" src="<?= $caracteristica["imagen"] ?>" alt="icono_caracteristica">
        </div>
        <div class="informacion">
            <h5 class="animate__animated animate__fadeInLeft"><?= $caracteristica["caracteristica"] ?></h5>
        </div>
    </div>

<?php } ?>