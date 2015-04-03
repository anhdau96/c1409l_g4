<?php
require_once 'inc_header.php';
?>

<?php
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
    $i = count($_SESSION["cart"]);
    $query = "SELECT * FROM product WHERE foodid IN (";
    $comma = "";


    foreach ($_SESSION["cart"] as $key => $value) {
        $query .= $comma . $key;
        $comma = ",";
    }
    $query .= ")";
    $rs = execute_query($query);
}

if (!(isset($_SESSION["fullname"]))) redirect ("login.php");
else
    {
    if (isset($_SESSION["cart"])) {
        ?>
        <h1>Food in your card: 
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
                        <td><?php echo $row["FoodId"] ?></td>
                        <td><?php echo $row["FoodName"] ?></td>
                        <td><?php echo $row["FoodPrice"] ?></td>        
                        <td><?php echo $_SESSION["cart"][$row["foodid"]] ?></td>
                        <td><?php echo $_SESSION["cart"][$row["foodid"]] * $row["FoodPrice"] ?></td>
                        <td><a href="process/cart.php?do=delete&foodid=<?php echo $row["foodid"] ?>">X</a></td>
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
?>  
<?php
require_once 'inc_footer.php';
?>