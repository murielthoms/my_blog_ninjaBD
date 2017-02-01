<?php
require 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=My_blog');
ORM::configure('username','root');
ORM::configure('password','root');


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">

</head>
<body>

	<div class="ui inverted segment">
	<form action="submit_post.php" method="post" class="ui inverted form">
			<div class="field">
				<label>Titre</label>
				<input type="text" name="title" placeholder="titre">
			</div>
			<div class="field">
				<label>Auteur</label>
				<input type="text" name="author" placeholder="Auteur">
			</div>
			<div class="field">
				<label>Texte</label>
				<textarea name="content" type="text"></textarea>
			</div>
			<area></area>
			<div class="field">
				<label>Ajouté le</label>
				<input type="text" name="add" placeholder="Ajouté le">
			</div>
			<div class="field">
				<label>Mis à jour le</label>
				<input type="text" name="update" placeholder="Mis à jour le">
			</div>

			<button class="ui large green button">Enregistrer</button>
		</form>
	</div>
</body>
</html>