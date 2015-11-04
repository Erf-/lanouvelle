<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link href="../../css/style.css" rel="stylesheet" type="text/css" >
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
<script language="javascript" src="../../js/validation.js"></script>
</head>
    <body>
    	<a href="../../admin/categorie/editer.php">
		<div><p>Editer les Categories</p></div></a>
		<a href="../../admin/index.php">
		<div class="annuler"> Annuler</div></a>
		
		<div id="form">
			<form name="categorieForm" action="../../actions/categorie/ajouterAction.php" method="post"><!-- pour cree le formuulaire  -->
			<table>
				<tr>
				<td colspan=2 id="bloc_erreur">
				</td>
				</tr>
				<tr>
					<td>
				<label>Nom categorie</label>
				</td>
				<td>
					<input type="text" name="nomCategorie"/>
				</td>
				</tr>
				
				<tr>
					<td>
						<label>Description categorie</label>
					</td>
					<td>
						<textarea name="descriptionCategorie"></textarea>
					</td>		
				</tr>
				
				<tr>
					<td colspan=2>
						<input class="btn" type="button"  value="Creer Categorie" onclick="valider(categorieForm,'ajouterCategorie')"/>
					</td>	
				</tr>	
			</table>
			</form>
		</div>
    </body>
</html>