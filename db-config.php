<?php 
	$db=new PDO("mysql:host=localhost;dbname=auth_manager", "root","");
	$db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>