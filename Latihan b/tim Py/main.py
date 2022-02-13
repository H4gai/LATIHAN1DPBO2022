from Sepakbola import Sepakbola

#instalasi obejk tim sepakbola
#input data menggunakan setter
tim = Sepakbola()
tim.setnama("Real Madrid CF");
tim.setnegara("Spanyol");
tim.settahun(1902);
tim.setpelatih("Carlo Ancelotti");
tim.setpemain("Curtois(GK), Alaba(DF), Hazard(FW), Kroos(MF), Benzema(FW), Modric(MF), Bale(FW)");
tim.setstadion("Santiago Bernabeu");
tim.setliga("La liga");

#menampilkan hasil
#mengambil nilai dengan getter
print(" --- Daftar Tim Sepakbola --- ");
print(" ---------------------------- ");
print("Nama             : "+ str(tim.getnama()));
print("Negara           : "+ str(tim.getnegara()));
print("Berdiri Tahun    : "+ str(tim.gettahun()));
print("Pelatih          : "+ str(tim.getpelatih()));
print("Pemain dan Posisi: "+ str(tim.getpemain()));
print("Stadion          : "+ str(tim.getstadion()));
print("Bermain di       : "+ str(tim.getliga()));
	