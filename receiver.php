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
<div class="container">
    <div class="jumbotron">
        <form class="form-horizontal" action="order.php?do=add_new" method="post">
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone; font-size: 20px;color: purple">Mã số khách hàng:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="memid" value="<?php echo($_SESSION["memid"])?>" readonly/>
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Phương thức thanh toán:</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="typeid">
                                <?php while (($row = mysqli_fetch_assoc($result))) {
                                ?>                    
                                <option value="<?php echo $row["TypePayId"] ?>"><?php echo $row["TypePayName"] ?></option>
                                <?php
                                }
                                ?>
                            </select> 
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Tên người nhận:</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="name" />
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Số điện thoại người nhận:</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="phone" />
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Địa chỉ giao hàng:</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="add" />
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Ngày đặt đơn hàng:</label>
                        <div class="col-sm-5">
                            <?php
                            echo '<input class="form-control" type="text" name="date" value="'.gmdate("Y/m/d ", time() + 3600*($timezone+date("I"))).'" readonly />';
                            ?>
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Tổng hóa đơn:</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="price" value="<?php echo($totalprice)?>" readonly />
                        </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-3" style="font-family: Amazone ;font-size: 20px;color: purple">Gửi đơn hàng:</label>
                        <div class="col-sm-5">
                            <input class="btn-success" type="submit" value="Gửi đặt hàng" style="font-size: 20px"/>
                        </div>
                   </div>
        </form>
    </div>        
</div>
    
        
     
    <?php
} else {
    redirect("login.php");
}

require_once 'inc_footer.php';
?>