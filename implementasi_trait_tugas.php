<?php

require_once ('vendor/autoload.php');

use App\Pemain;

$ramdan = new Pemain;
$ramdan->name = 'Ramdan Fagundez';

$ramdan->cekNama();
$ramdan->tim();
$ramdan->asalMuasal();
$ramdan->sebPencapaian();