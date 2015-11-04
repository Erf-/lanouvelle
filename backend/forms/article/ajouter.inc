<?php 
	require_once '../../module/Connection.php';
	require_once '../../module/model/categorie/Categorie.php';
	require_once '../../module/model/auteur/Auteur.php';
	
	$auteur =new Auteur();
	$categorie =new Categorie();
	
	$listAuteur =$auteur->getAuteur();
	$listCategorie = $categorie->getCategorie();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link href="../../css/style.css" rel="stylesheet" type="text/css" >
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
<script language="javascript" src="../../js/validation.js"></script>
</head>
    <body>
    	<a href="../../admin/article/editer.php">
		<div><p>Editer les Articles</p></div></a>
		<a href="../../admin/index.php">
		<div class="annuler"> Annuler</div></a>
		
		<div id="form">
			<form enctype="multipart/form-data" name="articleForm" action="../../actions/article/ajouterAction.php" method="post"><!-- pour cree le formuulaire  -->
			<table>
				<tr>
				<td colspan=2 id="bloc_erreur">
				</td>
				</tr>
				<tr>
					<td>
				<label>Titre Article</label>
				</td>
				<td>
					<input type="text" name="titreArticle"/>
				</td>
				</tr>
				<tr>
					<td>
				<label>soustitre Article</label>
				</td>
				<td>
					<input type="text" name="sousTitreArticle"/>
				</td>
				</tr>
				
				<tr>
				<td>
				<label>Auteur</label>
				</td>
				<td>
					<select name="auteur">
						<option value=''>choisir un auteur</option>
						<?php 
							while($dataAuteur=$listAuteur->fetch()){
								echo("<option value='".$dataAuteur["id_auteur"]."'>");
								echo($dataAuteur["nom_auteur"]);
								echo("</option>");
							}
						?>
					</select>
				</td>
				</tr>
				<tr>
				<td>
				<label>Categorie</label>
				</td>
				<td>
					<select name="categorie">
						<option value=''>choisir une categorie</option>
					<?php 
							while($dataCategorie=$listCategorie->fetch()){
								echo("<option value='".$dataCategorie["id_categorie"]."'>");
								echo($dataCategorie["nom_categorie"]);
								echo("</option>");
							}
						?>
					</select>
				</td>
				</tr>
				<tr>
				<td>
				<label>Contenu</label>
				</td>
				<td>
					<textarea name="contenuArticle"></textarea>
				</td>
				</tr>
				<tr>
				<td>
				<label>Publier ?</label>
				</td>
				<td>
					<input type="checkbox" name="visibilite"/>
				</td>
				</tr>
				<tr>
				<td>
				<label>Image</label>
				</td>
				<td>
					<input type="file" name="image"/>
				</td>
				</tr>
				
				<tr>
					<td colspan=2>
						<input class="btn" type="button"  value="Creer Article" onclick="valider(articleForm,'ajouterArticle')"/>
					</td>	
				</tr>	
			</table>
			</form>
		</div>
    </body>
</html>