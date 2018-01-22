<?php
	require '../inc/connect.php';
	
	$sql='DELETE FROM taches WHERE id ='.$_GET["id"];

	$bdd->exec($sql);
	
	header('location: ../index.php');
?>