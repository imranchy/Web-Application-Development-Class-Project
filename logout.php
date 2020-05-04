<?php

	session_start();
	$_SESSION['id'] = "";
	$_SESSION['f_name'] = "";
	$_SESSION['username'] = "";

	header("Location: index.php");

?>