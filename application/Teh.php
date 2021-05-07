<?php

namespace App;
use App\Minuman;

class Teh implements Minuman
{
    public function buat()
    {
        echo "Masukkan air panas kedalam gelas, ";
        echo "Masukkan celupan teh kedalam gelas, ";
        echo "Masukkan gula sesuai selera ";
        echo "aduk hingga berubah warna dan merata<br/> ";
    }

    public function minum()
    {
        echo "Nikmatilah kehangatan tehnya<br/> ";
    }

    public function tambahSusu()
    {
        echo "Tambahkan susu jika ingin menikmati sensasi yang berbeda<br/> ";
    }
}
