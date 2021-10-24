<?php

$sname= "localhost";
$unmae= "root";
$password = "josuedavid45";

$db_name = "rbxfleet";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}