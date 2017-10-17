<?php

include "config.php";

if(isset($_POST["sub"]))
{
	$cdesi=$_POST["designation"];
	$cname=$_POST["name"];
	$cemail=$_POST["email"];
	$ccountry=$_POST["country"];
	$cpswd=$_POST["password"];
	$ccontact=$_POST["contact"];
	
	// Check existence of all fields
	if($cdesi && $cname && $cemail && $ccountry && $cpswd && $ccontact)
	{
		$query=mysql_query("INSERT INTO registration(desig, name, email, country, pswd, contact) VALUES('$cdesi', '$cname', '$cemail', '$ccountry', '$cpswd', '$ccontact')");

		// Check wheather $query is working ?
		if($query)
		{
			header('location:../../registration_success.html');
		}
		else
		{
			echo "Not Registered";
		}
	}
	else
	{
		echo "Please fill <b>all</b> fields";
	}
}

?>