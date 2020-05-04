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
$content.="</td></tr>";

$content.="<tr><td>$footer</td></tr>";

	$content.="</table>";

	$content.="<table align='center' border='1' width='100%' class='tab1'>";
		$content.= "<tr>";
			$content.="<td>";
			$content.= "<h3>Virtual Shop</h3>";
			$content.="</td>";
			$content.="<td>";
			$content.="<p><b>What We Do?</b><br>
	Virtual shop is a very modern and unique concept where you can place purchase order for any product from any shop or company<br> as per your requirements.<br><br>
	<b>Key benefit of our services:</b><br>
	No need to move far places for this services<br><br>
	You can save time without interrupting your daily routine<br><br>
	Cost Effective, Simple, Secure & Hassle Free e-Service<br><br>
	Reducing your daily work loads<br><br>
	On time service deliver</p>";
			$content.="</td>";
		$content.="</tr>";

		$content.="<tr>";
		$content.="<td>";
			$content.="<h3>Parcel Delivery</h3>";
		$content.="</td>";
		$content.="<td>";
			$content.="<p><b>What We Do?</b><br>
			You can send any types of document, gift or product within few hours in Dhaka city.<br><br>
	<b>Key benefits of our service:</b><br>
	No need to move far places<br><br>
	You can save time without interrupting your daily routine<br><br>
	Cost Effective, Simple, Secure & Hassle Free e-Service<br><br>
	Reducing your daily work loads<br><br>
	On time service deliver<br><br>

	<b>Trams & Condition:</b><br>
	The service charge applicable only for one way (pick & drop) but if it is return from B party then we will back you again and<br> the service charge will be made as both way.</p>";
		$content.="</td>";
		$content.="</tr>";

		$content.="<tr>";
		$content.="<td>";
			$content.="<h3>Virtual Payment</h3>";
		$content.="</td>";
		$content.="<td>";
			$content.="<p><b>What We Do?</b><br>
	We are depositing your funds to any bank account on behalf of you.<br><br>

	<b>Key benefits of our service:</b><br>
	Anytime from anywhere<br><br>
	No need to move far places for this services<br><br>
	Avoiding long queue & traffic jam<br><br>
	You can save time without interrupting your daily routine<br><br>
	Cost Effective, Simple, Secure & Hassle Free e-Service<br><br>

	<b>Trams & Condition</b><br>
	Max. Payment 25K per transaction.<br>
	Payment service is available only for eSheba corporate clients<br>
	Mode of payment is either in hand cash or through online transfer.<br>
	In hand cash payment clients will receive payment receipt.</p>";
		$content.="</td>";
		$content.="</tr>";


		$content.="</table>";	

	
	    
$content .= "</body>";
$content .= "</html>";

echo $content;

?>