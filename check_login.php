<?php
	session_start();
	include('condb.php');

	$ccon = "SELECT * FROM register WHERE re_username = '".mysqli_real_escape_string($con,$_POST['txtUsername'])."' 
	and re_password = '".mysqli_real_escape_string($con,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($con,$ccon);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["re_id"] = $objResult["re_id"];
			$_SESSION["position"] = $objResult["re_position"];

			session_write_close();
			
			if($objResult["re_position"] == "Admin")
			{
				header("location:welcome_admin.php");
			}
			else
			{
				header("location:order.php");
			}   
	}
	mysqli_close($con);
?>