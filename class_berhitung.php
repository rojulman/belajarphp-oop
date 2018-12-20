<?php 
class Berhitung {

    // member class variable static
	public static $counter = 100;

	// member class function static
	public static function tambah($a , $b){
		return $a + $b;
	}

    // use class : static variable
    Berhitung::$counter++;
    echo "Counter Sekarang : " . Berhitung::$counter;
    // call static function
    $x = Berhitung::tambah(80,50);
    echo '<br/>Jumlah 8 + 50 : ' . $x;
    echo '<br/>Jumlah 20 + 30 : ' . Berhitung::tambah(20,30);
}