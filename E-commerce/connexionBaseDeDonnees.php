<?php 
try{
	$db = new PDO('mysql:host=localhost;dbname=boutique','root','');
} catch(PDOException $e) {
	$die("Erreur de connexion! ".$e->getMessage());
}
 ?>