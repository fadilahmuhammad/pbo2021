<?php
require_once ('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\Teh;
use App\EsJeruk;

$cendol_fadil = new Cendol();
$cendol_fadil -> minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->minum();

EsJeruk::diLihat();

$tehehe = new Teh();
$tehehe->buat();
$tehehe->tambahSusu();
$tehehe->minum();