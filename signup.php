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
$content.= "<h3 align=\"center\">Please complete the Sign Up form</h3>";
$content.="<tr align='center'><td><img alt=\"Sign Up Now\" title=\"Sign Up now\" src=\"signup.jpg\" height='130px' width='200px'></td></tr>";
$content.="<form action=\"action.php\" method=\"post\" name=\"signup\" onsubmit=\"return checkform()\">";
$content.="<table style=\"font-size: 16px\" border=\"0\" align=\"center\" width=\"35%\" class='tab1'>";
$content.="<tr>";
	$content .="<td>First Name</td>";
	$content.="<td><input type=\"text\" name=\"first_name\"></td>";
	$content.="</tr>";
	$content.="<tr>";
		$content.="<td>Last Name</td>";
		$content.="<td><input type=\"text\" name=\"last_name\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Username</td>";
	    $content.="<td><input type=\"text\" name=\"username\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	$content.="<tr>";
	    $content .="<td>Phone</td>";
	    $content.="<td><input type=\"text\" name=\"phone\" maxlength=\"11\" minlength=\"11\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Address</td>";
	    $content.="<td><input type=\"text\" name=\"address\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Email</td>";
	    $content.="<td><input type=\"text\" name=\"Email\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Password</td>";
	    $content.="<td><input type=\"password\" name=\"password\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Confirm Password</td>";
	    $content.="<td><input type=\"password\" name=\"confirm_password\"></td>";
	$content.="</tr>";
	    $content.="<td colspan=\"2\" align=\"center\"><button style=\"background-color:#F09A1A; height:35px; width:75px\" name=\"action\" value=\"Signup\">Sign Up</button></td>";
	       	$content.="</tr>";		
	    $content .= "</table>";
	    $content.="</form>";

	    $content.="</td></tr>";
	    $content.="<tr><td>$footer</td></tr>";

	$content.="</table>";  
$content .= "</body>";
$content .= "</html>";

echo $content;

?>

<script type="text/javascript">

	function checkform(){

		var first_name=document.forms ['signup']['first_name'].value;
		if(first_name==''){
			alert('First name must be filled out');
			return false;
		} else {
			var letters=/^[A-Za-z ]+$/;
			if(!first_name.match(letters)){
				alert('Please enter your name correctly');
				return false;
			}
		}

		var last_name=document.forms ['signup']['last_name'].value;
		if(last_name==''){
			alert('last_name name must be filled out');
			return false;
		}else {
			var letters=/^[A-Za-z ]+$/;
			if(!last_name.match(letters)){
				alert('Please enter your name correctly');
				return false;
			}
		}

		var username=document.forms ['signup']['username'].value;
		if(username==''){
			alert('username must be filled out');
			return false;
		}

		var phone=document.forms ['signup']['phone'].value;
		if(phone==''){
			alert('Phone must be filled out');
			return false;
		} else {
			var digits=/^[0-9]+$/;
		 	if(!phone.match(digits)){
		 	alert('Please enter your phone no correctly');
		 	return false;	
		 	}
		}if (phone.length < 11) {
			alert('Phone length must be 11 digit');
			return false;
		}
	
		var address=document.forms ['signup']['address'].value;
		if(address==''){
			alert('Address must be filled out');
			return false;
		}

		var email = document.forms['signup']['Email'].value;
		if(email==''){
			alert('Email must be entered');
			return false;
		}else{
			var check = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(!email.match(check)){
				alert('Please enter a valid email');
				return false;
			}
		}

		var password = document.forms['signup']['password'].value;
		var confirm_password = document.forms['signup']['confirm_password'].value;
		if (password=='') {
			alert('Password can not be empty');
			return false;
		}else{	
			var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
			if(!password.match(mediumRegex)){
				alert('Please enter your password correctly');
				return false;
			}
		}
		if(password!=confirm_password){
			alert('Password did not match');
			return false;
		}


	}
	

</script>