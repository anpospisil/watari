<?php

require '../app/start.php';

if (!empty($_POST)) {
	$id	  = $_POST['id'];
	$name	  = $_POST['name'];
	$position = $_POST['position'];
	$bio 	  = $_POST['bio'];

	$updatePage = $db->prepare("
		UPDATE our_team
		SET
			name = :name,
			position = :position,
			bio = :bio
		WHERE id = :id 
	");
	
	$updatePage->execute([
		'id' => $id,
		'name'	=> $name,
		'position' => $position,
		'bio' => $bio,
	]);
	
	header('Location: ' . BASE_URL . '/admin/list.php');
} 

if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . '/admin/list.php');
	die();
}	

$page = $db->prepare("
	SELECT id, name, position, bio
	FROM our_team
	WHERE id = :id
");

$page->execute(['id' => $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';

?>