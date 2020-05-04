<?php

	function connect_db(){

		$mysql_host = "localhost";
		$mysql_user = "root";
		$mysql_db =  "esheba";
		$mysql_password = "";

		$db = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die("Something went wrong! Please try again later"). mysql_error();
		$dbc = mysql_select_db($mysql_db, $db) or die("Something went wrong! Please try again later"). mysql_error();
	
		return $dbc;
		
	}
	

?>