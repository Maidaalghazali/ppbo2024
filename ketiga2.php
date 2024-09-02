<?php

// Class Lingkaran
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

// Contoh pembuatan object dari class Lingkaran
$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran: " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . "\n";

// Class Bola
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

// Contoh pembuatan object dari class Bola
$bola = new Bola(7);
echo "Volume Bola: " . $bola->volume() . "\n";
echo "Luas Permukaan Bola: " . $bola->luasPermukaan() . "\n";

// Class Tabung
class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {
        return 2 * self::PHI * $this->jari_jari * ($this->jari_jari + $this->tinggi);
    }
}

// Contoh pembuatan object dari class Tabung
$tabung = new Tabung(7, 10);
echo "Volume Tabung: " . $tabung->volume() . "\n";
echo "Luas Permukaan Tabung: " . $tabung->luasPermukaan() . "\n";

// Class Kerucut
class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {
        $s = sqrt(pow($this->jari_jari, 2) + pow($this->tinggi, 2));
        return self::PHI * $this->jari_jari * ($this->jari_jari + $s);
    }
}

// Contoh pembuatan object dari class Kerucut
$kerucut = new Kerucut(7, 10);
echo "Volume Kerucut: " . $kerucut->volume() . "\n";
echo "Luas Permukaan Kerucut: " . $kerucut->luasPermukaan()."\n";

?>