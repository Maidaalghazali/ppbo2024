<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran: " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . "\n";

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luasPermukaan() : float {
        return 4 * self::PHI * pow($this->jari_jari, 2);
    }
}

$bola = new Bola();

$bola->jari_jari = 7;
echo "Volume Bola: " . $bola->volume() . "\n";
echo "Luas Permukaan Bola: " . $bola->luasPermukaan() . "\n";

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {
        return 2 * self::PHI * $this->jari_jari * ($this->jari_jari + $this->tinggi);
    }
}

$tabung = new Tabung();
$tabung->jari_jari = 7;
$tabung->tinggi = 10;
echo "Volume Tabung: " . $tabung->volume() . "\n";
echo "Luas Permukaan Tabung: " . $tabung->luasPermukaan() . "\n";

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {

$s = sqrt(pow($this->jari_jari, 2) + pow($this->tinggi, 2));
        return self::PHI * $this->jari_jari * ($this->jari_jari + $s);
    }
}

$kerucut = new Kerucut();
$kerucut->jari_jari = 7;
$kerucut->tinggi = 10;
echo "Volume Kerucut: " . $kerucut->volume() . "\n";
echo "Luas Permukaan Kerucut: " . $kerucut->luasPermukaan()."\n";

?>