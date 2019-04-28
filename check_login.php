<?php
	session_start();
	include("condb.php");
	$strSQL = "SELECT * FROM members 
    WHERE member_user = '".mysqli_real_escape_string($con,$_POST['txtUsername'])."' 
	and member_pass = '".mysqli_real_escape_string($con,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["member_id"] = $objResult["member_id"];
			$_SESSION["member_role"] = $objResult["member_role"];

			session_write_close();
			
			if($objResult["member_role"] == "Admin")
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