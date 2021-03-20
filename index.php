<?php
require_once ('Mahasiswa.php');
require_once ('MahasiswaBaru.php');
require_once ('Pegawai.php');
require_once ('Dosen.php');
require_once ('User.php');

$fadilah = new Mahasiswa('H1101191034','Muhammad Fadilah','2001-01-03','Pria');
$eraldo = new Mahasiswa('H1101191026','Eraldo Jonathan Ramadhan','2000-12-18','Pria');
$harry = new Mahasiswa('H1101191040','Harry Anshary','2001-03-31','Pria');

$pegawai1 = new Pegawai('1234567','Pegawai Satu','086512347865','Rp. 4.500.000');
$pegawai2 = new Pegawai('4567891','Pegawai Dua','089987653421','Rp. 5.500.000');

$maba1 = new MahasiswaBaru('H1101201069','Ramdani Kurniawan','2001-09-04','Pria', 678895);
$maba2 = new MahasiswaBaru('H1101201088','Regi Prabowo','2001-08-07','Pria', 558769);

$dosen = new Dosen('8863453','Dosen Satu','086512347865','Rp. 4.500.000','456678','Pengajar');
$dosen = new Dosen('9928919','Dosen Dua','089987653421','Rp. 5.500.000','567899', 'Ketua Jurusan');

$user1 = new User('user1','user1');
$user2 = new User('user2','user2');
?>

<html>
    <head>
        <title>Encapsulation</title>
    </head>
    <body>
    
    <?php 
        $fadilah->tampilkanAngkatan();
        $fadilah->tampilkanUmur();
        $fadilah->tampilkanNama();
    ?>

    <?php 
        $eraldo->tampilkanAngkatan();
        $eraldo->tampilkanUmur();
        $eraldo->tampilkanNama(); 
    ?>

    <?php
        $harry->tampilkanAngkatan();
        $harry->tampilkanUmur();
        $harry->tampilkanNama();
    ?>

    </body>
</html>