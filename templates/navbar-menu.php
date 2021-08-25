<?php
// Obteniendo url de la pagina actual //
$all_in_address_bar = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// Buscando palabra en url y se muestra link dependiendo si encuentra o no //
$palabra_buscada = 'IT';
$posicion_coincidencia = strpos($all_in_address_bar, $palabra_buscada);
?>

<?php
    foreach ($escuelas as $escuela => $value) { ?>
    <li>
        <a style="position: relative" href="<?= $value['link']?>" class="dropdown-item categoria<?=$escuela?>">
            <?=$value["name"]?>
            <img class="icono-navbar" style="position: absolute; right: 10px; top: 13px" src=<?php if ($posicion_coincidencia == true) {
                echo './images/arrowright.svg';
            } else {
                echo './images/arrowright.svg';
            } ?>>
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