<?php

namespace App\Admin;

require_once 'Pegawai.php';

class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;

    public function __construct($nip, $nama, $alamat, $no_hp, $gaji_pokok) {
        parent::__construct($nip, $nama, $alamat, $no_hp);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti() {
        echo "{$this->nama} sedang cuti.\n";
    }
}