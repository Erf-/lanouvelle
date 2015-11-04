<?php
	class Auteur extends Connection {
		
		private $idAuteur;
		private $nomeAuteur;
		private $emailAuteur;
		private $prenomAuteur;
		private $dateAuteur;		
		private $table="auteur";
		#structure
		private $idAuteurCol="id_auteur";
		private $nomeAuteurCol="nom_auteur";
		private $prenomAuteurCol="prenom_auteur";
		private $emailAuteurCol="email_auteur";
		private $dateAuteurCol="date_inscription_auteur";
		
		public function __construct($nom=NULL,$prenom=NULL,$email=NULL,$date=NULL){#INITIALIZATION des argument
				
			$this->nomeAuteur=$nom;
			$this->prenomAuteur=$prenom;
			$this->emailAuteur=$email;
			$this->dateAuteur=$date;
				
		}
		
		#CREATE
		public function saveAuteur(){
		#conception de la requet SQL INSERT
			$sql="INSERT INTO {$this->table} VALUES(
			'',
			'{$this->nomeAuteur}',
			'{$this->prenomAuteur}',
			'{$this->emailAuteur}',
			'{$this->dateAuteur}'
			
			)";
			#Execution de la requet SQL
			$query =$this->getPDO()->query($sql);
			return $query;
				
		}
		#READ
		public function getAuteur($id=NULL){
			
		if($id != null){
		$sql="SELECT * FROM {$this->table} WHERE {$this->idAuteurCol}=".$id;
		}else{
		$sql="SELECT * FROM {$this->table}";
		
		}
		$query =$this->getPDO()->query($sql);
		return $query;
		}
		#DELETE
		public function deleteAuteur($id){
		$sql="DELETE FROM {$this->table} WHERE {$this->idAuteurCol}=".$id;
		$query =$this->getPDO()->query($sql);
		return $query;
		}
		#UPDATE
		public function updateAuteur($id,$nom,$prenom,$email,$date){
		$sql="UPDATE {$this->table} SET
		{$this->nomeAuteurCol}='$nom',
		{$this->prenomAuteurCol}='$prenom',
		{$this->emailAuteurCol}='$email',
		{$this->dateAuteurCol}='$date'
		WHERE {$this->idAuteurCol}=".$id;
			
		$query =$this->getPDO()->query($sql);
		return $query;
		}
		// 		public function upDateAuteur($)
		public function getIdAuteur(){
			return $this->idAuteurCol;
		}
		}