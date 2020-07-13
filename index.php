<! DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/jordan.css" />
       <title> connexion</title>
   </head>
   
<body>

          <div id="p1">  
            <img src="images/logo_openet.png" alt="logo de openet" id="logo" /> 
		        <nav>  <a href="inscription.php" class="e">Inscription </a> </nav>  
     
          </div>
		
			<h1 style="font-weight : bold;"> 
				Bienvenu sur OpenNetwork, veuillez entrer vos parametres de connexion. 
			</h1><br /><br /> 
   
        <section id="q1">
				   
		
		    <div id="p6">
				<fieldset class="f_ieldset">
					<legend>Connexion</legend>               
                        <form method="post"  action="traiter_connexion.php">         					 
						    <p> Username:</p> 			
						      <input type="text" name="username" placeholder="nom d'utilisateur" class="l3" />						   
					        <p> Mot de passe:</p> 
						      <input type="password" name="password" placeholder="votre mot de passe" class="l4" />						 
							  
							  <div id="p25">
							    <input type="submit" name="submit" value="se connecter" class="se_connecter" />
							    <input type="reset" name="reset" value="annuler" class="Annuler3" />
							  	
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