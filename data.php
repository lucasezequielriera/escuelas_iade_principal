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

?>