<?php

require '../app/start.php';

if (!empty($_POST)){
	$name = $_POST['name'];
	$position = $_POST['position'];
	$bio = $_POST['bio'];

	$insertPage = $db->prepare("
		INSERT INTO our_team (name, position, bio)
		VALUES (:name, :position, :bio)
	");
	
	$insertPage->execute([
		'name'     => $name,
		'position' => $position,
		'bio' 	   => $bio,
	]);
	
	header('Location: ' . BASE_URL . '/admin/list.php');
}

require VIEW_ROOT . '/admin/add.php';

?>