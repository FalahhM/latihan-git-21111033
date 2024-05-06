<?php
include "lat1.php";
$object = new kendaraan;
$object->set_harga(100000);
$object->show_harga();
$object->jalan();
$object->caribilangan(21);
$alas = 10; $tinggi = 20;
$hasilrumus = $object->rumusSegitiga($alas, $tinggi);
echo "<br>Luas segitiga dengan alas = $alas cm dan tinggi = $tinggi cm adalah : ".$hasilrumus."cm";
?>