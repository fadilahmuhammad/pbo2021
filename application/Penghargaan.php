<?php

namespace App;

/**
 * visibility override
 */
trait Penghargaan
{
    private function sebPencapaian()
    {
        echo "Selama karirnya ". $this->name." Sudah memiliki 13 Penghargaan Individu";
    }
}
