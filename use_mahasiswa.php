<?php
	require 'class_mahasiswa.php';

	$mhs = new Mahasiswa("Huda", "0110217005");
	$mhs->setIpk(3.8);
	$mhs->cetak();
	$mhs->predikat();
?>