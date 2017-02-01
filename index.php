<?php
require 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=My_blog');
ORM::configure('username','root');
ORM::configure('password','root');

$articles = ORM::for_table('post')->find_many();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Mon blog</h1>
	<table class="ui selectable inverted table">
		<tr>
			<th>Titre</th>
			<th>Auteur</th>
			<th>Contenu</th>
			<th>Crée le</th>
			<th>Mise à jour le</th>
		</tr>
		<?php foreach ($articles as $value):?>
			<tr>
				<td><?=$value['title']?></td>
				<td><?=$value['author']?></td>
				<td><?=$value['content']?></td>
				<td><?=$value['created_at']?></td>
				<td><?=$value['updated_at']?></td>
			</tr>

		<?php endforeach;?>



	</body>
	</html>