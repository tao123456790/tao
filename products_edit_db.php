<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $p_id = $_REQUEST["p_id"];
  $p_name = $_REQUEST["p_name"];
  $p_detail = $_REQUEST["p_detail"];
  $p_price = $_REQUEST["p_price"];
  $p_size = $_REQUEST["p_size"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE order_admin SET  
      order_name='$p_name', 
      order_size='$p_size', 
      order_price='$p_price',
      order_detail='$p_detail'
       WHERE order_id='$p_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update Succesfuly');";
  echo "window.location = 'products_edit.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>