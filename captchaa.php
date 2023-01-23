<?php
	session_start();
	include("phptextClass.php");	
	
	/*create class object*/
	$phptextObjj = new phptextClasss();	
	/*phptext function to genrate image with text*/
	header('Content-type:image/jpg');
	$phptextObjj->phpcaptchaa('#162453','#fff',120,40,10,25);	
 ?>