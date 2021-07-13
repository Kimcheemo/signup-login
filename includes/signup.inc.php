<?php

// make sure user access the proper way
// isset: if this is set inside the code then continue..if not bring user back to sign in page
if (isset($_POST["submit"])) {
	
	$name = $_POST["name"];	//need to have the superglobal the same name as what we set it in signup.php
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	//link files
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';


	// error handling
	if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=passwordsdontmatch");
		exit();
	}
	if (uidExists($conn, $username, $email) !== false) {
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	createUser($conn, $name, $email, $username, $pwd);

}

else {
	// header is a function built in php that sends the userback to a particular place
	header("location: ../signup.php");	
}
