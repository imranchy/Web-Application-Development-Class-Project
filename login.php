<?php

	include 'header.php';
	$header = header_file();
	include 'footer.php';
	$footer = footer_file();
	include "style.css";
	$content = " ";
	$content .= "<html>";

	$content .= "<head>";
	       $content .= "<title>eSheba</title>";
	$content .= "</head>";

	$content .= "<body>";


	       $content .= "<table border ='0' width =100%>";
	       $content.= "<tr><td>$header</td></tr>";
	       $content .= "<tr><td>";
	       $content.= "<h4 align='center'>Welcome to the Log in pannel</h4>";
	       $content.="<tr align=\"center\"><td><img alt=\"Image of Log In\" title=\"Log In\" src=\"login.jpg\" height=\"120px\" width=\"140px\"></td><br></tr>";
	     $content.="<form action=\"action.php\" method=\"post\" name=\"login\" onsubmit=\"return checkform()\">";
	       $content.="<table  style=\"font-size: 18px\" border=\"0\" align=\"center\" width=\"30%\" class='tab1'>";
	      
	       	$content.="<tr>";
	       		$content .="<td>Username</td>";
	       		$content.="<td><input type=\"text\" placeholder=\"Username\" name=\"username\"></td>";
	       	$content.="</tr>";
	       	$content.="<tr>";
	       		$content.="<td>Password</td>";
	       		$content.="<td><input type=\"password\" placeholder=\"Password\" name=\"password\"><br></td>";
	       		$content.="</tr>";
	       	$content.="<tr>";
	       		$content.="<td colspan=\"2\" align=\"center\"><button style=\"background-color:#F09A1A; height:28px; width:75px\" name=\"action\" value=\"Login\">Log In</button></td>";
	       		$content.="</tr>";		
	     $content .= "</table>";
	     $content.="</form>";

	     $content.="<h4 align=\"center\">Not registered yet? Please click <a href=\"signup.php\"> Here</a> to register.</h4>";

	     $content.="</td></tr>";
	     $content.="<tr><td>$footer</td></tr>";

		$content.="</table>";     
	$content .= "</body>";
	$content .= "</html>";

	echo $content;

?>

<script type="text/javascript">

	function checkform(){

		var username=document.forms ['login']['username'].value;
		if(username==''){
			alert('Please enter your Username');
			return false;
		}
	
		var password=document.forms ['login']['password'].value;
		if(password==''){
			alert('Please enter your Password');
			return false;
		}
		
	}

</script>