<?php
require_once 'inc_header.php';
if (isset($_SESSION["fullname"])) {
    $timezone = +7;
    $query = "SELECT * FROM Food WHERE FoodId IN (";
    $comma = "";


    foreach ($_SESSION["cart"] as $key => $value) {
        $query .= $comma . $key;
        $comma = ",";
    }
    $query .= ")";
    $rs = execute_query($query);
    $totalprice = 0;
            if (isset($_SESSION["cart"])) {
                while ($row = mysqli_fetch_assoc($rs)) 
                        $totalprice += ($_SESSION["cart"][$row["FoodId"]] * $row["FoodPrice"]);
                }
    $result = execute_query("SELECT * FROM TypePay");
    ?>
    <form action="order.php?do=add_new" method="post">
        <table>
            <tr>
                <th>
                    Mã số khách hàng
                </th>
                <td>
                    <input type="text" name="memid" value="<?php echo($_SESSION["memid"])?>" readonly/>
                </td>
            </tr>
            <tr>
                <th>
                    Phương thức thanh toán
                </th>
                <td>
                    <select name="typeid">
                        <?php while (($row = mysqli_fetch_assoc($result))) {
                        ?>                    
                        <option value="<?php echo $row["TypePayId"] ?>"><?php echo $row["TypePayName"] ?></option>
                        <?php
                        }
                        ?>
                    </select>                   
                </td>
            </tr>
            <tr>
                <th>
                    Tên người nhận
                </th>
                <td>
                    <input type="text" name="name" />
                </td>
            </tr>
            <tr>
                <th>
                    Số điện thoại người nhận
                </th>
                <td>
                    <input type="text" name="phone" />
                </td>
            </tr>
            <tr>
                <th>
                    Địa chỉ giao hàng
                </th>   
                <td>
                    <input type="text" name="add" />
                </td> 
            </tr>
            <tr>
                <th>
                    Ngày đặt đơn hàng
                </td>
                <th>
                    <?php
                    echo '<input type="text" name="date" value="'.gmdate("Y/m/d ", time() + 3600*($timezone+date("I"))).'" readonly />';
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    Tổng hóa đơn
                </th>   
                <td>
                    <input type="text" name="price" value="<?php echo($totalprice)?>" readonly />
                </td> 
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="Gửi đặt hàng" />
                </th>
            </tr>
        </table>
    </form>

    <?php
} else {
    redirect("login.php");
}

require_once 'inc_footer.php';
?>