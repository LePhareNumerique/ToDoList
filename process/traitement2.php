<?php
			require '../inc/connect.php';
			
			$requete = $bdd->PREPARE('UPDATE taches SET date_ajout=NOW(), item=?, commentaire=? WHERE id = '.$_POST["id"]);
			
			$requete->execute(array($_POST['item'],$_POST['com']));
			
			header('location: ../index.php');