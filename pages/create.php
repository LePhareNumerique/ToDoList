<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter une tâche</title>
		<link rel="stylesheet" type="text/css" href="../inc/css/style.css">
	</head>

	<body>
		
		<h1>Ajouter une tâche</h1>
		<div class="fond">
			<form action="../process/traitement.php" method="post">
				<div class="entreeform">
					<div class="formleft">
						<label for="item">Tâche :</label>
					</div>
					<div class="formright">
						<input type="text" name="item" value="" required="required" autofocus>
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="com">Commentaire :</label>
					</div>
					<div class="formright">
						<textarea name="com" value=""></textarea>
					</div>
				</div>
				
				<button type="submit" name="button">Envoyer</button>
			</form>
		</div>
		</br>
		<a href="index.php">Retour à la liste des tâches</a>
	</body>
</html>
