<?php
	/*$con = mysql_connect("localhost","root","");	
	$bd = mysql_select_db("alas8",$con);
	*/
	
	$con = mysql_connect("web518.webfaction.com:3306","alas8","dfmp1202242");
	//$bd = "sepalos";
	$bd = mysql_select_db("alas8",$con);	
	mysql_close();
	
	
  
?>