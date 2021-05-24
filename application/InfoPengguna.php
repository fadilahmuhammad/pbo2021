<?php

namespace App;

use App\Pengguna;

class InfoPengguna 
{
    private $id;
    private $no_hp;
    private $no_wa;
    private $akun_ig;
    private $Pengguna;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPengguna(Pengguna $Pengguna)
    {
        $this->pengguna= $Pengguna;
    }

    public function setIg($username)
    {
        $this->ig = $akun_ig;
    }

    public function getIg()
    {
        return $this->ig;
    }
}
