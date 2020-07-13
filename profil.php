<?php
session_start();
include_once("connection_db.php");
?>

<! DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/jordan.css" />
       <title> profil </title>
    </head>
   
<body>

        <div id="p1">

            <div > 
              <img src="images/logo_openet.png" alt="logo de openet" id="logo" /> 
		        <nav>   
                  <a href="acceuil.php"  class="e">Accueil</a>       
				          <a href="contact.php"  class="e">Contacts</a>      
				          <a href="messages.php" class="e">Messages</a> 
                  <a href="profil.php"  class="e">Profil</a>
                  <a href="deconnexion.php" class="e">Déconnexion</a> 											    						
				</nav>
            </div>

        </div>

   
    <div id="r2">
	          <p style="font-weight: bold;"> Vos informations de profils</p> <br />
            <?php 
                $req3=$bd->prepare('SELECT nom,prenom,username,sexe,date_naiss,ville FROM user WHERE id=?');
                $req3->execute(array($_SESSION["id"]));
                $info_profil=$req3->fetch();
                ?>         
            <div id="p12">
                     <p class="e4">Nom: <?=$info_profil['nom'] ?>
                    <br> Prénom: <?=$info_profil['prenom'] ?>
                    <br>Username:<?=$info_profil['username'] ?>
                    <br>Sexe: <?=$info_profil['sexe'] ?>
                    <br>Age: <?php
                                 $date= explode('-',$info_profil['date_naiss']);
                                 $age= 2020-$date[0];
                                 echo $age."&nbsp;ans";
                                ?>                
                    <br>Ville: <?=$info_profil['ville'] ?>
              </p>		 
            </div>		
            <?php  ?> 
    </div> 
				 
			<div id="p2"> 
				<footer>
					<h5> Copyright &copy;  openNetwork 2016 Tous droits réservés</h5>
				</footer> 
            </div>
            					 
</body> 
</html> 