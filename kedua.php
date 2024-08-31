<?php

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran(float $jari) : float {
    return 2 * 3.14 * $jari;
}

// Fungsi untuk menghitung volume bola
function volumeBola(float $jari) : float {
    return (4/3) * 3.14 * pow($jari, 3);
}

// Fungsi untuk menghitung volume tabung
function volumeTabung(float $jari, float $tinggi) : float {
    return 3.14 * pow($jari, 2) * $tinggi;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut(float $jari, float $tinggi) : float {
    return (1/3) * 3.14 * pow($jari, 2) * $tinggi;
}


$jari = 45;
$tinggi_tabung = 100; 
$tinggi_kerucut = 50; 

echo "Keliling lingkaran dengan jari-jari {$jari} adalah " . number_format(kelilingLingkaran($jari), 2) . "\n";
echo "Volume bola dengan jari-jari {$jari} adalah " . number_format(volumeBola($jari), 2) . "\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi_tabung} adalah " . number_format(volumeTabung($jari, $tinggi_tabung), 2) . "\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi_kerucut} adalah " . number_format(volumeKerucut($jari, $tinggi_kerucut), 2) . "\n";

?>
