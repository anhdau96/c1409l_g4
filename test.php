<?php 
$timezone = +7;
echo '<input type="text" value="'.gmdate("Y/m/d ", time() + 3600*($timezone+date("I"))).'">';
?>