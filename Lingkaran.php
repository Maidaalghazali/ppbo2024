<?php
class Lingkaran
{
    const PHI = 3.14;


    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
    }


    public function keliling($jari_jari) : float {
        return 2*self::PHI*$jari_jari;
    }
}