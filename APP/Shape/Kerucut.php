<?php
class Kerucut
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi): float
    {
        return (1/3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}