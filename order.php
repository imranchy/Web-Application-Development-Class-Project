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

$content.= "<h4 align='center'>Please complete the following form</h4>";
$content.= "<tr align='center'><td><img src=\"ordernow.jpg\" height='140px' width='180px'></td></tr>";

$content.="<form action=\"action.php\" method=\"post\" name=\"order\" onsubmit=\"return checkform()\">";
$content.="<table style='font-size: 16px' border=\"0\" align=\"center\" width=\"40%\" class='tab1'>";
$content.="<tr>";
	$content .="<td>Name</td>";
	$content.="<td><input type=\"text\" name=\"name\"></td>";
	$content.="</tr>";
	$content.="<tr>";
		$content.="<td>Address</td>";
		$content.="<td><input type=\"text\" name=\"address\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Phone</td>";
	    $content.="<td><input type=\"text\" name=\"phone\" maxlength=\"11\" minlength=\"11\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Payment Option</td>";
	    $content.="<td><input type=\"text\" name=\"pay_type\"></td>";
	$content.="</tr>";
	$content.="<tr>";
	    $content .="<td>Transaction ID:</td>";
	    $content.="<td><input type=\"text\" name=\"tran_id\"></td>";
	$content.="</tr>";
	$content.="<tr>";      
	    $content .="<td>Price:</td>";
	    $content.="<td><input type=\"text\" name=\"price\"></td>";
	$content.="</tr>";
	    $content.="<td colspan=\"2\" align=\"center\"><button class='btn' name=\"action\" value=\"Order\">Order</button></td>";
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

		var name=document.forms ['order']['name'].value;
		if(name==''){
			alert('Name must be filled out');
			return false;
		} else {
			var letters=/^[A-Za-z ]+$/;
			if(!name.match(letters)){
				alert('Please enter your name properly');
				return false;
			}
		}

		var address=document.forms ['order']['address'].value;
		if(address==''){
			alert('Address must be filled out');
			return false;
		}

		var phone=document.forms ['order']['phone'].value;
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
	
		var pay=document.forms ['order']['pay_type'].value;
		if(pay==''){
			alert('Please enter a payment option: bkash or Rocket');
			return false;
		}
		
		
		var id=document.forms ['order']['tran_id'].value;
		if(id==''){
			alert('Please enter your Transaction ID');
			return false;
		}

		var price=document.forms ['order']['price'].value;
		if(price==''){
			alert('Plese enter the price of the product');
			return false;
		}
	
	}

</script>