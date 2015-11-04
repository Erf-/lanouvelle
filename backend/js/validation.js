/*document java script de validation */
function valider(form,type){
	//form=ie formulaire qu un souhaite valider
	//type= l actions qu on souhaite valider (ajouter ou modifier ;;;)
	//erreur permet de stoker la liste des erreurs a afficher a l utulisataeur 
	var erreur = "";
	//on verifie le type du formulaire qu on souhaite valider
	if(type == "ajouterCategorie"){
		
	//verification des valeur de chaque  champ de texte 
	if(form.nomcategorie.value == "")
		
	erreur +="- Veuillier remplir le nom de la categorie <br/>";
		
		if(form.descriptionCategorie.value == "")
			
			erreur +="- Veuillier remplir la description de la categorie <br/>";
		
	}else  if(type == "ajouterAuteur"){
		if(form.nomauteur.value == "")	erreur +="- Veuillier remplir le nom de l auteur <br/>";
				
		if(form.prenomauteur.value == "")	erreur +="- Veuillier remplir le prenom <br/>";
		
		var expreg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.emailauteur.value;
		if(email.match(expreg) == null) erreur+="veilliez corrigez vos mails <br/>";
	}else if(type == "ajouterArticle"){
		if(form.titreArticle.value == "") erreur+="- Veulliez remplir le titre<br/>";
		if(form.sousTitreArticle.value == "") erreur+="- Veulliez remplir le Sous titre<br/>";
		if(form.categorie.selectedIndex == false) erreur+="- Veulliez choisir une categorie<br/>";
		if(form.auteur.selectedIndex == false) erreur+="- Veulliez choisir un auteur<br/>";
		if(form.contenuArticle.value == "") erreur+="- Veulliez remplir le contenue<br/>";
		if(form.image.value == "") erreur+="- Veulliez choisir une image</br>";
	}
		
	//verification des erreurs et affichage 
	if(erreur == ""){
		form.submit();
	}else{
		//erreur detecter + affichage des erreurs dans #bloc _erreur
		document.getElementById("bloc_erreur").innerHTML = "<div id='erreur'>"+erreur+"</div>";
	}
	
	
	
}