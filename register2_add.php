<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$member_user= $_POST["member_user"];
$member_pass= $_POST["member_pass"];
$member_name= $_POST["member_name"];
$member_surname= $_POST["member_surname"];
$member_address= $_POST["member_address"];
$member_email= $_POST["member_email"];
$member_phone= $_POST["member_phone"];
$member_gender= $_POST["member_gender"];

$sql = "INSERT INTO members(member_user,
		member_pass,
		member_name,
		member_surname,
		member_address,
		member_email,
		member_phone,
		member_gender)
		VALUES ('$member_user',
		'$member_pass',
		'$member_name',
		'$member_surname',
		'$$member_address',
		'$member_email',
		'$member_phone',
		'$member_gender')";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  echo $sql;
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location ='login1.php';";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>