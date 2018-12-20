<?php 
// menyertakan file library : class / function2
require_once 'class_dbkoneksi.php';
class Loker {
	private $dbcon;
	private $tblName = "loker";

	public function __construct(){
		$this->dbcon = DBConnection::getInstance();
	}
	public function getAll(){
		$sql = "SELECT * FROM " . $this->tblName;
		return $this->dbcon->query($sql);
	}

	public function simpan($data){}

	public function update($data){}

	public function hapus($id){}
}
?>