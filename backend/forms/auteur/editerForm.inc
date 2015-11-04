<?php 
	require_once '../../module/Connection.php';
	require_once '../../module/model/auteur/Auteur.php';
	
	$model = new Auteur();
	#recuperation de la liste des auteurs dans la variable $auteur
	#grace � la m�thode getAuteur le parammetre Id n'est pas obligatiore
	$auteur = $model->getAuteur();
?>
<div id="formEditer">
	<table>
		<tr class="entete">
		<td>ID</td><td>NOM</td><td>PRENOM</td><td>EMAIL</td><td>DATE INSCRIPTION</td><td>Action</td>
		</tr>
		<?php 
			while($data = $auteur->fetch()){
				//tant que je re�oi des enregistrement de la table auteur
				//je continue � afficher les resultat sous forme de <td>
				//fetch()=recuperation de resultat sous forme de tableau
				echo("<tr>");
					echo("<td>".$data['id_auteur']."</td>");
					echo("<td>".$data['nom_auteur']."</td>");
					echo("<td>".$data['prenom_auteur']."</td>");
					echo("<td>".$data['email_auteur']."</td>");
					echo("<td>".$data['date_inscription_auteur']."</td>");
					echo("<td><a href='../../actions/auteur/deleteAction.php?id=".$data['id_auteur']."'>Suprimer</a></td>");
					echo("<td><a href='../../actions/auteur/editerActionForm.php?id=".$data['id_auteur']."'>Editer</a></td>");
					echo("</tr>");
				
			}
		?>
		
	</table></div>