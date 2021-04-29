<?php

namespace App;
class Mahasiswa extends User {
 protected $nim;
 protected $nama;
 protected $tanggal_lahir;
 protected $jenis_kelamin;
 const AKTIF = 1;
 const NONAKTIF = 0;
 public static $status=self::AKTIF;
 
 function __construct($nim,$nama,$tgl,$jk){
   $this->nim = $nim;
   $this->nama = $nama;
   $this->tanggal_lahir = $tgl;
   $this->jenis_kelamin = $jk;
 }
 
 public function tampilkanAngkatan(){
  $angkatan = substr($this->nim,5,-4);
  echo $this->nama .' Angkatan 20'.$angkatan;
 }
 
 public function tampilkanUmur(){
   echo 'Umur : '. date_diff(date_create($this->tanggal_lahir), date_create('today'))->y. ' Tahun <br>';
 }
 
 public function tampilkanNama(){
     echo 'Nama : '.$this->nama. '<br>'. '<br>';
 }

 public static function bergerak()
 {
   echo "agen solusi, bukan agen perubahan<br/>";
 }
 
 final public function tuntaskan()
 {
   self::bergerak();
   echo "Memperbaiki menjadi lebih baik";
 }

//buat fungsi dengan nama hitungSks bertipe static
/*
Parameternya adlah $sks, dan $bobot dan di return
commit "Praktikum 08 - Final Static"
*/

public static function hitungSks($sks, $bobot)
{
 $total = $sks * $bobot;
 return $total; 

}



public function setNim($nim){
  $this->nim = $nim;
}
 public function setNama($nama){
   $this->nama = $nama;
 }
public function setJenisKelamin($jenis_kelamin){
  $this->jenis_kelamin = $jenis_kelamin;
}

public function setTanggalLahir($tanggal_lahir){
  $this->tanggal_lahir = $tanggal_lahir;
}

 public function getNim(){
   $this->nim = $nim;
 }
  public function getNama(){
    $this->nama = $nama;
  }
 public function getJenisKelamin(){
   $this->jenis_kelamin = $jenis_kelamin;
 }

 public function getTanggalLahir(){
   $this->tanggal_lahir = $tanggal_lahir;
 }

}
?>

