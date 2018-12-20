<?php 
class DBConnection { 
  protected static $dbh;
  public function __construct(){
  	try {
   		$host   = 'localhost';
   		$dbname = 'dbseminar';
   		$dbuser = 'siswa';
   		$dbpass = '123456';
   		$dbport ='5432';
   		self::$dbh = new PDO("pgsql:host=$host;dbname=$dbname;port=$dbport",
    	$dbuser,$dbpass);
   		self::$dbh->setAttribute(PDO::ATTR_ERRMODE ,
     PDO::ERRMODE_EXCEPTION
   		);
		}catch(PDOException $e){
	 	echo $e->getMessage();
	}
  }

  public static function getInstance(){
  	if(!self::$dbh){
  		new DBConnection();
  	}
  	return self::$dbh;
  }

  public function __destruct(){
  	   $dbh = NULL;
  }

}
?>