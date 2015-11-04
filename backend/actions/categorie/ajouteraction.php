<?php
require_once '../../module/Connection.php';
require_once '../../module/model/categorie/Categorie.php';
	//Nous allons recevoir les donnes envoies via la metodes post
	$nomCategorie=(isset($_POST{"nomCategorie"}))?$_POST{"nomCategorie"}:"";
	$descriptionCategorie=(isset($_POST{"descriptionCategorie"}))?$_POST{"descriptionCategorie"}:"";
	
	if($nomCategorie != ""){
		//$nomCategorie n'est pas vide
		$categorie = new Categorie($nomCategorie,$descriptionCategorie);
		//enregistrement stacage saveCategorie
		$resultat=$categorie->saveCategorie();
		if($resultat){
			echo("Enregistrement r�ussie");
		}else {
			echo("Echec d'enregistrement");
		}
	}else{
		echo("vous n'avez pas le droit d'acc�s � cette pages");
	}
?>