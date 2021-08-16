<?php
// Obteniendo datos del footer //
$comentarios = $db->getSiteReputation('all');
?>

<?php
    foreach($comentarios as $comentario) { ?>

    <div class="card-valoracion">
        <div class="left-part">
            <img src="<?= $comentario['imagen_alumno'] ?>" alt="persona" onError="this.onerror=null;this.src='./images/alumno_sin_foto.png'">
        </div>
        <div class="right-part">
            <div class="titulo">
                <h3><?= $comentario['nombre_alumno'] ?></h3>
                <p>
                    <!-- <img src="./images/arrowright.svg" alt="imagen"> -->
                    <?= $comentario['curso_realizado'] ?>
                </p>
            </div>
            <div class="texto">
                <p>"<?= $comentario['reseña_alumno'] ?>"</p>
            </div>
        </div>
    </div>

<?php }
?>