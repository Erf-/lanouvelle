<?php 
	require_once ("backend/module/Connection.php");
	require_once ("backend/module/model/categorie/Categorie.php");
	
	$categorie = new Categorie();
	$resultat = $categorie->getCategorie();

?>
<div id="menu">
		<ul>
			<?php 
				#debut de la boucle
				while($data = $resultat->fetch()){
			?>
				<!-- contenue de la boucle -->
				<li><a href="#"><?php echo $data["nom_categorie"];?></a></li>
			<?php		
				}
			?>
		</ul>
			<!-- menue statique 
        	<ul>
            	<li><a href="#">infos nationales</a></li>
            	<li><a href="#">economie</a></li>
            	<li><a href="#">politique</a></li>
            	<li><a href="#">soci�t�</a></li>
            	<li><a href="#">sport</a></li>
            	<li><a href="#">art</a></li>
            </ul>
            -->
</div>