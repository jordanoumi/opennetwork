<?php 
session_start();
include_once("connection_db.php");
?>

<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/jordan.css" />
        <title> tchat </title>
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
   
 <div id="r5">
   <?php 
      $requete=$bd->prepare('SELECT prenom FROM user WHERE id=?');
      $requete->execute(array($_GET['id'])) or die(print_r($requete->errorInfo()));
      if($data=$requete->fetch()){ 
    ?>
      <p style="font-weight: bold;"> Tchat avec  <?=$data['prenom']?> </p> <br /> 
    
  <div id="ovflow">
    <?php
        
        $message=$bd->query('SELECT * FROM message ORDER BY id_mess DESC');         
while($info_recu_de_message=$message->fetch()){  
 if($info_recu_de_message['id_source']==$_SESSION["id"] and $info_recu_de_message['id_dest']==$_GET['id']){
   $requete1=$bd->prepare('SELECT * FROM user WHERE id=:id');
   $requete1->execute(array('id'=>$info_recu_de_message['id_source'])) or die(print_r($requete1->errorInfo()));
     if($data1=$requete1->fetch()){ 
   ?>
   <div id="p23">
      <p class="e1"> <?= 'Vous' ?> <br> <?= $info_recu_de_message['contenu'] ?> </p>					
             <span> <?php $info_recu_de_message['date_post']  ?> </span>
   </div>
<?php }       
   }
     if($info_recu_de_message['id_source']==$_GET['id'] and $info_recu_de_message['id_dest']==$_SESSION["id"] ){
?>   
   <div id="p22">
      <p class="e1"> <?=$data['prenom'] ?> <br> <?= $info_recu_de_message['contenu'] ?> </p>					
             <span> <?= $info_recu_de_message['date_post'] ?> </span>
   </div>
<?php }}} ?>
  </div>
			<div id="p24"> 
				<form method="post"  action="traiter_envoie_message.php?id=<?= $_GET['id'] ?>">
         
					<input type="text" name="message" placeholder="Taper votre message" class="l6" />						 
                    <p>   
						    <input type="submit" name="submit" value="envoyer" class="Envoyer2" /> 
							  <input type="reset"  name="reset" value="annuler" class="Annuler2"  />
					</p>               
                </form>                  
		    </div>	
 </div>			 
            <div id="p2"> 
				<footer>
                    <h5> Copyright &copy; openNetwork 2016 Tous droits réservés</h5>
				</footer> 
			</div>
                                     
</body> 
</html> 

