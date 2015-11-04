<?php
	
	class Connection{
		
		private $host="localhost";
		private $user="root";
		private $pwd="";
		private $dbname="lanouvelle_db";
		private $connection;
		
		public function __construct(){
		}
		#creer un service getPDO
		#la methode ou le service getPDO est utiliser a le
		public function getPDO(){
			#mysql:host est le pilote !!! on le chanque avec les versions de base de donnee
			try{
				$this->connection = new PDO("mysql:host={$this->host};dbname=".$this->dbname,$this->user,$this->pwd);
				return $this->connection;
			}catch(Exception $e){echo("Exception ".$e->getMessage());}
		}
		
	}
	

?>
