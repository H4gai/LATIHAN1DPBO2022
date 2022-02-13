<?php

class sepakbola
{
	/*kelas yang digunakan untuk mengimplementasikan tim sepakbola*/
	/*atribut tim sepakbola*/
	private $nama = "";			//namatim
	private $negara= "";		//negara asal tim
	private $tahun= 0;			//tahun berdiri tim 
	private $pelatih = "";		//pelatih tim
	private $pemain_posisi = "";//beberapa pemain dan posisinya
	private $stadion = "";		//stadion utama
	private $liga = "";			//kompetisi tim 
	
	
	
	public function __construct($nama = "", $negara = "", $tahun = 0, $pelatih = "", $pemain_posisi = "", $stadion = "", $liga = "")
	{
		/*costructor*/
		$this->nama = $nama;
		$this->negara = $negara;
		$this->tahun = $tahun;
		$this->pelatih = $pelatih;
		$this->pemain_posisi = $pemain_posisi;
		$this->stadion = $stadion;
		$this->liga = $liga;
		
	}
	
	/*mengeset nilai nama*/
	public function setnama($nama)
	{
		$this->nama = $nama;
	}
	/*mengeset nilai negara*/
	public function setnegara($negara)
	{
		$this->negara = $negara;
	}
	/*mengeset nilai tahun*/
	public function settahun($tahun)
	{
		$this->tahun = $tahun;
	}
	/*mengeset nilai pelatih*/
	public function setpelatih($pelatih)
	{
		$this->pelatih = $pelatih;
	}
	/*mengeset nilai pemain*/
	public function setpemain_posisi($pemain_posisi)
	{
		$this->pemain_posisi = $pemain_posisi;
	}
	/*mengeset nilai stadion*/
	public function setstadion($stadion)
	{
		$this->stadion = $stadion;
	}
	/*mengeset nilai liga*/
	public function setliga($liga)
	{
		$this->liga = $liga;
	}
	
	/*mengembalikan nilai nama*/
	public function getnama()
	{
		return $this->nama;
	}
	/*mengembalikan nilai negara*/
	public function getnegara()
	{
		return $this->negara;
	}
	/*mengembalikan nilai tahun*/
	public function gettahun()
	{
		return $this->tahun;
	}
	/*mengembalikan nilai pelatih*/
	public function getpelatih()
	{
		return $this->pelatih;
	}
	/*mengembalikan nilai pemain*/
	public function getpemain_posisi()
	{
		return $this->pemain_posisi;
	}
	/*mengembalikan nilai stadion*/
	public function getstadion()
	{
		return $this->stadion;
	}
	/*mengembalikan nilai liga*/
	public function getliga()
	{
		return $this->liga;
	}
	
	function __destruct(){
		/*destuktor*/
	}
}

?>
	
	