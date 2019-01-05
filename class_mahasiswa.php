<?php 
class Mahasiswa {
	public $nama;
	public $nim;
	private $ipk;

	function __construct($nama, $nim) {
		$this->nama = $nama;
		$this->nim = $nim;
	}

	function setIpk($ipk) {
		$this->ipk = $ipk;
	}

	function getIpk() {
		return $this->ipk;
	}

	function cetak() {
		echo "Nama ".$this->nama;
		echo "<br> Nim ".$this->nim;
		echo "<br> Ipk ".$this->ipk;
	}

	function predikat() {
		if($this->ipk > 3.75) {
			echo "Predikat cum laude";
		} else {
			echo "tidak cum laude";
		}
	}
}

?>