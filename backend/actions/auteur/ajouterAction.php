<?php
require_once '../../module/Connection.php';
require_once '../../module/model/auteur/Auteur.php';
	//Nous allons recevoir les donnes envoies via la metodes post
	$nomAuteur=(isset($_POST{"nomauteur"}))?$_POST{"nomauteur"}:"";
	$prenomAuteur=(isset($_POST{"prenomauteur"}))?$_POST{"prenomauteur"}:"";
	$emailAuteur=(isset($_POST{"emailauteur"}))?$_POST{"emailauteur"}:"";
	$dateAuteur=(isset($_POST{"dateauteur"}))?$_POST{"dateauteur"}:"";
	
	if($nomAuteur != ""){
		//$nomAuteur n'est pas vide
		$auteur = new Auteur($nomAuteur,$prenomAuteur,$emailAuteur,$dateAuteur);
		//enregistrement stacage saveAuteur
		$resultat=$auteur->saveAuteur();
		if($resultat){
			echo("Enregistrement r�ussie");
		}else {
			echo("Echec d'enregistrement");
		}
	}else{
		echo("vous n'avez pas le droit d'acc�s � cette page");
	}
?>