<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'screb';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL Database:'. mysqli_connect_error());
}
?>
