<?php 

class Lingkaran{
	// member class variable
	private $jari ;// properti
	const PHI = 3.14; // konstanta
	// member class method : constructor
	public function __construct($r){
		$this->jari = $r;
	}
	// member class method : return value
	public function getLuas(){
		$luas = self::PHI * $this->jari * $this->jari;
		return $luas;
	}
	public function getKeliling(){
		$kll = 2 * self::PHI * $this->jari;
		return $kll;
	}
}

?>