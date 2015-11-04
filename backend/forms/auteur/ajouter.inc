<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link href="../../css/style.css" rel="stylesheet" type="text/css" >
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
<script language="javascript" src="../../js/validation.js"></script>
</head>
    <body>
    	<a href="../../admin/auteur/editer.php">
		<div><p>Editer les Auteurs</p></div></a>
		<a href="../../admin/index.php">
		<div class="annuler"> Annuler</div></a>
		
		<div id="form">
			<form name="auteurForm" action="../../actions/auteur/ajouterAction.php" method="post"><!-- pour cree le formuulaire  -->
			<table>
				<tr>
				<td colspan=2 id="bloc_erreur">
				</td>
				</tr>
				<tr>
					<td>
				<label>Nom auteur</label>
				</td>
				<td>
					<input type="text" name="nomauteur"/>
				</td>
				</tr>
				<tr>
				<td>
				<label>Prenom auteur</label>
				</td>
				<td>
					<input type="text" name="prenomauteur"/>
				</td>
				</tr>
				<tr>
				<td>
				<label>email auteur</label>
				</td>
				<td>
					<input type="text" name="emailauteur"/>
				</td>
				</tr>
				
				<td>
				<label>Date auteur</label>
				</td>
				<td>
					<input type="text" name="dateauteur"/>
				</td>
				</tr>
				
				<tr>
					<td colspan=2>
						<input class="btn" type="button"  value="Creer Auteur" onclick="valider(auteurForm,'ajouterAuteur')"/>
					</td>	
				</tr>	
			</table>
			</form>
		</div>
    </body>
</html>