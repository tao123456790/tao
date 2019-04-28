<meta charset="UTF-8" />
<?php 
require_once('condb.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	$order_name = $_POST['order_name'];
	$order_size = $_POST['order_size'];
	$order_price = $_POST['order_price'];
	$order_detail = $_POST['order_detail'];
	$order_img = (isset($_POST['order_img']) ? $_POST['order_img'] : '');
		
	$upload=$_FILES['order_img'];
	if($upload <> '') { 

	//โฟลเดอร์ที่เก็บไฟล์
	$path="order_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['order_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;

	$path_copy=$path.$newname;
	$path_link="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['order_img']['tmp_name'],$path_copy);  
		
	  
	}


			 $sql = "INSERT INTO order_admin 
					(order_name, 
					order_size,
					order_price, 
					order_detail, 
					order_img) 
					VALUES
					('$order_name',
					'$order_size',
					'$order_price',
					'$order_detail',
					'$order_img')";
		    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);




	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มสินค้าเรียบร้อย');";
			echo "window.location='admin_home.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
				echo "window.location='admin_home.php';";
			echo "</script>";
	  }
	
	
 ?>