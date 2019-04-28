<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$re_username = $_REQUEST ["re_username"];
$re_password = $_REQUEST ["re_password"];
$re_name = $_REQUEST ["re_name"];
$re_tel = $_REQUEST ["re_tel"];
$re_address = $_REQUEST ["re_address"];

$sql = "INSERT INTO register(re_username,
		re_password,
		re_name,
		re_tel,
		re_address)
		VALUES ('$re_username',
		'$re_password',
		'$re_name',
		'$re_tel',
		'$re_address')";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = 'login1.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>