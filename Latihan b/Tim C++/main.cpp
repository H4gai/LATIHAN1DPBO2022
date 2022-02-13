#include "tim.cpp"
using namespace std;
/*fungsi untuk mengetes kelas tim sepakbola*/

int main(){
	
	//instalasi objek tim sepakbola
	Sepakbola tim;
	//mengeset data tim sepakbola
	tim.setnama("Real Madrid CF");
	tim.setnegara("Spanyol");
	tim.settahun(1902);
	tim.setpelatih("Carlo Ancelotti");
	tim.setpemain_posisi("Curtois(GK), Alaba(DF), Hazard(FW), Kroos(MF), Benzema(FW), Modric(MF), Bale(FW)");
	tim.setstadion("Santiago Bernabeu");
	tim.setliga("La liga");
	
	//get nilai yang ada pada objek tim sepakbola
	cout <<" --- Daftar Tim Sepakbola --- "<< endl<<endl;
	cout << "Nama		: "<<tim.getnama() << endl;
	cout << "Negara		: "<<tim.getnegara () << endl;
	cout << "Berdiri Tahun	: "<<tim.gettahun () << endl;
	cout << "Pelatih 	: "<<tim.getpelatih () << endl;
	cout << "Pemain(Posisi)	: "<<tim.getpemain_posisi () << endl;
	cout << "Stadion 	: "<<tim.getstadion () << endl;
	cout << "Bermain di	: "<<tim.getliga () << endl;
	
	return 0;
}