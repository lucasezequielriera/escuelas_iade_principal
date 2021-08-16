<?php
require "./globals/database.php";

$db = Database::getInstance();

$cursos = $db->getCourses();
$escuelas = $db->getSiteSchools('all');
var_dump($escuelas)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola</title>
</head>

<body>
    <?php
    foreach ($cursos as $curso) { ?>
        <h1> <?= $curso["name"] ?> </h1>
        <h1> <?php $curso["name"] ?> </h1>
    <?php }
    ?>
</body>

</html>