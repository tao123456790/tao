

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">ระบบขายพิซซ่า</a>
          </li>
          <li class="breadcrumb-item">จัดการสินค้า</li>
          <li class="breadcrumb-item active"><i class="fas fa-pen-square"></i> แก้ไขสินค้า</li>
        </ol>
<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$order_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM order_admin WHERE order_id='$order_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('h.php');?>
<form  name="register" action="products_edit_db.php" method="POST" class="form-horizontal">
<input type="hidden" name="p_id" value="<?php echo $order_id; ?>">
       <div class="form-group">
          <div class="col-sm-6" align="left">
            <input  name="p_name" type="text" required class="form-control" id="p_name" value="<?php echo $order_name; ?>" placeholder="name product" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-6" align="left">
        <input  name="p_size" type="text" class="form-control" id="p_size" value="<?php echo $order_size; ?>"  placeholder="ราคา" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6" align="left">
            <textarea name="p_detail" class="form-control"  id="p_detail" required><?php echo $order_detail; ?></textarea> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6" align="left">
        <input  name="p_price" type="text" class="form-control" id="p_price" value="<?php echo $order_price; ?>"  placeholder="ราคา" />
          </div>
        </div>   
      <div class="form-group">
          <div class="col-sm-6" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> บันทึก </button>
          </div>     
      </div>
      </form>
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