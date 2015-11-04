<?php 
	require_once '../../module/Connection.php';
	require_once '../../module/model/categorie/Categorie.php';
	$id = (isset($_GET["id"]))?$_GET["id"]:"";
	if($id!=""){
		$model = new Categorie();
		$categorie = $model->getCategorie($id);
		$data=$categorie->fetch();
		
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
    	<h3>Modification de la categorie: <?php echo$data["nom_categorie"] ?></h3>
		<div id="form">
			<form name="categorieForm" action="../../actions/categorie/editerAction.php" method="post"><!-- pour cree le formuulaire  -->
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
					<input type="text" name="nomCategorie" value="<?php echo($data["nom_categorie"])?>"/>
				</td>
				</tr>
				
				<tr>
					<td>
						<label>Description categorie</label>
					</td>
					<td>
						<textarea name="descriptionCategorie" ><?php echo($data["description_categorie"])?></textarea>
					</td>		
				</tr>
				
				<tr>
					<td colspan=2>
						<input class="btn" type="button"  value="enregister" onclick="valider(categorieForm,'ajouterCategorie')"/>
						<input type="hidden" name="id" value="<?php echo $data["id_categorie"] ?>" />
					</td>	
				</tr>	
			</table>
			</form>
		</div>
    </body>
</html>