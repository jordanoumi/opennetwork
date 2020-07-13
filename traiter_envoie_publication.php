
 <?php
session_start();
include_once("connection_db.php");
  if(isset($_POST['texte']) and !empty($_POST['texte'])){
    // requete sql1 a executer
   $sql1='INSERT INTO publication(date_post, contenu, id_source) 
        VALUES(now(), :contenu, :id_source)';
    // execution de la requete    
   $req = $bd->prepare($sql1);
   $req->execute(array('contenu'=> $_POST['texte'],
                   'id_source'=> $_SESSION["id"])) or die(print_r($req->errorInfo()));                     
   }

    header("location:acceuil.php");
 
  ?>
