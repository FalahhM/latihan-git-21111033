<?php
//contoh kelas kendaraan
class kendaraan{
    private $warna;
    private $jumlah_pintu;
    private $jumlah_roda;
    public $harga;
    public $merk;

    public function __construct(){
        echo "ini adalah objek kendaraan. <br>";
    }
    public function set_harga($harga){
        $this->harga = $harga;
    }
    public function show_harga(){
        echo "Harga Kendaraan :".$this->harga.'.<br>';
    } 
    public function jalan(){
        echo "broom";
    }
    public function caribilangan($angka){
        if($angka%2==0)$hasil="Genap";
            else $hasil = "Ganjil";
        echo "<br>Angka ".$angka." termasuk bilangan " .$hasil;
    }
    public function rumusSegitiga($alas, $tinggi){
        $hasil = (0.5 * $alas) * $tinggi;
        return $hasil;
    }
}
?>