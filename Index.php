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

	       $query = "SELECT * FROM product";
	       $result = mysql_query($query) or die(mysql_error());

	        $content.= "<tr>";
	       		$content.= "<td>";
	       		$content.= "<div align=\"center\">";
	       		$content.= "<ul class = rig colums-5>";

	       while ($row = mysql_fetch_assoc($result)){
	       	$p_id = $row['p_id'];
	       	$p_image = $row['p_image'];
	       	$p_name = $row['p_name'];
	       	$price = $row['p_sellingPrice'];
	       	$content.= "<li><a href=product_detail.php?id=$p_id style=\"text-decoration: none;\">";
	       	$content.= "<img align=\"center\" title=\"Image of $p_name\" alt=\"Image of $p_name\" src=\"image/$p_image\" width=\"120px\" height=\"120px\">";
	       	$content.= "<h2 align=\"center\">$p_name</h2></a>";
	       	$content.= "</li>";
	       
	       }

	       	$content.= "</ul>";
	       	$content.= "</div>";
	       	$content.= "</td>";
	       	$content.= "</tr>";

	       $content.="<tr><td>$footer</td></tr>";

	     $content .= "</table>";
	     

	$content .= "</body>";
	$content .= "</html>";

	echo $content;
	

?>		