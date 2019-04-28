<html>
<head>
<title>DOGNAN</title>
</head>
<body>
<?php
	
	include('condb.php');
	$p_id = $_REQUEST["ID"];
	$strSQL = "SELECT * FROM order_admin WHERE  order_id='$p_id' ";
	$objQuery = mysqli_query($con,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);
?>
	<form name="form1" method="post" action="product_pic_edit_db.php" enctype="multipart/form-data">
	Edit Picture :<br>
    <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
	Name : <input type="text" name="txtName" value="<?php echo $objResult["order_name"];?>"><br>
	<img src="/Project/order_img//<?php echo $objResult["order_img"];?>" width="200" height="200"><br>
	Picture : <input type="file" name="filUpload"><br>
	<input type="hidden" name="p_img" value="<?php echo $objResult["order_img"];?>">
	<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>