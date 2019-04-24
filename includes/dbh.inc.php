<?php
$servername="localhost";
$dbuserdame="root";
$dbpassword="";
$dbname="loginsystem";


$conn = mysqli_connect($servername, $dbuserdame, $dbpassword, $dbname);

if (!$conn) {
	die("Connection fehlgeschlagen: ".mysqli_connect_error());
}
?>
