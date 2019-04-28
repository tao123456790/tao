<?php 
    session_start();
    include("condb.php");
    $id = $_SESSION["member_id"];
    $sql = "SELECT * FROM orders
            INNER JOIN order_detail ON orders.order_id = order_detail.detail_order
            INNER JOIN members ON orders.order_memberid = members.member_id
            INNER JOIN products ON order_detail.detail_product = products.products_id
            WHERE members.member_id = '".$id."'";
    $result = $con->query($sql);
    $results = $con->query($sql);
    $rows = $results->fetch_assoc()
    ?>
<html lang="th">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    
</head>
<body>
<br><br><br><br><br><br>
<div class="container">
    <div class="main">
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">จำนวน</th>
      <th scope="col">ราคา / รายการ</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()){ ?>
    <tr>
      <th scope="row"><?php @$i = $i + 1; echo $i;?></th>
      <td><?php echo $row["products_name"]; ?></td>
      <td><?php echo $row["detail_qty"]; ?></td>
      <td><?php echo $row["products_price"]; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    <a href="./" class="btn btn-dark"><i class="fas fa-caret-left"></i>  กลับไปหน้าแรก</a>
    <div class="float-right">
    <a href="slip.php" class="btn btn-dark"><i class="fas fa-print"></i>  ปลิ้นใบเสร็จ</a>
    </div>
    <hr>

    </div>
</div>