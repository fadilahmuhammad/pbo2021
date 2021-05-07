<?php
namespace App;

use App\Minuman;

class Cendol implements Minuman
{
    public function buat(){
        echo "tambahkan cendol, masukkan santan dan air gula merah cair ";
        echo "tambahkan es batu <br/>";
    }

    public function minum()
    {
        echo "Disedot dengan sedotan<br/><br/> ";
    }

    public function diberikanPadaTeman()
    {
        echo "ini untuk mu, tenang saja tidak ada sianida antara kita";
    }
}
