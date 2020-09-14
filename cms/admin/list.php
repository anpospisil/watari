<?php
require '../app/start.php';

$pages = $db->query("
	SELECT id, name, position, bio
	FROM our_team
	ORDER BY id
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';

?>