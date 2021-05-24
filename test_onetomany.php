<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$fadil = new Pengguna(3, "Muhammad Fadilah", new Alamat(11, "Pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi Saja');
$lapak_budi->setId(2);

$lapak_ani = new Penjual();
$lapak_ani->setName('Ani Jak');
$lapak_ani->setId(1);

$lapak_wati = new Penjual();
$lapak_wati->setName('Wati Juga');
$lapak_wati->setId(3);

$fadil->setPenjual($lapak_budi);
$fadil->setPenjual($lapak_ani);
$fadil->setPenjual($lapak_wati);

$penjual_fadil = $fadil->getPenjual();
echo $penjual_fadil[0]->getName(); // ada 3 index 0,1,2