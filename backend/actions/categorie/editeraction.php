<?php
require_once '../../module/Connection.php';
require_once '../../module/model/categorie/Categorie.php';
	//Nous allons recevoir les donnes envoies via la metodes post
	$nomCategorie=(isset($_POST{"nomCategorie"}))?$_POST{"nomCategorie"}:"";
	$descriptionCategorie=(isset($_POST{"descriptionCategorie"}))?$_POST{"descriptionCategorie"}:"";
	$id=(isset($_POST{"id"}))?$_POST{"id"}:"";

	if($nomCategorie != ""){
		//$nomCategorie n'est pas vide
		$categorie = new Categorie();
		//enregistrement stacage updateCategorie
		$resultat=$categorie->updateCategorie($id, $nomCategorie, $descriptionCategorie);
		if($resultat){
			echo("Modification r�ussie");
		}else {
			echo("Echec Modification");
		}
	}else{
		echo("vous n'avez pas le droit d'acc�s � cette pages");
	}
?>