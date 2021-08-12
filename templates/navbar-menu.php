<?php
$db = Database::getInstance();

// Obteniendo todos los cursos//
$cursos = $db->getCourses();
// Obteniendo todas las escuelas //
$escuelas = $db->getSiteSchools('all');

?>

<?php
    foreach ($escuelas as $escuela => $value) { ?>
    <li>
        <a style="position: relative" href="<?=$value["link"]?>" class="dropdown-item categoria<?=$escuela?>">
            <?=$value["name"]?>
            <img src="./images/arrowright.svg" style="position: absolute; right: 10px; top: 13px;" alt="alt">
            <br>
            <span>Cursos Online</span>
        </a>
    </li>
    <?php }
?>