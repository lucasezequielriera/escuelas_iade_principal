<?php
    foreach($comentarios as $comentario) { ?>

    <div class="card-valoracion">
        <div class="left-part">
            <img src="<?= $comentario['imagen'] ?>" alt="persona" onError="this.onerror=null;this.src='./images/alumno_sin_foto.png'">
        </div>
        <div class="right-part">
            <div class="titulo">
                <h3><?= utf8_encode($comentario['nombre']) ?></h3>
                <p>
                    <!-- <img src="./images/arrowright.svg" alt="imagen"> -->
                    <?= utf8_encode($comentario['curso']) ?>
                </p>
            </div>
            <div class="texto">
                <p>"<?= utf8_encode($comentario['review']) ?>"</p>
            </div>
        </div>
    </div>

<?php }
?>