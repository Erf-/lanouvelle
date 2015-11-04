<?php
     class conn{
     	private $host="localhost";
     	private $user="root";
     	private $pwd="";
     	private $dbname="lanouvelle_db";
     	private $connexion;/*statement*/
        public function __construct(){
        	$this->connexion= new PDO("mysql:host={$this->host};dbname={$this->dbname},{$this->user},{$this->pwd}");	
        }	
        /*creer le service getPDO*/
        /*la methode ou le service pdo est utilise dans les autres class du projet*/
        /*mysql est le pilote*/
        public function getPDO (){
        	try{
        		
        	
        	$this->connexion= new PDO("mysql:host={$this->host};dbname=".$this->dbname,$this->user,$this->pwd);
        	return $this->connexion;}
        	catch(Exception $e){
        		echo("Exception: ".$e->getMessage());
        		
        	}
        }
     }

?>