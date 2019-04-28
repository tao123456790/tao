<?php
    error_reporting( error_reporting() & ~E_NOTICE );
    session_start(); 
    $order_id = $_REQUEST['p_id']; 
 $act = $_REQUEST['act'];

 if($act=='add' && !empty($order_id))
 {
  if(!isset($_SESSION['shopping_cart']))
  {
    
   $_SESSION['shopping_cart']=array();
  }else{
   
  }
  if(isset($_SESSION['shopping_cart'][$order_id]))
  {
   $_SESSION['shopping_cart'][$order_id]++;
  }
  else
  {
   $_SESSION['shopping_cart'][$order_id]=1;
  }
 }

 if($act=='remove' && !empty($order_id))  //ยกเลิกการสั่งซื้อ
 {
  unset($_SESSION['shopping_cart'][$order_id]);
 }

 if($act=='update')
 {
  $amount_array = $_POST['amount'];
  foreach($amount_array as $order_price=>$amount)
  {
   $_SESSION['shopping_cart'][$order_id]=$amount;
  }
 }
 //ยกเลิกตะกร้า
 if($act=='Cancel-Cart')
 {
  unset($_SESSION['shopping_cart']); 
 }
 ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart devbanban</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<?php include('condb.php');?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
      <form id="frmcart" name="frmcart" method="post" action="?act=update">
        <table width="100%" border="0" align="center" class="table table-hover">
        <tr>
          <td height="40" colspan="7" align="center" bgcolor="#CCCCCC"><strong><b>ตะกร้าสินค้า</span></strong></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#EAEAEA"><strong>รหัสสินค้า</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>image</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ชื่อสินค้า</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ขนาด</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>จำนวน</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>รวม/รายการ</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ลบ</strong></td>
        </tr>
        <?php

if(!empty($_SESSION['shopping_cart']))
{
require_once('condb.php');
 foreach($_SESSION['shopping_cart'] as $order_id=>$p_qty)
 {
  $sql = "select * from order_admin where order_id='$order_id'";
  $query = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($query))
  {
   
  $sum = $row['order_price'] * $p_qty;
  $total += $sum;
  echo "<tr>";
  echo "<td>";
        echo $i += 1;
        echo ".";
  echo "</td>";
  echo "<td width='100'>"."<img src='order_img/$row[order_img]'  width='50'/>"."</td>";
  echo "<td width='334'>"." " . $row["order_name"] . "</td>";
  echo "<td width='100' align='right'>" . number_format($row["order_price"],2) . "</td>";
  
  echo "<td width='57' align='right'>";  
  echo "<input type='text' name='amount[$order_id]' value='$p_qty' size='2'/></td>";
  
  echo "<td width='100' align='right'>" .number_format($sum,2)."</td>";
  echo "<td width='100' align='center'><a href='cart.php?p_id=$order_id&act=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";
  
  echo "</tr>";
  }
 
 }
 echo "<tr>";
   echo "<td colspan='5' bgcolor='#CEE7FF' align='right'>Total</td>";
   echo "<td align='right' bgcolor='#CEE7FF'>";
   echo "<b>";
   echo  number_format($total,2);
   echo "</b>";
   echo "</td>";
   echo "<td align='left' bgcolor='#CEE7FF'></td>";
 echo "</tr>";
}
?>
        <tr>
          <td></td>
          <td colspan="5" align="right">
          <a href=" cart.php?act=Cancel-Cart" class="btn btn-danger"> เคลียร์รายการสินค้า</a>
          <button type="submit" name="button" id="button" class="btn btn-warning"> คำนวณราคาใหม่ </button>
            <button type="button" name="Submit2"  onclick="window.location='confirm1.php';" class="btn btn-primary"> 
            <span class="glyphicon glyphicon-shopping-cart"> </span> สั่งซื้อ </button>
            </td>
        </tr>
      </form>
      <p align="center"> <a href="order.php" class="btn btn-primary">กลับไปเลือกสินค้า</a> </p>
    </div>
  </div>
</div>
</body>
</html>