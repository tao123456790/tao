<!DOCTYPE html>
<?php include('bar.php');?>
<body>



<div class="container-fluid">
 <h2>รายการสินค้า</h2>
  <p></p>
  
  
  
  <form name = "add member" action="cart.php" method="POST" class="form-horizontal">
 <div class="container">
 <div class="float-right"><a href="order_list.php">รายการสั่งชื้อ</a></div>
        	<div class="container">
        	<div class="row justify-content-md-center">
            <div class="col-sm-20">
            <form>
                <div class="container">
  <h2>รายการสินค้า</h2>
  
  
  <p></p>
           
  <table width="90%" class="table table-bordered">
  
    <thead>
      <tr>
        
        <th>ลำดับ</th>
        <th>ชื่อสินค้า</th>
        <th>ขนาด</th>
        <th>ราคา</th>
        <th>รายละเอียด</th>
        <th>ภาพประกอบ</th>
        <th>สั่งซื้อ</th>
       
        
        </tr>   
    </thead>
    <tbody>
      <?php include('condb.php');
                        
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
                        while ($temp = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
     							<td><?php echo $temp['products_id'] ?></td>
                                <td><?php echo $temp['products_name'] ?></td>
                                <td><?php echo $temp['products_size'] ?></td>
                                <td><?php echo $temp['products_price'] ?></td>
                                <td><?php echo $temp['products_detail'] ?></td>
                                <td><img src="order_img/<?php echo $temp['products_img']; ?>" width="100"></td>
                                                         
                               <td><a href="cart.php?id=<?php echo $temp['products_id'] ?>&act=add" class="btn btn-success">สั่งซื้อ</a></td>         
                            <?php
						}
                        ?>
    				</tbody>
					</table>

</div>
</body>
</html>

