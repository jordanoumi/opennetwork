<?php
try
{
   $bd = new PDO('mysql:host=localhost;dbname=opennetwork', 'root', '');

}catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

?>