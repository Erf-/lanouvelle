<?php

	class Categorie extends Connection{// pour utiliser le serviser qui fait appel 
		
		private $idCategorie;
		private $nomeCategorie;
		private $descriptionCategorie;
		private $table="categorie";
		#structure
		private $idCategorieCol="id_categorie";
		private $nomeCategorieCol="nom_categorie";
		private $descriptionCategorieCol="description_categorie";

		public function __construct($nom=NULL,$description=NULL){#INITIALIZATION des argument
			
			$this->nomeCategorie=$nom;
			$this->descriptionCategorie=$description;	
			
		}
		
		#CREATE
		public function saveCategorie(){
			#conception de la requet SQL INSERT
			$sql="INSERT INTO {$this->table} VALUES(
					'',
					'{$this->nomeCategorie}',
					'{$this->descriptionCategorie}'
					)";
			#Execution de la requet SQL 
			$query =$this->getPDO()->query($sql);
			return $query;
			
		}
		#READ
		public function getCategorie($id=NULL){
			
			if($id != null){
				$sql="SELECT * FROM {$this->table} WHERE {$this->idCategorieCol}=".$id;
			}else{
				$sql="SELECT * FROM {$this->table}";
				
			}
			$query =$this->getPDO()->query($sql);
			return $query;
		}
		#DELETE
		public function deleteCategorie($id){
			$sql="DELETE FROM {$this->table} WHERE {$this->idCategorieCol}=".$id;
			$query =$this->getPDO()->query($sql);
			return $query;
		}
		#UPDATE
		public function updateCategorie($id,$nom,$description){
			$sql="UPDATE {$this->table} SET 
			{$this->nomeCategorieCol}='$nom',
			{$this->descriptionCategorieCol}='$description'
			WHERE {$this->idCategorieCol}=".$id;
			
			$query =$this->getPDO()->query($sql);
			return $query;
		}
// 		public function upDateCategorie($)
		public function getIdCategorieCol(){
			return $this->IdCategorieCol;
		}
	}
		
?>