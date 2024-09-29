<?php

use App\Model\Akademik\Dosen;

require_once 'vendor/autoload.php';

$dian = new Dosen(198411132015041001, "Dian Prawira", 1000121184001, "Jln Purnama", "0013118405");
$dian->mengajar();