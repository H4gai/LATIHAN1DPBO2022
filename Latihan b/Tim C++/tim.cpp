#include <iostream>
#include <string>


class Sepakbola
{
	/*kelas yang digunakan untuk mengimplementasikan tim sepakbola*/
	
	private:
	/*atribut tim sepakbola*/
		std::string nama;		//namatim
		std::string negara;		//negara asal tim
		int tahun;				//tahun berdiri tim 
		std::string pelatih;	//pelatih tim
		std::string pemain_pos;	//beberapa pemain dan posisinya
		std::string stadion;	//stadion utama
		std::string liga;		//kompetisi tim 
	
	public:
	/*costructor*/
		Sepakbola(){
			tahun = 0;
		}
		
		Sepakbola(std::string a, std::string b, int c, std::string d, std::string e, std::string f, std::string g){
			/*costructor*/
			nama = a;
			negara = b;
			tahun = c;
			pelatih = d;
			pemain_pos = e;
			stadion = f;
			liga = g;
		}
	
	/*mengeset nilai nama*/
	void setnama(std::string a)
	{
		nama = a;
	}
	/*mengeset nilai negara*/
	void setnegara(std::string b)
	{
		negara = b;
	}
	/*mengeset nilai tahun*/
	void settahun(int c)
	{
		tahun = c;
	}
	/*mengeset nilai pelatih*/
	void setpelatih(std::string d)
	{
		pelatih = d;
	}
	/*mengeset nilai pemain*/
	void setpemain_posisi(std::string e)
	{
		pemain_pos = e;
	}
	/*mengeset nilai stadion*/
	void setstadion(std::string f)
	{
		stadion = f;
	}
	/*mengeset nilai liga*/
	void setliga(std::string g)
	{
		liga = g;
	}
	
	/*mengembalikan nilai nama*/
	std::string getnama()
	{
		return nama;
	}
	/*mengembalikan nilai negara*/
	std::string getnegara()
	{
		return negara;
	}
	/*mengembalikan nilai tahun*/
	int gettahun()
	{
		return tahun;
	}
	/*mengembalikan nilai pelatih*/
	std::string getpelatih()
	{
		return pelatih;
	}
	/*mengembalikan nilai pemain*/
	std::string getpemain_posisi()
	{
		return pemain_pos;
	}
	/*mengembalikan nilai stadion*/
	std::string getstadion()
	{
		return stadion;
	}
	/*mengembalikan nilai liga*/
	std::string getliga()
	{
		return liga;
	}
	
	~Sepakbola(){
		/*destuktor*/
	}
	
};