<?php
include "mahasiswa.php";

//instalasi objek mahasiswa
$daftar = new mahasiswa();
//mengeset data mahasiswa
$daftar->setnim(2001984);
$daftar->setnama("Hagai Brayen Setiawan");
$daftar->setjenis_kelamin("Laki-laki");
$daftar->setprogram_studi("Ilmu Komputer");
$daftar->setsemester(4);

$daftar2 = new mahasiswa();
//mengeset data mahasiswa
$daftar2->setnim(182342);
$daftar2->setnama("Eko Oktavian Imanuel");
$daftar2->setjenis_kelamin("Laki-laki");
$daftar2->setprogram_studi("Hukum");
$daftar2->setsemester(6);

//get nilai yang ada pada objek tim sepakbola
echo " -- Daftar Mahasiswa --"."<br>";
echo " --------------------------------------------------"."<br><br>";
echo "NIM : ". $daftar->getnim()."<br>";
echo "Nama : ". $daftar->getnama()."<br>";
echo "Jenis Kelamin : ". $daftar->getjenis_kelamin()."<br>";
echo "Program Studi : ". $daftar->getprogram_studi()."<br>";
echo "Semester : ". $daftar->getsemester()."<br><br>";
echo " --------------------------------------------------"."<br><br>";
echo "NIM : ". $daftar2->getnim()."<br>";
echo "Nama : ". $daftar2->getnama()."<br>";
echo "Jenis Kelamin : ". $daftar2->getjenis_kelamin()."<br>";
echo "Program Studi : ". $daftar2->getprogram_studi()."<br>";
echo "Semester : ". $daftar2->getsemester()."<br>";

?>