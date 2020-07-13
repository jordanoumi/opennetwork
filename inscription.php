<! DOCTYPE html>
<html>
    <head>
	   <meta charset="utf-8">
       <link rel="stylesheet" href="css/jordan.css" />
       <title> inscription</title>
    </head>
   
<body>

	<div id="p1">
        <img src="images/logo_openet.png" alt="logo de openet" id="logo" /> 
		  <nav> <a href="inscription.php" class="e">  Inscription </a> </nav>   
    </div>
		
        <h1 style="font-weight : bold;"> Bienvenu sur OpenNetwork, 
		   veuillez remplir le formulaire suivant pour vous inscrire.
		</h1>  
   
   <section id="p5">
			       
      <div id="p3">
		 <fieldset style="height: 420px; padding-top: 0px;">
		 <legend>Inscription</legend>
                             
	        <form method="post"  action="traiter_inscription.php">
               
		        <p> Prénom:</p> 				       
			      <input type="text" name="prenom" placeholder="votre prénom" class="l2" />						 
						                        
		        <p> Username:</p> 		
			      <input type="text" name="username" placeholder="nom d'utilisateur" class="l3" />						 
						     	   
		        <p> Mot de passe:</p>      
		          <input type="password" name="password" id="Password" placeholder="votre mot de passe" class="l4" />						 
						       					    
		        <p> Sexe: </p> 
			      <input type="radio" name="sexe" value="H" id="H" checked />  <label for="H">H</label> 
			      <input type="radio" name="sexe" value="F" id="F" />  <label for="F">F</label> 
							  	         
		        <P style="position: relative; bottom: 10px;">Date de naissance </p>
                  

				    <select name="jour" >
					    <option value="default"> jour </option>
						<?php
					           for($i=1 ; $i<32 ; $i++ ){ 
						         echo '<option value='.$i.'>'. $i .'</option>';	
								 }
					        ?>		  
					    </select>    

					<div class="apres_jour"></div>

					<select name="mois" class="block_date_mois"> 
					   <option value="default"> Mois </option>
					   <?php
					           for($j=1 ; $j<13 ; $j++ ){  
						         echo '<option value='.$j.'>'. $j .'</option>';	
						         }	 
					        ?>		    
		    
					</select>
				<div class="apres_mois"></div>            
				    <select name="annee" class="block_date_annee"> 
					   <option value="default"> Année </option>
					        <?php
					           for($k=0 ; $k<61 ; $k++ ){
								   $a= 1960+$k;	  
								  echo '<option value='.$a.'>'. $a .'</option>';	
						         }
					        ?>
			        </select>
			        		   
		        <p style="position: relative; bottom: 43px;"> Ville:</p> 		
		           <input type="text" name="ville"   placeholder="ville"  class="l5"  />						 
						      			  
				       <div id="p4">
					      <input type="submit" name="submit" value="envoyer" class="Envoyer" />
				          <input type="reset" name="reset" value="annuler" class="Annuler"  />
				         </div>		  
	        </form> 
		</fieldset>  
      </div> 
    </section>
                        <div id="p2"> 
							<footer>
							    <h5> Copyright &copy;  openNetwork 2016 Tous droits réservés</h5>
							</footer> 
						</div>	

 </body> 
</html> 