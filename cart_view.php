<?php
require_once 'inc_header.php';
?>

<?php
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
    $i = count($_SESSION["cart"]);
    $query = "SELECT * FROM Food WHERE FoodId IN (";
    $comma = "";


    foreach ($_SESSION["cart"] as $key => $value) {
        $query .= $comma . $key;
        $comma = ",";
    }
    $query .= ")";
    $rs = execute_query($query);
}

?>

    <?php
    if (isset($_SESSION["cart"])) {
        ?>
    <div class="container">
            <div class="jumbotron">
        <h2>Số lương món ăn trong giỏ hàng: 
            <?php
            echo $i;
        ?>
        </h2>
        <form action="receiver.php" method="post">
        <div class="row" style="color: blueviolet">
            <div class="col-md-2">
                <p>Tên món ăn</p>
            </div>
            <div class="col-md-2"> 
                <p>Giá bán</p>
            </div>
            <div class="col-md-4"> 
                <p>Số lượng</p>
            </div>
            <div class="col-md-2"> 
                <p>Số Tiền</p>
            </div>
            <div class="col-md-2"> 
                <p>Bỏ món ăn</p>
            </div>
        </div>
        <hr />

            <?php
            $totalprice = 0;
            if (isset($_SESSION["cart"])) {
                while ($row = mysqli_fetch_assoc($rs)) {
                    ?>
                    <div class="row" style="color: palevioletred">
                        <div class="col-md-2">
                            <p><?php echo $row["FoodName"] ?></p>
                        </div>
                        <div class="col-md-2"> 
                            <p><?php echo $row["FoodPrice"]?> VNĐ</p>
                        </div>
                        <div class="col-md-3"> 
                            <p><?php echo $_SESSION["cart"][$row["FoodId"]] ?></p>
                        </div>
                        <div class="col-md-2"> 
                            <p><?php echo $_SESSION["cart"][$row["FoodId"]] * $row["FoodPrice"] ?></p>
                        </div>   
                        <div class="col-md-2"> 
                            <p><a href="user/cart.php?do=delete&foodid=<?php echo $row["FoodId"] ?>">X</a></p>
                        </div>
                    </div>
                    <hr />
                    <?php
                    $totalprice += ($_SESSION["cart"][$row["FoodId"]] * $row["FoodPrice"]);
                }
            }
            ?>
                <div class="row" style="color: palevioletred">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-2"> 

                        </div>
                        <div class="col-md-3"> 
                        </div>
                        <div class="col-md-2">
                            <p>Thành tiền</p>
                        </div>   
                        <div class="col-md-2"> 
                            <p><?php echo $totalprice ?></p>
                        </div>
                </div>
                <hr />
                
                <h3 style="text-align: center"><input type="submit" value="Đặt hàng" /></h3>

    </form>
    </div>
    </div>
    <?php
    }
    else {
    ?>
        <div class="container">
            <div class="jumbotron">
                <h2>Không có món ăn nào trong giỏ hàng.... <a href="menu.php">CHỌN MÓN NGAY NÀO !</a></h2>
            </div>
        </div>

<?php
    }
require_once 'inc_footer.php';
?>