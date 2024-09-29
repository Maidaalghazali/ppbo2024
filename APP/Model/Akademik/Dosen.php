<?php
namespace App\Admin;
require_once 'App/Admin/Pegawai.php';
class Dosen extends Pegawai {
    private $nidn;
    public function mengajar() : void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}
?>