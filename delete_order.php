<?php

include 'database.php';

$order_id = $_GET['order_id'];

$email = $_GET['email'];

$delete = "DELETE FROM orders where order_id ='$order_id'";

mysqli_query($conn,$delete);

header('Location:order_details.php?email='.$email);

?>




