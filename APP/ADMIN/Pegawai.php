<?php

namespace App\Admin;

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp; // Protected attribute
    public $alamat;

    public function __construct($nip, $nama, $alamat, $no_hp) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->no_hp = $no_hp;
    }

    public function cekIn() {
        // Placeholder untuk logika cekIn
        return true;
    }

    public function cekOut() {
        // Placeholder untuk logika cekOut
        return true;
    }

    public function getNoHp() {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}