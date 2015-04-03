<?php
require_once './header.php';
?>
<?php
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
    $i = count($_SESSION["cart"]);
    $query = "SELECT * FROM product WHERE productid IN (";
    $comma = "";


    foreach ($_SESSION["cart"] as $key => $value) {
        $query .= $comma . $key;
        $comma = ",";
    }
    $query .= ")";
    $rs = execute_query($query);
}

//
$username = post("cus_username");
$password = post("cus_password");

if (isset($username) && $username != "") {
    $cus_query = "SELECT * FROM customer WHERE `cus_username` = '$username' and `cus_password` = '$password'";
    $cus_result = execute_query($cus_query);
    $cus_row = mysqli_fetch_assoc($cus_result);
    $cus_check = mysqli_num_rows($cus_result);
}
?>


<div class="wrapper">
    <?php
    if (isset($_SESSION["cart"])) {
        ?>
        <h1>Product in your cart: 
            <?php
            echo $i;
        }
        ?>
    </h1>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Product ID</td>
                <td>Product Name</td>
                <td>Price</td>        
                <td>Quantity</td>
                <td>Total</td>
            </tr>

            <?php
            $totalprice = 0;
            if (isset($_SESSION["cart"])) {
                while ($row = mysqli_fetch_assoc($rs)) {
                    ?>
                    <tr>
                        <td><?php echo $row["productid"] ?></td>
                        <td><?php echo $row["pname"] ?></td>
                        <td><?php echo $row["price"] ?></td>        
                        <td><?php echo $_SESSION["cart"][$row["productid"]] ?></td>
                        <td><?php echo $_SESSION["cart"][$row["productid"]] * $row["price"] ?></td>
                        <td><a href="process/cart.php?do=delete&productid=<?php echo $row["productid"] ?>"><img src="admin/admin_imgs/Close_Box_Red.png"onclick="return confirm('Are you sure you want to delete?')"/></a></td>
                    </tr>
                    <?php
                    $totalprice += ($_SESSION["cart"][$row["productid"]] * $row["price"]);
                }
            }
            ?>
            <tr>
                <th colspan="4" style="text-align: right">Total Price: </th><td><?php echo $totalprice ?></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($cus_check) == "") {
        ?>
        <form action="cart_view.php" method="post">
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="cus_username" /></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="cus_password" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login" /></td>
                </tr>

<?php } else {
    ?>
                <form action="process/customer.php?do=<?php if ($cus_check == 0) {
        echo "register";
    } elseif ($cus_check == 1) {
        echo "order";
    } ?>" method="post">
                    <table>
                        <tr>
                            <th>Username</th>
                            <td><input type="text" name="cus_username" value="<?php
                                if (isset($username)) {
                                    echo $username;
                                };
                                ?>"  /></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="cus_password" value="<?php
                        if (isset($username)) {
                            echo $password;
                        };
                        ?>"  /></td>
                        </tr>
    <?php
}
?>

<?php
if (isset($cus_check)) {
    if ($cus_check == 1) {
        ?>
                            <tr>
                                <th>Full name: </th>
                                <td><input type="text" name="cus_fullname" value="<?php echo $cus_row['cus_fullname'] ?>"/></td>
                            </tr>

                            <tr>
                                <th>Address: </th>
                                <td><input type="text" name="cus_address" value="<?php echo $cus_row['cus_address'] ?>"/></td>
                            </tr>

                            <tr>
                                <th>Phone: </th>
                                <td><input type="text" name="cus_phone" value="<?php echo $cus_row['cus_phone'] ?>"/></td>
                            </tr>
                            <input type="hidden" name="total" value="<?php echo $totalprice; ?>"/>
                            <tr>
                                <td colspan="2"><input type="submit" value="Order" /></td>
                            </tr> 
                    </form>
        <?php
    } elseif ($cus_check == 0) {
        ?>
                    <form action="process/customer.php" method="post">
                        <tr>
                            <th colspan="2">
                                Invalid username/password combination, register as a new user?
                            </th>
                        </tr>
                        <tr>
                            <th>Full name: </th>
                            <td><input type="text" name="cus_fullname" value="<?php echo $cus_row['cus_fullname'] ?>"/></td>
                        </tr>

                        <tr>
                            <th>Address: </th>
                            <td><input type="text" name="cus_address" value="<?php echo $cus_row['cus_address'] ?>"/></td>
                        </tr>

                        <tr>
                            <th>Phone: </th>
                            <td><input type="text" name="cus_phone" value="<?php echo $cus_row['cus_phone'] ?>"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Register" /></td>
                        </tr> 
                    </form>
        <?php
    }
}
?>
        </table>
<!--        <a href="process/cart.php?do=remove2">Destroy</a>-->

</div>

<?php
require_once './footer.php';
?>