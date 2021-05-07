<?php

namespace App;

use App\Minuman;

class Kopi implements Minuman{
    
    public function buat(){
        echo "Masak air panas hinga 100 derajat celsius ";
        echo "masukkan kopi ke dlaam gelas dan tuangkan air panas";
        echo "aduk sebanyak 60 kali putaran ";
        echo "diamkan selama 15 menit ";
        echo "tambahkan gula aren <br/>";
    }

    public function minum()
    {
       echo "diseruput sedikit-sedikit<br/><br/>";
    }

    public function tambahSusu()
    {
        echo "tambahkan susu pada kopi";
    }

}