<?php
include "tim.php";

//instalasi objek tim sepakbola
$tim1 = new sepakbola();
//mengeset data tim sepakbola
$tim1->setnama("Real Madrid CF");
$tim1->setnegara("Spanyol");
$tim1->settahun(1902);
$tim1->setpelatih("Carlo Ancelotti");
$tim1->setpemain_posisi("Curtois(GK), Alaba(DF), Hazard(FW), Kroos(MF), Benzema(FW), Modric(MF), Bale(FW)");
$tim1->setstadion("Santiago Bernabeu");
$tim1->setliga("La liga");


//get nilai yang ada pada objek tim sepakbola
echo " -- Daftar Tim Sepakbola --"."<br>";
echo " --------------------------------------------------"."<br>";
echo "Nama				: ". $tim1->getnama()."<br>";
echo "Negara 			: ". $tim1->getnegara()."<br>";
echo "Tahun berdiri 	: ". $tim1->gettahun()."<br>";
echo "Pelatih 			: ". $tim1->getpelatih()."<br>";
echo "Pemain dan posisi : ". $tim1->getpemain_posisi()."<br>";
echo "Stadion Utama 	: ". $tim1->getstadion()."<br>";
echo "Bermain di 		: ". $tim1->getliga()."<br>";


?>