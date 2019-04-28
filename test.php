<form action="?action=update" method="post">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" align="center">ลำดับ</th>
                        <th scope="col" align="center">สินค้า</th>
                        <th scope="col" align="center">ราคา</th>
                        <th scope="col" align="center">จำนวน</th>
                        <th scope="col" align="center">รวม (บาท)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    $total = 0;
                    if(!empty($_SESSION['shopping_cart'])) {
                        foreach($_SESSION['shopping_cart'] as $order_id=>$qty){
                            $sql = "SELECT * FROM order_admin WHERE order_id = $order_id";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($query);
                            $sum = $row['products_price'] * $qty;
                            $total += $sum;
                            @$i = $i + 1;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>". $row["order_name"] ."</td>";
                            echo "<td>".number_format($row["products_price"],2)."</td>";
                            echo "<td><input type='number' class='form-control' name='amount[$order_id]' value='$qty' size='2'/></td>";
                            echo "<td style='color:#d9272e'>".number_format($sum,2)."</td>";
                            echo "<td><a href='products_cart.php?id=$order_id&action=remove' class='btn btn-danger btn-block'><i class='fas fa-trash-alt'></i> ลบ</button></td>";
                            echo "</tr>";
                        }
                        echo "<tr>";
                        echo "<td colspan='4' style='color:#FFFFFF' bgcolor='#343a40' align='center'><b>ราคารวม</b></td>";
                        echo "<td align='right' style='color:#FFFFFF'bgcolor='#343a40'>"."<b>".number_format($total,2)."</b>"."</td>";
                        echo "<td align='left' style='color:#FFFFFF' bgcolor='#343a40'></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="./" class="btn btn-dark"><i class="fas fa-caret-left"></i>  กลับไปเลือกสินค้าต่อ</a>
            <div class="float-right">
                        <button type="submit" class="btn btn-warning" name="button"><i class="fas fa-calculator"></i> คำนวนใหม่</button>
                        <button type="button" class="btn btn-success" onclick="window.location='confirm.php';"><i class="fas fa-money-check-alt"></i> สั่งชื้อสินค้า</button>              
            </div>
        </form>