<?php

	function header_file() {
	$content = " ";
	$content.= "<html>";
	$content.= "<head>";
	       $content.= "<title>eSheba</title>";
	$content.= "</head>";
	$content.= "<body>";

	 $content.= "<table border='0' width =100%>";

	 if(!isset($_SESSION)){
	 	session_start();
	 }
 
	 if($_SESSION['username'] || $_SESSION['id'] || $_SESSION['f_name'] === true){
	 	  $content.= "<tr class='r2' align=\"center\" height='30px'>";
	       	$content.= "<td colspan=\"2\">";
	       	$content.= "<h3 style=\"color: white\">Welcome ".ucfirst($_SESSION["username"])."</h3>";
	       	$content.= "<br>";
	       	$content.= "<a href=\"logout.php\"><button style=\"background-color:#F09A1A; height:25px; width:70px\">Log Out</button></a>";
	       	$content.= "</td>";
	       $content.= "</tr>";
	 }else{
	 	   $content.= "<tr class='r1' align=\"right\">";
	       	$content.= "<td colspan=\"2\">";
	       	$content.= "<a href=\"login.php\"><button align=\"right\" style=\"background-color:#F09A1A; height:25px; width:60px\">Log In</button></a>";
	       	$content.= " &nbsp&nbsp ";
	       	$content.= "<a href=\"signup.php\"><button align=\"right\" style=\"background-color:#F09A1A; height:25px; width:70px\">Sign Up</button></a>";
	       	$content.= "</td>";
	       $content.= "</tr>";
	 }


	$content .= "<tr class='r3'>";
		$content .= "<td align=\" center\" width=\"50%\" style=\"background-color: #1E3064\">";
	    $content.= "<img src= esheba.png title=\"Image of eSheba\" alt=\"Image of eSheba\" height= \"100px\" width=\"190px\">";
	    $content .= "</td>";
	    $content .= "<td align=\"center\" width=\"50%\">";
	    $content.="<img src=banner.jpg title=\"Image of Banner\" alt=\"Image of Banner\" height=\"150px\" width=\"800px\">";
	$content .= "</td>";
	$content .= "</tr>";

	$content .="<tr class='r4'>";
	$content .= "<td colspan=\"2\" class=menu height='50px' align='left'>";
	    $content.= "<a class= menu_link href=\"index.php\">Home</a>&nbsp &nbsp &nbsp &nbsp";
	    $content.= "<a class= menu_link href=\"services.php\" target=\"_self\">Services</a>&nbsp &nbsp &nbsp &nbsp";
	    $content.= "<a class= menu_link href=\"contactus.php\" target=\"_self\">Contact Us</a>&nbsp &nbsp &nbsp &nbsp";
	$content .= "</td>";       
	$content .="</tr>";

	     $content .= "</table>";
	$content .= "</body>";
	$content .= "</html>";

	return $content;

}
	
	
?>		