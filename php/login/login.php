<?php

include "../Registration/config.php";

if(isset($_POST["log"]))
{
	$user=$_POST["username"];
	$pswd=$_POST["password"];

	// check the existence of all fields
	if($user && $pswd)
	{
		$query=mysql_query("SELECT * FROM registration WHERE email='$user'");

		$norows=mysql_num_rows($query);

		if($norows!=0)
		{	
			// fetch selected records from registration table into a array.
			while($row=mysql_fetch_array($query))
			{
				$dbusername=$row["email"];
				$dbpassword=$row["pswd"];

				if($dbusername==$user && $dbpassword==$pswd)
				{
					session_start();
					header('location:../../index.html');
				}
				else
				{
					echo "Your username & password is <b>NOT</b> matching.";
				}
			}
		}
		else
		{
			echo "Incorrect Email ID. Enter the Email ID, which you used at <b>Registration</b>";
		}
	}
	else
	{
		echo "Please fill <b>all</b> fields";
	}
}

?>