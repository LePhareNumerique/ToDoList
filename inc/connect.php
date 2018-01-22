<?php
	
	$serveur = "localhost";
	$login = "root";
	$pass = "";

	try{
	$bdd = new PDO("mysql:host=$serveur;dbname=todolist;charset=utf8", $login, $pass);
	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e){
		echo 'Et merde, échec de la connexion: ' .$e->getMessage();
	}
?>