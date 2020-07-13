<?php
session_start();
include_once("connection_db.php");
$reponse = $bd->query('SELECT * FROM user');
?>

<! DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/jordan.css" />
    <title> contacts </title>
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
                      <a href="deconnexion.php" class="e">Déconnexion </a>  	        										    						
				    </nav> 
            </div>

        </div> 

        <div id="r4">
            <p style="font-weight: bold;"> Vos contacts</p> <br />
            <div class="oveflow_contact">
               <?php
                       /* recuperation de l'information issu de la requete $reponse*/
                while($info_pour_contact=$reponse->fetch()){
                    if($info_pour_contact['id']!==$_SESSION['id']){
                ?>
                     <div id="p17">
                        <p> <?= $info_pour_contact['prenom'] ?> </p> 
                            <p class="e6"><a href="tchat.php?id=<?= $info_pour_contact['id']?>">écrire </a> </p> 
                      </div>
                <?php }} ?> 
            </div>    
        </div><br />
				<div id="p2"> 
					<footer>
						<h5> Copyright &copy; openNetwork 2016 Tous droits réservés</h5>
					</footer> 
				</div>					
						 
</body> 
</html> 