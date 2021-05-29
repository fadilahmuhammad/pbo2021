<?php 

namespace App;

class Pemain
{
    use Paket;

    public function cekNama()
    {
        echo "Nama Pemain ini adalah ". $this->name. "<br/>";
    }

    public function asalMuasal()
    {
        echo "Sebelum bermain untuk SukaJaya FC ".$this->name." bermain untuk HarapanKita FC<br>";
    }

}