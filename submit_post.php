
<?php 

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$message = '<div class="ui negative message"><i class="close icon"></i>
  <div class="header">Attention, un ou plusieurs champs sont vides !</div></div>';
if(empty($title) || empty($author) || empty($content)){
	include_once 'form.php';
	echo $message;
} 
else{
	require_once 'index.php';
}
?>