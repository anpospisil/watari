<?php

ini_set('display errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://andrewp2.sgedu.site/watari_site/cms/');

$db = new PDO('mysql:host=localhost;dbname=andrewp3_watari', 'andrewp3_andrew', 'Watari19');

require 'fuctions.php';
?>