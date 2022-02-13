class Sepakbola
{ 
/*kelas yang digunakan untuk mengimplementasikan tim sepakbola*/
/*atribut tim sepakbola*/
		private String nama;		//namatim
		private String negara;		//negara asal tim
		private int tahun;			//tahun berdiri tim 
		private String pelatih;		//pelatih tim
		private String pemain_pos;	//beberapa pemain dan posisinya
		private String stadion;		//stadion utama
		private String liga;		//kompetisi tim 
	
		Sepakbola(){
		/*costructor*/
			tahun = 0;
		}
		
		Sepakbola(String a, String b, int c, String d, String e, String f, String g){
		/*costructor*/
			this.nama = a;
			this.negara = b;
			this.tahun = c;
			this.pelatih = d;
			this.pemain_pos = e;
			this.stadion = f;
			this.liga = g;
		}
	
	/*mengeset nilai nama*/
	public void setnama(String a)
	{
		this.nama = a;
	}
	/*mengeset nilai negara*/
	public void setnegara(String b)
	{
		this.negara = b;
	}
	/*mengeset nilai tahun*/
	public void settahun(int c)
	{
		this.tahun = c;
	}
	/*mengeset nilai pelatih*/
	public void setpelatih(String d)
	{
		this.pelatih = d;
	}
	/*mengeset nilai pemain*/
	public void setpemain_posisi(String e)
	{
		this.pemain_pos = e;
	}
	/*mengeset nilai stadion*/
	public void setstadion(String f)
	{
		this.stadion = f;
	}
	/*mengeset nilai liga*/
	public void setliga(String g)
	{
		this.liga = g;
	}
	
	/*mengembalikan nilai nama*/
	String getnama()
	{
		return this.nama;
	}
	/*mengembalikan nilai negara*/
	String getnegara()
	{
		return this.negara;
	}
	/*mengembalikan nilai tahun*/
	int gettahun()
	{
		return this.tahun;
	}
	/*mengembalikan nilai pelatih*/
	String getpelatih()
	{
		return this.pelatih;
	}
	/*mengembalikan nilai pemain*/
	String getpemain_posisi()
	{
		return this.pemain_pos;
	}
	/*mengembalikan nilai stadion*/
	String getstadion()
	{
		return this.stadion;
	}
	/*mengembalikan nilai liga*/
	String getliga()
	{
		return this.liga;
	}
	
	
}