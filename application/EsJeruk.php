<?php

namespace App;
use App\Minuman;

class EsJeruk implements Minuman
{
    public function buat()
    {
        echo "Masukkan blender";
    }

    public function minum()
    {
        echo "MInumlah;";
    }

    public function diLihat()
    {
        echo "Cuman boleh dilihat saja, tidak diminum.<br/><br/>";
    }
}
