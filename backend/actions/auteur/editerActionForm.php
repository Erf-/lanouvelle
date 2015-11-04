<?php 
	require_once '../../module/Connection.php';
	require_once '../../module/model/auteur/Auteur.php';
	$id = (isset($_GET["id"]))?$_GET["id"]:"";
	if($id!=""){
		$model = new Auteur();
		$auteur = $model->getAuteur($id);
		$data=$auteur->fetch();
		
		}else{
			echo("");
		}
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
    	<h3>Modification de la auteur: <?php echo$data["nom_auteur"] ?></h3>
		<div id="form">
			<form name="auteurForm" action="../../actions/auteur/editerAction.php" method="post"><!-- pour cree le formuulaire  -->
			<table>
				<tr>
				<td colspan=2 id="bloc_erreur">
				</td>
				</tr>
				<tr>
					<td>
				<label>Nom de auteur</label>
				</td>
				<td>
					<input type="text" name="nomAuteur" value="<?php echo($data["nom_auteur"])?>"/>
				</td>
				</tr>
				
				<tr>
					<td>
						<label>Prenom de auteur</label>
					</td>
					<td>
						<textarea name="prenomAuteur" ><?php echo($data["prenom_auteur"])?></textarea>
					</td>		
				</tr>
				<tr>
					<td>
						<label>email de auteur</label>
					</td>
					<td>
						<textarea name="emailAuteur" ><?php echo($data["email_auteur"])?></textarea>
					</td>		
				</tr>
				<tr>
					<td>
						<label>Date d'inscription de auteur</label>
					</td>
					<td>
						<textarea name="dateAuteur" ><?php echo($data["date_inscription_auteur"])?></textarea>
					</td>		
				</tr>
				
				<tr>
					<td colspan=2>
						<input class="btn" type="button"  value="enregister" onclick="valider(auteurForm,'ajouterAuteur')"/>
						<input type="hidden" name="id" value="<?php echo $data["id_auteur"] ?>" />
					</td>	
				</tr>	
			</table>
			</form>
		</div>
    </body>
</html>