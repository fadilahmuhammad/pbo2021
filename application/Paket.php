<?php

namespace App;

/**
 * To inheritance
 */
trait Paket
{
    use Tim, Penghargaan{
        sebPencapaian as public;
    }

    public function tim()
    {
        echo $this->name." bermain untuk tim SukaJaya FC <br>";
    }
}
