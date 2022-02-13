class Main{

	public static void main(String[] args){
	
	//instalasi objek tim sepakbola	
	Sepakbola tim;
	//mengeset data tim sepakbola
	tim = new Sepakbola();
	tim.setnama("Real Madrid CF");
	tim.setnegara("Spanyol");
	tim.settahun(1902);
	tim.setpelatih("Carlo Ancelotti");
	tim.setpemain_posisi("Curtois(GK), Alaba(DF), Hazard(FW), Kroos(MF), Benzema(FW), Modric(MF), Bale(FW)");
	tim.setstadion("Santiago Bernabeu");
	tim.setliga("La liga");
	
	//get nilai yang ada pada objek tim sepakbola
	System.out.println("--- Daftar Tim Sepakbola ---");
	System.out.println("-----------------------------");
	System.out.println("Nama 		: "+tim.getnama());
	System.out.println("Negara  	: "+tim.getnegara());
	System.out.println("Berdiri Tahun	: "+tim.gettahun());
	System.out.println("Pelatih 	: "+tim.getpelatih());
	System.out.println("Pemain (Posisi) : "+tim.getpemain_posisi());
	System.out.println("Stadion		: "+tim.getstadion());
	System.out.println("Bermain di 	: "+tim.getliga());
	
	}
}