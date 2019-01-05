<?php 
include_once 'top.php';
require_once 'class_seminar.php';

$obj_seminar = new Seminar();
// tangkap request id
$_id = $_GET['id'];

$data = $obj_seminar->findByID($_id);
?>

<div class="row">
		<div class="col-md-12">
		
		<h1>Data Seminar</h1>
		Judul Seminar : <?=$data['judul']?>
		<br/>
		Pembicara : <?=$data['pembicara']?>
		<br/>
		Tempat : <?=$data['tempat']?>
		<br/>
		Tanggal : <?=$data['tanggal']?>
		</div>
</div>

<?php 
include_once 'bottom.php';
?>