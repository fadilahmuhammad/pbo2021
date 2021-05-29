<?php

namespace App;

/**
 * Trait for saygoodbye
 */
trait SayGoodBye
{
    public function goodBye($name)
    {
        if(is_null($name))
        {
            echo "Goodbye<br/>";
        } else{
            echo "Goodbye ".$name. "<br>";
        }
    }
}
