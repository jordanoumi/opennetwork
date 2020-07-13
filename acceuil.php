<?php
 session_start();
 include_once("connection_db.php");
 $reponse = $bd->query('SELECT * FROM publication');
?>

<! DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/jordan.css" />
       <title> acceuil </title>
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
   
      <div id="r1">
                   
		          <div id="p8"> 
                  <fieldset>
                      <legend> publier </legend>  
				                <form method="post"  name="texte" action="traiter_envoie_publication.php" >   
                          <textarea name="texte" id="texte" rows=5 cols=60 placeholder="Ecrivez quelque chose" ></textarea>
                            <p>   
							                <input type="submit" name="submit" value="publier" class="Publier1" />
							                <input type="reset" name="reset" value="annuler" class="Annuler1"  />
							              </p>
                        </form>
                  </fieldset> 				   
		          </div> 
                            <p>
                                <div class="leftblock"> </div> 
                                <div class="milieu"> Publications </div> 
                                <div class="rightblock"> </div> 
                            </p>
            <div class="oveflow_acceuil">            
            <?php 
                   /* recuperation de l'information issu de la requete $reponse*/
                    while($info_pour_publication=$reponse->fetch()){
                    $req2=$bd->prepare('SELECT prenom FROM user WHERE id=?');
                    $req2->execute(array($info_pour_publication['id_source']));
                    $auteur=$req2->fetch();
                    $nom_auteur= ($auteur['prenom']==$_SESSION['prenom'])? 'Vous avez publié:' 
                    : ucfirst($auteur['prenom']).'&nbsp; a publié';
                       
                   ?>         
                     <div  class="publication">
                       <?= $nom_auteur ?>
                        <p class="contenu_publi"> 
                          <?= $info_pour_publication['contenu'] ?>
                        </p> 					
                            <span class="pour_la_date"> <?= $info_pour_publication['date_post']?> </span> 
                     </div>

                  <?php } ?>	 
	 
        
            </div>  
      </div><br /> 

						  <div id="p2"> 
							  <footer>
							      <h5> Copyright &copy;  openNetwork 2016 Tous droits réservés</h5>
							  </footer> 
                  </div>
 </body> 
 </html> 