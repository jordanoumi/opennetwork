
<?php
session_start();
include_once("connection_db.php");
$reponse= $bd->prepare('SELECT * FROM message WHERE id_dest=:id_dest');
$reponse->execute(array("id_dest"=>$_SESSION["id"])) or die(print_r($reponse->errorInfo()));
?>

<! DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="css/jordan.css" />
       <title> messages </title>
  </head>
   
<body>
        <div id="p1">
            <div > 
                 <img src="images/logo_openet.png" alt="logo de openet" id="logo" /> 
		            <nav>   
                      <a href="acceuil.php"     class="e">Accueil</a>       
					  <a href="contact.php"     class="e">Contacts</a>      
					  <a href="messages.php"    class="e">Messages</a> 
                      <a href="profil.php"      class="e">Profil</a>
                      <a href="deconnexion.php" class="e">Déconnexion</a> 	        											    						
			       </nav> 
            </div>
        </div>  
        

        <div id="r3">
            <p style="font-weight: bold;"> Vos messages</p> <br />
            <div class="oveflow_message">
               <?php
              while($message_recus=$reponse->fetch()){ 
                 $req4=$bd->prepare('SELECT * FROM user WHERE id=:id');
                 $req4->execute(array('id'=> $message_recus['id_source']));
                   if($conteneur_req4=$req4->fetch()){
                       if($conteneur_req4['id']!==$_SESSION["id"]){                                        
                ?>
              <div id="p13">
          <p class="e5"> <?= $conteneur_req4['prenom'] ?>
                    <br> <?= $message_recus['contenu'] ?>
                    <br><a href="tchat.php?id=<?=$conteneur_req4['id']?>">Répondre</a></p> 
            </div>
     <?php }}}?>            
            </div>
        </div>  <br />  <br />  <br />              
						 
			<div id="p2"> 
				<footer>
				    <h5> Copyright &copy; openNetwork 2016 Tous droits réservés</h5>
				</footer> 
			</div>
						
						 
 </body> 
</html> 