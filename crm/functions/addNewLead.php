<?php
require "../../globals/database.php";
$db = Database::getInstance();

$name = (isset($_GET['name'])) ? $db->escape($_GET['name']) : 'Sin datos';
$lastname = (isset($_GET['lastname'])) ? $db->escape($_GET['lastname']) : '';
$username = (isset($_GET['username'])) ? $db->escape($_GET['username']) : 0;
$detail = (isset($_GET['detail'])) ? $db->escape($_GET['detail']) : 'Sin datos';
$contactMethod = (isset($_GET['contactMethod'])) ? $db->escape($_GET['contactMethod']) : 'Indiferente';
$phone = (isset($_GET['phone'])) ? $db->escape($_GET['phone']) : 'Sin datos';
$country = (isset($_GET['country'])) ? $db->escape($_GET['country']) : 'default';
$city = (isset($_GET['city'])) ? $db->escape($_GET['city']) : 'default';
$email = (isset($_GET['email'])) ? $db->escape($_GET['email']) : 'Sin datos';
$course_id = (isset($_GET['course_id'])) ? $db->escape($_GET['course_id']) : 0;
$course = (isset($_GET['course'])) ? $db->escape($_GET['course']) : 'Sin datos';
$contactTime = (isset($_GET['contactTime'])) ? $db->escape($_GET['contactTime']) : '00:00:00';
$contactUntil = (isset($_GET['contactUntil'])) ? $db->escape($_GET['contactUntil']) : '00:00:00';
$group_sale = (isset($_GET['group_sale'])) ? $db->escape($_GET['group_sale']) : '0';
$label = (isset($_GET['label'])) ? $db->escape($_GET['label']) : 1;
$created_by = (isset($_GET['created_by'])) ? $db->escape($_GET['created_by']) : 0;
$installments = (isset($_GET['installments'])) ? $db->escape($_GET['installments']) : 0;
$total_amount = (isset($_GET['total_amount'])) ? $db->escape($_GET['total_amount']) : 0;

$db->query("INSERT INTO `leads` (`phone`, `email`, `name`, `lastname`, `username`, `contactTime` , `contactUntil`, `detail`, `label`, `course`, `course_id`, `installments`, `total_amount`, `contactMethod`, `created_by`, `country`, `city`, `group_sale`) 
VALUES ('$phone', '$email', '$name', '$lastname', '$username', '$contactTime', '$contactUntil', '$detail', '$label', '$course','$course_id', '$installments', '$total_amount', '$contactMethod', '$created_by', '$country', '$city', $group_sale)");

if ($created_by !== 0) {
    $db->query("SELECT MAX(id) from leads limit 1");
    $res = $db->fetch();
    //echo json_encode($res['MAX(id)']);
    echo $res['MAX(id)'];
} else { 
echo "Consulta enviada con exito!"; }
?>