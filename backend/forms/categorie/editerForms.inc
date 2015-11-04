<?php
require_once("../../module/conn.php");
require_once("../../module/model/categorie/Categorie.php");
$model=new Categorie();
#recuperation de la liste des categories dans la variable $categorie
#grace a la methode get Categorie le parametre id n est pas obli
$categorie=$model->getCategorie();

?>
<div id="formEditer">
	<table>
		<tr class="entete">
		<td>id</td><td> nom</td><td> description</td><td>Action</td>
		</tr>
		<?php
		while($data=$categorie->fetch()){
			//tant que je recoi des enregistrement de la table categorie 
			//je continue a afficher les resultat sous formr de <tr>
			//fetch()=recuperation de resulatt sous forme de tabloo
			echo("<tr>");
			echo("<td>".$data['id']."</td>");
			echo("<td>".$data['nom']."</td>");
			echo("<td>".$data['description']."</td>");
			echo("<td>
					<a href='../../actions/categorie/deleteaction.php?id=".$data['id']."'>supprimer</a>
					|
					<a href='../../actions/categorie/editeraction.php?id=".$data['id']."'>editer</a>
					</td>");
		
			
			echo("</tr>");
		} 
		?>
	</table>
</div>