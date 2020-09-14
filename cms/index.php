<?php
require 'app/start.php';

$pages = $db->query("
	SELECT id, name, position, bio
	FROM our_team
")->fetchAll(PDO::FETCH_ASSOC); 
 
require VIEW_ROOT . '/home.php';
?>
