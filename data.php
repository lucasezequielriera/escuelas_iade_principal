<?php
// Inicializando db //
$db = Database::getInstance();

// Obteniendo todos los cursos//
$cursos = $db->getCourses();
// Obteniendo todas las escuelas //
$escuelas = $db->getSiteSchools('all');
// Obteniendo todas las //
$informacionMain = $db->getSiteMain('all');
// Obteniendo todas las //
$reviews = $db->getSiteReviews('all');
// Obteniendo todas las //
$cursoPorId = $db->getCourseById('all');
// Obteniendo todas las //
$usuarios = $db->getUsers('all');
// Obteniendo todos los datos del navbar //
$navbar = $db->getSiteNavbar('all');
// Obteniendo todos los datos del banner "características" //
$bannerCaracteristicas = $db->getSiteBannerCharacteristics('all');
// Obteniendo todos los datos del main "institucional" //
$institucional = $db->getSiteInstitutional('all');
// Obteniendo todos los datos de los componentes de "institucional" //
$componentes_institucional = $db->getSiteContent('all');

?>