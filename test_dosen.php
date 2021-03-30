<?php

use application\Dosen;
use application\Mahasiswa;

require_once 'initialize.php';


$dian = new Dosen('8863453','Dian Prawira','086512347865','Rp. 4.500.000','456678','Pengajar');
$dian->mengajar();
$dian->meneliti();

$fadil = new Mahasiswa('H1101191034', 'Muhammad Fadilah', '03-01-2001', 'L');
$fadil->tampilkanAngkatan();

use application\backend\MyDate;
$tanggal = new MyDate();