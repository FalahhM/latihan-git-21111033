<?php
//contoh kelas kendaraan
class kendaraan{
    public function caribilangan($angka){
        if($angka%2==0)$hasil="Genap";
            else $hasil = "Ganjil";
        echo "<br>Angka ".$angka." termasuk bilangan " .$hasil;
    }
}
?>