<?php
	class Article extends Connection{
	private $idArticle;
	private $titreArticle;
	private $sousTitreArticle;
	private $datePublication;
	private $idAuteur;
	private $idCategorie;
	private $contenuArticle;
	private $visibiliteArticle;
	private $imageArticle;
	#structure

	private $idArticleCol="id_article";
	private $titreArticleCol="titre_article";
	private $sousTitreArticleCol="soustitre_article";
	private $datePublicationCol="date_publication";
	private $idAuteurCol="id_auteur";
	private $idCategorieCol="id_categorie";
	private $contenuArticleCol="contenu_article";
	private $visibiliteArticleCol="visibilite_article";
	private $imageArticleCol="image_article";
	
	private $table="article";
		
		public function __construct($titre=NULL,$soustitre=NULL,$datePublication=NULL,
							$idAuteur=NULL,$idCategorie=NULL,$contenu=NULL,$visibl=NULL,$image=NULL)
		{
			$this->titreArticle=$titre;
			$this->sousTitreArticle=$soustitre;
			$this->datePublication=$datePublication;
			$this->idAuteur=$idAuteur;
			$this->idCategorie=$idCategorie;
			$this->contenuArticle=$contenu;
			$this->visibiliteArticle=$visibl;
			$this->imageArticle=$image;
	}
	#CREATE
	public function saveArticle(){
		#conception de la requet SQL INSERT
		$sql="INSERT INTO {$this->table} VALUES(
		'',
		'{$this->titreArticle}',
		'{$this->sousTitreArticle}',
		'{$this->datePublication}',
		'{$this->idAuteur}',
		'{$this->idCategorie}',
		'{$this->contenuArticle}',
		'{$this->visibiliteArticle}',
		'{$this->imageArticle}'
		)";
		#Execution de la requet SQL
		$query =$this->getPDO()->query($sql);
		return $query;
	
	}
	#READ
	public function getArticle($id=NULL){
		
	if($id != null){
		$sql="SELECT * FROM {$this->table} WHERE {$this->idArticleCol}=".$id;
		}else{
		$sql="SELECT * FROM {$this->table}";
	
		}
		$query =$this->getPDO()->query($sql);
		return $query;
	}
		#DELETE
		public function deleteArticle($id){
		$sql="DELETE FROM {$this->table} WHERE {$this->idArticleCol}=".$id;
		$query =$this->getPDO()->query($sql);
		return $query;
		}
		#UPDATE
		public function updateArticle($id,$titre,$soustitre,$datePublication,
							$idAuteur,$idCategorie,$contenu,$visibl,$image){
		$sql="UPDATE {$this->table} SET
		{$this->titreArticleCol}='$titre',
		{$this->sousTitreArticleCol}='$soustitre',
		{$this->datePublicationCol}='$datePublication',
		{$this->idAuteurCol}='$idAuteur',
		{$this->idCategorieCol}='$idCategorie',
		{$this->contenuArticleCol}='$contenu',
		{$this->visibiliteArticleCol}='$visibl',
		{$this->visibiliteArticleCol}='$image'
		WHERE {$this->idAuteurCol}=".$id;
			
		$query =$this->getPDO()->query($sql);
		return $query;
		}
		// 		public function upDateArticle($)
	
		}
	