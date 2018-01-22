<?php
			require '../inc/connect.php';
			
			$requete = $bdd->PREPARE('INSERT INTO taches(date_ajout, item, commentaire) VALUES (NOW(), :item, :commentaire)');
			
			$requete->execute(array(
				'item'=>$_POST['item'],
				'commentaire'=>$_POST['com']
				));
			
			header('location: ../index.php');