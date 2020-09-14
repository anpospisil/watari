<?php
$connection = mysqli_connect('localhost', 'andrewp3_andrew', 'Watari19');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'andrewp3_watari');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>