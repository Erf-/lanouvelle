<?php
require_once '../../module/Connection.php';
require_once '../../module/model/auteur/Auteur.php';
	//Nous allons recevoir les donnes envoies via la metodes post
	$nomAuteur=(isset($_POST{"nomAuteur"}))?$_POST{"nomAuteur"}:"";
	$prenomAuteur=(isset($_POST{"prenomAuteur"}))?$_POST{"prenomAuteur"}:"";
	$emailAuteur=(isset($_POST{"emailAuteur"}))?$_POST{"emailAuteur"}:"";
	$dateAuteur=(isset($_POST{"dateAuteur"}))?$_POST{"dateAuteur"}:"";
	$id=(isset($_POST{"id"}))?$_POST{"id"}:"";

	if($nomAuteur != ""){
		//$nomAuteur n'est pas vide
		$auteur = new Auteur();
		//enregistrement stacage updateAuteur
		$resultat=$auteur->updateAuteur($id, $nomAuteur, $prenomAuteur,$emailAuteur,$dateAuteur);
		if($resultat){
			echo("Modification r�ussie");
		}else {
			echo("Echec Modification");
		}
	}else{
		echo("vous n'avez pas le droit d'acc�s � cette pages");
	}
?>