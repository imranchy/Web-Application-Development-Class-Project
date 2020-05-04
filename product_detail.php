<?php

	include "connect.php";
	connect_db();
	include 'header.php';
	$header = header_file();
	include 'footer.php';
	$footer = footer_file();
	include "style.css";
	$content = " ";
	$content.= "<html>";

	$content.= "<head>";
	       $content.= "<title>eSheba</title>";
	$content.= "</head>";

	$content.= "<body>";

	       $content.= "<table border = '0' width =100%>";
	       $content.= "<tr><td>$header</td></tr>";

	       if(!isset($_SESSION)){
	       	session_start();
	       }

	       $product_id = $_GET['id']; 
	       $query = "SELECT * FROM product WHERE p_id=$product_id";
	       $result = mysql_query($query) or die(mysql_error());

	        $content.= "<tr>";
	       		$content.= "<td>";
	       		
	       while ($row = mysql_fetch_assoc($result)){
	       	$p_id = $row['p_id'];
	       	$p_image = $row['p_image'];
	       	$p_name = $row['p_name'];
	       	$p_details = $row['p_details'];
	       	$price = $row['p_sellingPrice'];
	       	$status = $row['p_availability'];
	       	
	       	$content.= "<table border=\"0\" width=\"50%\" align=\"center\" class='tab1'>";
	       	$content.= "<tr align='center'>";
	       		$content.= "<td width=\"10%\">";
	       		$content.= "<img align=\"center\" src=\"image/$p_image\" title=\"Image of $p_name\" alt=\"Image of $p_name\" width=\"220px\" height=\"250px\"><br><center>$p_name</center>";
	       		$content.= "</td>";
	       		$content.= "<td align='left'>$p_details<p align='left'><b>Price: $price TK</b></p></td>";

	       		
	       		if($status == 1 && $_SESSION['username'] ){
	       			$content.= "<td><p align='center'><br><br><a href=\"order.php\"><button style=\"background-color:lightblue; height:50px; width:100px\">Order Now</button></a></td>";
	       		}else if($status == 0 ){
	       			$content.= "<td align='center'><p align='left'><p style=\"color:red\"><b>Out of Stock</b></p></td>";
	       		}else if($status == 1){
	       			$content.= "<td align='center'><p align='ceneter'><p style=\"color:blue\"><b>In Stock</b></p></td>";
	       		}
	       	$content.= "</tr>";
	       	$content.= "</table>";
	       
	       }

	       	$content.= "</td>";
	       	$content.= "</tr>";

	     $content .= "</table>";
	     $content.="<tr><td>$footer</td></tr>";

	$content .= "</body>";
	$content .= "</html>";

	echo $content;
	

?>