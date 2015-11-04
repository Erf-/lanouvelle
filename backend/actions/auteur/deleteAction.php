<?php
require_once '../../module/Connection.php';
require_once '../../module/model/auteur/Auteur.php';
	$id = (isset($_GET["id"]))?$_GET["id"]:"";
	if($id!=""){
		#suppression
		$model = new Auteur();
		$resultat = $model->deleteAuteur($id);
		if($resultat){
			echo("Suppression r�ussie");
		}else{
			echo("Echec de suppression");
		}
		
	}else{
		echo("Vous n'avais pas le droit d'acc�s � cette page !!");
		
	}
?>