<?php
require_once 'inc_header.php';
if (isset($_SESSION["fullname"])) {
    $timezone = +7;
    ?>
    <form action="admin/process/order.php?do=add_new" method="post">
        <table>
            <tr>
                <th>
                    Phương thức thanh toán
                </th>
                <td>
                    <input type="text" name="typeid" />
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
                <th colspan="2">
                    <input type="submit" value="Gửi đặt hàng" />
                </th>
            </tr>
        </table>
    </form>

    <?php
} else {
    redirect("login.php?cart=yes");
}

require_once 'inc_footer.php';
?>