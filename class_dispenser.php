<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function __construct($volume, $hargaSegelas, $volumeGelas, $namaMinuman) {
        $this->volume = $volume;
        $this->hargaSegelas = $hargaSegelas;
        $this->volumeGelas = $volumeGelas;
        $this->namaMinuman = $namaMinuman;
    }

    public function isiUlang($vol, $jmhIsi) {
        $this->volume = $this->volume + $vol;
        $this->volumeGelas = $jmhIsi;

    }

    public function kurangiGelas($jmhKurang) {
        $this->volumeGelas = $this->volumeGelas - $jmhKurang;
    }

    public function isiGelas($jmhTambah, $vol) {
        $this->volumeGelas = $this->volumeGelas + $jmhTambah;
        $this->volume = $this->volume - $vol;

    }

    public function getLabel() {
        echo "Volume Wadah : ".$this->volume;
        echo "</br>";
        echo "Harga Segelas : ".$this->hargaSegelas;
        echo "</br>";
        echo "Volume Gelas : ".$this->volumeGelas;
        echo "</br>";
        echo "Nama Minuman : ".$this->namaMinuman;
    }
}

$minuman1 = new Dispenser(500, 5000, 0, "Ucok Boba");

$minuman1->getLabel();
$minuman1->isiUlang(250, 250);
echo "</br>";
echo "</br>";
echo "Isi Wadah dan Gelas";
echo "</br>";
echo "</br>";

$minuman1->getLabel();

echo "</br>";
echo "</br>";
echo "Kurangi Isi Gelas";
echo "</br>";
echo "</br>";

$minuman1->kurangiGelas(150);
$minuman1->getLabel();

echo "</br>";
echo "</br>";
echo "Menambahkan Isi Gelas dan Mengurangi Isi Wadah";
echo "</br>";
echo "</br>";

$minuman1->isiGelas(150, 150);
$minuman1->getLabel();

?>












