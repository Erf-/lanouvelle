<?php
require_once '../../module/Connection.php';
require_once '../../module/model/article/Article.php';
	//Nous allons recevoir les donnes envoies via la metodes post
	$titre=(isset($_POST{"titreArticle"}))?$_POST{"titreArticle"}:"";
	$sousTitre=(isset($_POST{"sousTitreArticle"}))?$_POST{"sousTitreArticle"}:"";
	$date = date("Y-m-d");
	$categorie=(isset($_POST{"categorie"}))?$_POST{"categorie"}:"";
	$auteur=(isset($_POST{"auteur"}))?$_POST{"auteur"}:"";
	$contenu=(isset($_POST{"contenuArticle"}))?$_POST{"contenuArticle"}:"";
	
	if(isset($_POST["visibilite"])) $visibilite=true;
	else $visibilite=false;
	
if(isset($_FILES["image"])){
		//Traitement des donn�es
		 #sp�cifier le chemin vers le r�pertoir des images
		 $dossier = '../../../images/';
		 #permet de r�cup�rer le nom du fichier
		 $fichier = basename($_FILES['image']['name']);
		 #permet de r�cuperer l'extension du fichier et le transformer en minuscule
	     $extension = strtolower(pathinfo($_FILES['image']['name'], 
	     					PATHINFO_EXTENSION));
	     
	     
	     if($extension == "jpg" || $extension == "png" || $extension == "gif"){
		     
	     	if(move_uploaded_file($_FILES['image']['tmp_name'],
	     			$dossier . md5($fichier).".".$extension)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
		     {
		     	  $imageUploaded = md5($fichier).".".$extension;
		     	  
		          echo 'Upload effectu� avec succ�s !';
		     }
		     else 
		     {
		          echo 'Echec de l\'upload !';
		     }
			
	    }else{
	    	echo("Erreur extention");
	    }
	}
	$article=new Article($titre,$sousTitre,$date,$auteur,$categorie,$contenu,$visibilite,$imageUploaded);
	$resultat = $article->saveArticle();
	if($resultat){
		echo("<br/>Article cr�e avec succ�s");
	}else{
		echo("<br/>Echec de creation");
	}
?>