<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252" />
<title>Blog La Nouvelle</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<!--DEBUT SEPARATEUR -->
    <div id="separateur">
    </div>
    <!--FIN SEPARATEUR -->
    
	<!-- DEBUT CONTENEUR -->
	<div id="conteneur">
    	<!-- DEBUT HEADER -->
        <div id="header">
        
        	<!-- DEBUT LOGO -->
        	<div id="logo">
            	<a href="http://www.lanouvelle.ma/index.html">
                	<img src="images/logo.JPG" border=0 />
                </a>
            </div>
            <!-- FIN LOGO -->
            
            <!-- DEBUT HEADER CENTER -->
            <div id="header_center">
            	<!-- DEBUT HEADER CENTER TOP-->
                <div id="header_center_top">
                	<div id="content_text">
                    	<p>"Du Maroc jusqu'au reste du monde !"</p>
                    </div>
                </div>
                <!-- FIN HEADER CENTER TOP-->
                <div id="header_center_bottom">
                	<div class="accueil"><a href="#">accueil</a></div>
                    <div class="equipe"><a href="#">notre �quipe</a></div>
                	<div class="contact"><a href="#">contact</a></div>
                </div>
            </div>
            <!-- FIN HEADER CENTER-->
            
            <!-- DEBUT HEADER RIGHT-->
            <div id="header_right">
            
                <!-- DEBUT HEADER RIGHT TOP-->
            	<div id="header_right_top">
                	<p class="texte">Rejoignez-nous sur:</p>
                    <a href="#"><img class="twitter" src="images/twitter.JPG" border=0 /></a>
                    <img class="facebook" src="images/facebook.JPG" border=0 />
                    <img class="rss" src="images/rss.JPG" border=0 />                
                </div>
                <!-- FIN HEADER RIGHT TOP-->
                
                <!-- DEBUT HEADER RIGHT BOTTOM-->
                <div id="header_right_bottom">
                	<form>
                    	<input type="text" class="in"/>
                        <input type="image" src="images/search.JPG" class=" "/>
                    </form>
                </div>
                <!-- FIN DEBUT HEADER RIGHT BOTTOM-->

            </div>
            <!-- FIN HEADER RIGHT-->
            
        </div>
        <!-- FIN HEADER-->
        
        <!-- DEBUT MENU-->
        <?php include_once ('vues/menu.php')?>
        <!-- FIN MENU-->
        
        <!-- DEBUT SLIDER -->
        <div id="slider">
        	<!-- DEBUT IMAGE MAX-->
            <div id="image_max">
                <div id="image">
                    <img src="images/image_slider.jpg"/>
                </div>
                <p>La r�solution de l'ONU, "premier signe d'espoir en syrie"</p>
                <div id="titre_bg">
                </div>
            </div>
            <!-- FIN IMAGE MAX-->
            
            <!-- DEBUT IMAGE MIN-->
            <div id="image_min">
               <a href="#"><img class="active" src="images/min1.jpg"/></a>
               <a href="#"><img src="images/min2.jpg"/></a>
               <a href="#"><img src="images/min3.jpg"/></a>
               <a href="#"><img src="images/min4.jpg"/></a>
            </div>
            <!-- FIN IMAGE MIN-->
            
            <div id="red_info">
            	<p>Derni�res nouvelles</p>
            </div>
        </div>
        <!-- FIN SLIDER-->
        
      	<!-- DEBUT NEWSLETTER -->
        <div id="newsletter">
        	<center>
            	<p>Enregistrez-vous et</p>
                <p>Recevez nos</p>
                <p class="big">Newsletter</p>
                <form action="#" method="post">
                	<input type="text" value="Name" class="name"/>
                    <input type="text" value="Email" class="email"/>
                    <input type="submit" value="Se connecter" class="connecter"/>
                </form>
                <p class="forgot">Mot de passe oubli� ?</p>
                <a href="#">
                    <div class="creer">
                        Cr�er un compte
                    </div>
                </a>
            </center>
        </div>
        <!-- FIN NEWSLETTER-->
        <!-- DEBUT RUBRIQUE -->
       	<div id="rubrique">
        
        	<div id="article">
            	<div id="titre">
                	Autour du monde
                </div>
                <div id="plus">
                	Plus..
                </div>
                <div id="article_item">                	
                    <img src="images/img1_article.jpg"/>
                    <p class="texte">Element d'article Element d'article Element d'article Element d'article Element d'article</p>
                	<p class="plus_info">
                    	Plus d'infos
                    </p>
                </div>
                
                <div id="article_item">
                    <img src="images/img2_article.jpg"/>
                    <p class="texte">Element d'article Element d'article Element d'article Element d'article Element d'article</p>
                	<p class="plus_info">
                    	Plus d'infos
                    </p>
                </div>
                
                <div id="article_item">
                     <img src="images/img3_article.jpg"/>
                    <p class="texte">Element d'article Element d'article Element d'article Element d'article Element d'article</p>
                	<p class="plus_info">
                    	Plus d'infos
                    </p>                    
            	</div>
                
            </div>
            
            <div id="article">
            	<div id="titre">
                	Derniers articles
                </div>
                <div id="plus">
                	Plus..
                </div>
                <div id="article_item">                	
                    <img src="images/img4_article.jpg"/>
                    <p class="texte">Element d'article Element d'article Element d'article Element d'article Element d'article</p>
                	<p class="plus_info">
                    	Plus d'infos
                    </p>
                </div>
                
                <div id="article_item">
                    <img src="images/img5_article.jpg"/>
                    <p class="texte">Element d'article Element d'article Element d'article Element d'article Element d'article</p>
                	<p class="plus_info">
                    	Plus d'infos
                    </p>
                </div>
                
                <div id="article_item">
                     <img src="images/img6_article.jpg"/>
                    <p class="texte">Element d'article Element d'article Element d'article Element d'article Element d'article</p>
                	<p class="plus_info">
                    	Plus d'infos
                    </p>                    
            	</div>
                
            </div>
           
           	<div id="article">
            	<div id="titre">
                	Galerie
	            </div>
                <div id="plus">
                	Plus..
                </div>
                <div id="article_item">                	
                    <img src="images/img4_article.jpg"/>
                    <img class="img" src="images/img4_article.jpg"/>
                </div>
                
                <div id="article_item">
                    <img src="images/img5_article.jpg"/>
                    <img class="img" src="images/img5_article.jpg"/>
                </div>
                
                <div id="article_item">
                    <img src="images/img6_article.jpg"/>
                    <img class="img" src="images/img6_article.jpg"/>
            	</div>
                
            </div>
            
            <div id="article">
            	<div id="titre">
                	Technologie
	            </div>
                <div id="plus">
                	Plus..
                </div>
                <div id="article_technologie">
                	Lorem ipsum dolor sit amet conse ctetur adipiscing elit  
					Nulla quis lorem neque, mattis venenatis lectus. 
					In interdum ullamcorper dolor ...<br/>
					Par : <a href="#">Lorem Ipsum.</a>
                </div>
                <div id="article_technologie">
                	Lorem ipsum dolor sit amet conse ctetur adipiscing elit  
					Nulla quis lorem neque, mattis venenatis lectus. 
					In interdum ullamcorper dolor ...<br/>
					Par : <a href="#">Lorem Ipsum.</a>
                </div>
                <div id="article_technologie">
                	Lorem ipsum dolor sit amet conse ctetur adipiscing elit  
					Nulla quis lorem neque, mattis venenatis lectus. 
					In interdum ullamcorper dolor ...<br/>
					Par : <a href="#">Lorem Ipsum.</a>
                </div>
                <div id="article_technologie">
                	Lorem ipsum dolor sit amet conse ctetur adipiscing elit  
					Nulla quis lorem neque, mattis venenatis lectus. 
					In interdum ullamcorper dolor ...<br/>
					Par : <a href="#">Lorem Ipsum.</a>
                </div>
            </div>
        </div>
        <!-- FIN RUBRIQUE-->
        
        <!-- DEBUT EDITORIAL -->
       	<div id="editorial">
        	<h2>Editorial</h2>
            <img src="images/editorial.jpg" />
            <p>La d�cision de maintenir l�horaire d��t� jusqu�au 27 octobre prochain a �t� prise de � mani�re urgente � en raison de ses retomb�es positives sur l��conomie nationale et r�pond aux int�r�ts sup�rieurs de la Nation, a indiqu�, samedi, le ministre d�l�gu� charg� de la fonction publique et de la modernisation de l�administration, Abdel�dim El Guerrouj.

L�adoption d�finitive de ce syst�me permet au Maroc de se mettre au diapason de ce qui est en vigueur en Europe, a ajout� M. El Guerrouj, qui �tait l�invit� du journal de la mi-journ�e de la chaine de t�l�vision � Al Oula �, � l�occasion de l�adoption par le Conseil de gouvernement du projet de d�cret relatif au changement de l�heure l�gale.

Le ministre a notamment relev� l�effet positif du maintien de l�heure d��t� jusqu�au 27 octobre prochain sur l��conomie nationale en mati�re d��conomie d��nergie, d�investissement et d��changes commerciaux avec les partenaires europ�ens.

L��valuation de l�exp�rience actuelle a montr� plusieurs points positifs en rapport notamment avec � des �conomies d��nergie d�environ 100 millions de dirhams durant ces mois et des gains de plus de 2 milliards de dirhams en terme d�investissements �, a expliqu� le ministre.

Le 24 septembre courant le minist�re de la fonction publique et de la modernisation de l�administration avait annonc� que le retour � l�heure l�gale (GMT) au Maroc aura lieu ce dimanche, pr�cisant que � l�heure sera ainsi retard�e de 60 minutes dimanche 29 septembre 2013 � partir de 03h00h.            	
            </p>
            <div id="ligne">
            </div>
        </div>
        <!-- FIN EDITORIAL-->
        
        <!-- DEBUT PUB -->
       	<div id="pub">
        	<!-- DEBUT VIDEO -->
            <div id="video">
            	<!-- DEBUT VIDEO ITEM -->
                <div id="video_item">
                    <div class="image">
                        <a href="#"><img src="images/video.jpg"/></a>
                    </div>
                    <div class="description">
                        Description de  la vid�o pr�sent� dans ce blog <br/>
                        qui renvoi vers youtube.com
                    </div>
                </div>
                <!-- FIN VIDEO ITEM-->
                <!-- DEBUT VIDEO ITEM -->
                <div id="video_item">
                    <div class="image">
                        <a href="#"><img src="images/video.jpg"/></a>
                    </div>
                    <div class="description">
                        Description de  la vid�o pr�sent� dans ce blog <br/>
                        qui renvoi vers youtube.com
                    </div>
                </div>
                <!-- FIN VIDEO ITEM-->
                <!-- DEBUT VIDEO ITEM -->
                <div id="video_item">
                    <div class="image">
                        <a href="#"><img src="images/video.jpg"/></a>
                    </div>
                    <div class="description">
                        Description de  la vid�o pr�sent� dans ce blog <br/>
                        qui renvoi vers youtube.com
                    </div>
                </div>
                <!-- FIN VIDEO ITEM-->
                
                <div class="btn_plus">
                	<p>Plus...</p>
                </div>
                
            </div>
            <!-- FIN VIDEO-->
            
            <!-- DEBUT BANNIERE -->
            <div id="banniere">
            	<a href="#">
            		<img src="images/banniere.jpg"/>
                </a>
            </div>
            <!-- FIN BANNIERE-->
                       
        </div>
        <!-- FIN PUB-->
        
        <!-- DEBUT FOOTER -->
        	<!-- EXERCICE -->
        <!-- FIN FOOTER-->
    </div>
    <!-- FIN CONTENEUR -->
</body>
</html>
