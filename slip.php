<?php
session_start();
include("condb.php");
require_once __DIR__ . '/vendor/autoload.php';
    $id = $_SESSION["member_id"];
    $sql = "SELECT * FROM orders
            INNER JOIN order_detail ON orders.order_id = order_detail.detail_order
            INNER JOIN members ON orders.order_memberid = members.member_id
            INNER JOIN products ON order_detail.detail_product = products.products_id
            WHERE members.member_id = '".$id."'";
    $result = $con->query($sql);
    $results = $con->query($sql);
    $rows = $results->fetch_assoc();

ob_start();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
</head>
<body>
<h3 style="text-align:center">ใบเสร็จ</h3>
ชื่อ : <?php echo $rows["member_name"]?> <?php echo $rows["member_surname"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $rows["order_date"] ?>
<hr>
<table class="table table-bordered" width="100%" bordercolor="#424242" border="1" align="center" cellpadding="5" cellspacing="0">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">จำนวน</th>
      <th scope="col">ราคา</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()){ ?>
    <tr>
      <th scope="row"><?php @$i = $i + 1; echo $i;?></th>
      <td><?php echo $row["products_name"]; ?></td>
      <td><?php echo $row["detail_qty"]; ?></td>
      <td><?php echo $total = $row["products_price"] * $row["detail_qty"]; ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="3"> <center><b>ราคารวม</b></center> </td>
        <td><?php echo $rows["order_total"]; ?></td>
    </tr>
  </tbody>
</table>
<hr>
</body>
</html>

<?Php
$html = ob_get_contents();
ob_end_clean();
$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 10,
    'default_font' => 'Garuda',
    'format' => [100, 150]
]);   
$mpdf->WriteHTML($html, 2);
$mpdf->Output();
?>     