
<form name="form1" method="post" action="admin_insert.php">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#666666"><div align="center">เพิ่มข้อมูลสินค้า</div></td>
    </tr>
    <tr>
      <td width="155" bgcolor="#CCCCCC">ชื่อสินค้า</td>
      <td width="545" bgcolor="#CCCCCC"><label for="order_name"></label>
      <input type="text" name="order_name" id="order_name" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">ขนาด</td>
      <td bgcolor="#CCCCCC"><label for="order_size"></label>
      <input type="text" name="order_size" id="order_size" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">ราคา</td>
      <td bgcolor="#CCCCCC"><label for="order_price"></label>
      <input type="text" name="order_price" id="order_price" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">รายละเอียด</td>
      <td bgcolor="#CCCCCC"><label for="order_detail"></label>
      <textarea name="order_detail" id="order_detail" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">รูปภาพ</td>
      <td bgcolor="#CCCCCC"><label for="order_img"></label>
      <input type="file" name="order_img" id="order_img" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC"><input type="submit" name="Save" id="Save" value="Save" />
       <input type="button" name="update" value="update" onClick="window.location.href='products_edit.php'">
      <input type="button" name="Delte" value="Delete" onClick="window.location.href='products_delete.php'">
    </tr>
  </table>
</form>
</body>
</html>