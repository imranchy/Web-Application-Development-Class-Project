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

	$content.="<h1 align='center'>Contact Information<br><br></h2>";
	$content.="<h4 align='center'>Corporate Office:</h4>";
	$content.="<p align='center' style='font-size: 18px'>Crystal Palace, 3rd Floor<br>
	House: SE (D) 22<br>
	Gulshan-1, Dhaka-1212.<br>
	Help Line: 01845 88 88 88 | 01750 56 66 66<br><br></p>";
	$content.= "<p style='font-size: 18px' align='center'><b>Email:</b><br><br>info@esheba.org</p>";
	    
$content .= "</body>";
$content .= "</html>";

echo $content;

?>