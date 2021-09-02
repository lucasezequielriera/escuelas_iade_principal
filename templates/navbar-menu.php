<?php
    foreach ($escuelas as $key => $escuela) { ?>
    <li>
        <a style="position: relative" href="<?= $escuela['link']?>" class="dropdown-item categoria<?=$key?>">
            <?= utf8_encode($escuela["name"]) ?>
            <img class="icono-navbar" style="position: absolute; right: 10px; top: 13px" src='./images/arrowright.svg'>
            <br>
            <span>Cursos Online</span>
        </a>
    </li>
<?php } ?>

<!-- <script>
    sourceIcon = if (location.pathname == "/escuelas_iade_principal/" || "/pruebas/" || "/") {
        return "./images/arrowright.svg"
    } else {
        return "../images/arrowright.svg"
    }
</script> -->