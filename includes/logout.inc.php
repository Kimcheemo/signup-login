<?php

session_start();	// need to start a session in order to delte the variables
session_unset();	// unsets any sessions we might have
session_destroy();	// logs out the user

header("location: ../index.php");
exit();
