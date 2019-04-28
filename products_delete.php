 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="welcome_admin.php">ระบบขายพิซซ่า</a>
          </li>
          <li class="breadcrumb-item">จัดการสินค้า</li>
          <li class="breadcrumb-item active"><i class="fas fa-pen-square"></i> แก้ไขสินค้า</li>
        </ol>
        <!-- Page Content -->
 
<?php include('h.php');

 
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM order_admin

                 ORDER BY order_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr bgcolor='#CFCFCF'>
                      <td>id</td>
                      <td>name</td>
                      <td>size</td>
                      <td>price</td>                    
                      <td>detail     </td>
                      <td>img</td>					  
      				 <td>delete</td>
				  

                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["order_id"] .  "</td> ";
                    echo "<td>" .$row["order_name"] .  "</td> ";
                    echo "<td>" .$row["order_size"] .  "</td> ";
                    echo "<td>" .$row["order_price"] .  "</td> ";
					echo "<td>" .$row["order_detail"] .  "</td> ";
                  
					echo '<td><img src="/Project/order_img/'.$row["order_img"].'" width="50" heigth="50"/></td>';
					
					echo "<td><a href='products_del_db.php?ID=$row[0]' class='btn btn-warning'><i class='fas fa-pen-square'></i> ลบสินค้า </a></td>";				
					echo"</tr>";   
					echo "<td><a href='products_edit.php?ID=$row[0]' class='btn btn-warning'><i class='fas fa-pen-square'></i> แก้ไขสินค้า</a></td>";				
					echo"</tr>";                }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
