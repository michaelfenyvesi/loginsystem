<?php
$servername="localhost";
$dbuserdame="root";
$dbpassword="";
$dbname="loginsystem";

$db = mysqli_connect("localhost", "root", "", "loginsystem");


if(!$db)
{
  die("Verbindungsfehler: ".mysqli_connect_error());
}
