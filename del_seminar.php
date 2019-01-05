<?php 
require_once 'class_seminar.php';
$obj_seminar = new Seminar();
// tangkap request id
$_id = $_GET['id'];
// hapus data
$obj_seminar->hapus($_id);
// redirect page ke daftar_seminar.php
header('Location:daftar_seminar.php');
?>