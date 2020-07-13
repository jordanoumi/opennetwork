<?php
session_start();
include_once("connection_db.php");
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['username'])
 and isset($_POST['password']) and isset($_POST['sexe']) and isset($_POST['annee'])
 and isset($_POST['mois']) and isset($_POST['jour']) and isset($_POST['ville'])
 and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['username'])
 and !empty($_POST['password']) and !empty($_POST['sexe']) and !empty($_POST['annee'])
 and !empty($_POST['mois']) and !empty($_POST['jour']) and !empty($_POST['ville']) and isset($_POST['submit']))
 {
    // requete sql d'enregistrement a executer
$sql='INSERT INTO user(nom, prenom, username, password, sexe, date_naiss, ville)
       VALUES(:nom, :prenom, :username, :password, :sexe, :date_naiss, :ville)';
   //executation de la requete    
$req = $bd->prepare($sql);
$req->execute(array(
'nom' => $_POST['nom'],
'prenom' => $_POST['prenom'],
'username' => $_POST['username'],
'password' => $_POST['password'],
'sexe' => $_POST['sexe'],
'date_naiss' => $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'], 
'ville' => $_POST['ville'])) or die(print_r($req->errorInfo()));

// On garde les elements de l'utilidateur connecte dans la variable de session

    $userId = $bd->query("SELECT max(id) as id FROM user")->fetch();
           $_SESSION["id"]=$userId['id'];
           $_SESSION["username"]=$_POST['username'];
           $_SESSION["nom"]=$_POST['nom'];
           $_SESSION["prenom"]=$_POST['prenom'];
           header("location:index.php"); 
}else{
    header("location:inscription.php");
}
  ?>

