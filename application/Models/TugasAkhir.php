<?php

namespace App\Model;

class TugasAkhir 
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    public function __construct($id,$judulTA,$mahasiswaTA,$pembimbingTA,$pengujiTA)
    {
        $this->id = $id;
        $this->judulTA = $jdl;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }

    public function tambahTA()
    {

    }



}
