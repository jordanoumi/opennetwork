<?php
	  session_start();
	  include_once("connection_db.php"); 
	   
       if(isset($_POST['username']) and isset($_POST['password']) and 
             !empty($_POST['username']) and !empty($_POST['password'])){

		// requete sql a executer		
		 $sql='SELECT id,nom,prenom FROM user WHERE username=:username and password=:password';
		 //execution de la requete
	     $req=$bd->prepare($sql);
	     $req->execute([
		                "username" => $_POST['username'],
						 "password" => $_POST['password']]) or die(print_r($req->errorInfo()));
						 
        // verifiction du contenu de la requete  et affectation a la variable de session
	                if($data=$req->fetch()){
	       	        $_SESSION["id"]=$data['id'];
		            $_SESSION["username"]=$_POST['username'];
		            $_SESSION["nom"]=$data['nom'];
		            $_SESSION["prenom"]=$data['prenom'];
		            header("location:acceuil.php"); 
					exit(0);
		    }else{
				header("location:inscription.php");	
			}  					

		 }else{
			header("location:index.php");
			}
		 
?>