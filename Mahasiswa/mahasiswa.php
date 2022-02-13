<?php

class mahasiswa
{
	/*kelas yang digunakan untuk mengimplementasikan tim sepakbola*/
	//atribut data mahasiswa
	private $nim = 0;			
	private $nama = "";
	private $jenis_kelamin = "";
	private $program_studi = "";
	private $semester = 0;
	
	
	public function __construct($nim =0, $nama = "", $jenis_kelamin = "", $program_studi ="", $semester =0)
	{
		/*costructor*/
		$this->nim = $nim;
		$this->nama = $nama;
		$this->jenis_kelamin = $jenis_kelamin;
		$this->program_studi = $program_studi;
		$this->semester = $semester;
		
	}
	
	/*mengeset nilai nim*/
	public function setnim($nim)
	{
		$this->nim = $nim;
	}
	/*mengeset nilai nama*/
	public function setnama($nama)
	{
		$this->nama = $nama;
	}
	/*mengeset nilai jenis_kelamin*/
	public function setjenis_kelamin($jenis_kelamin)
	{
		$this->jenis_kelamin = $jenis_kelamin;
	}
	/*mengeset nilai program_studi*/
	public function setprogram_studi($program_studi)
	{
		$this->program_studi = $program_studi;
	}
	/*mengeset nilai semester*/
	public function setsemester($semester)
	{
		$this->semester = $semester;
	}
	
	/*mengembalikan nilai nim*/
	public function getnim()
	{
		return $this->nim;
	}
	/*mengembalikan nilai nama*/
	public function getnama()
	{
		return $this->nama;
	}
	/*mengembalikan nilai jenis_kelamin*/
	public function getjenis_kelamin()
	{
		return $this->jenis_kelamin;
	}
	/*mengembalikan nilai program_studi*/
	public function getprogram_studi()
	{
		return $this->program_studi;
	}
	/*mengembalikan nilai semester*/
	public function getsemester()
	{
		return $this->semester;
	}
	
	function __destruct(){
		/*destuktor*/
	}
}

?>
	
	