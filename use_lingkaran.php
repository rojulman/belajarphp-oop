<?php 
require_once 'class_lingkaran.php';

$l1 = new Lingkaran(8);
$l2 = new Lingkaran(6.4);


echo 'Luas lingkaran jari2 8 : ' . $l1->getLuas();
echo '<br/>Luas lingkaran jari2 6.4 : ' . $l2->getLuas();
echo '<br/>NILAI PHI : ' . Lingkaran::PHI;
?>