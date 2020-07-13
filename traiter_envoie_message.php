
<?php
session_start();
include_once("connection_db.php");
if(isset($_POST['message']) and !empty($_POST['message'])){
// requete sql1 a executer
$sql1='INSERT INTO message (date_post, contenu, id_source, id_dest) 
     VALUES(now(), :contenu, :id_source, :id_dest)';
// execution de la requete    
$req = $bd->prepare($sql1);
$req->execute(array('contenu' => $_POST['message'],
                    'id_source' => $_SESSION["id"],
                    'id_dest' => $_GET['id'])) or die(print_r($req->errorInfo()));
  }
  header("Location: tchat.php?id={$_GET["id"]}");
?>
 