<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "password";
$dBName = "phpproject01";	//needs to have the same name for our db

// procedureal php, so we will use mysqli (secure and uptodate)
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
	die ("Connection failed: " . mysqli_connect_error());
}
