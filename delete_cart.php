<?php

include 'database.php';

$cart_id = $_GET['cart_id'];

$email = $_GET['email'];

$delete = "DELETE from cart where cart_id ='$cart_id'";

mysqli_query($conn,$delete);

header('Location:customer_cart.php?email='.$email);

?>



