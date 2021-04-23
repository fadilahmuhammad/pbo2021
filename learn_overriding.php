<?php

class Madrid
{
    public $nama; 

    public function ketua(){
        echo "Halo ketua dari ESL ". $this->nama. ", program yang anda ajukan yaitu ESL gagal diselenggarakan ya?";
    }

    public function resmi()
    {
        echo "Kegagalan ". $this->nama . " dalam meresmikan ESL ini, disebabkan mundurnya 6 club dari liga inggris";
    }
}

class KetuaPimpinan extends Madrid
{
    public function ketua()
    {
        echo "ESL diresmikan ". $this->nama. " ESL bersama dengan 12 club lainnya." ;
    }

    public function parentKetua()
    {
        return parent::ketua();
    }
}

$perez = new KetuaPimpinan();
$perez->nama = 'Florentino Perez';
$perez->parentKetua();
echo "<br>";
$perez->resmi();
