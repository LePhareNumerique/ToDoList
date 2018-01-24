<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modifier une tâche</title>
		<link rel="stylesheet" type="text/css" href="../inc/css/style.css">
	</head>

	<body>

		<?php
			require '../inc/connect.php';

			$sql='SELECT * FROM taches WHERE id = '.$_GET['id'].'';
			$res=$bdd->query($sql);
			$resu=$res->fetch();
		?>

		<h1>Modifier une tâche</h1>
		<div class="fond">
			<form action="../process/traitement2.php" method="post">

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<div class="entreeform">
					<div class="formleft">
						<label for="item">Tâche</label>
					</div>
					<div class="formright">
						<input type="text" name="item" value="<?php echo $resu['item'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="com">Commentaire</label>
					</div>
					<div class="formright">
						<!-- <input type="text" name="com" value="<?php echo $resu['commentaire'] ?>"> -->
						<textarea name="com"><?php echo $resu['commentaire'] ?></textarea>
					</div>
				</div>
				
				<button type="submit" name="button">Modifier</button>
			</form>
		</div>
		<br>
		<a href="../index.php">Retour à la liste des tâches</a>
	</body>
</html>
