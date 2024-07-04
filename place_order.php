<?php

include 'database.php';

$cart_id = $_GET['cart_id'];
$email = $_GET['email'];

$select = "SELECT * from cart where cart_id='$cart_id'";

$result = mysqli_query($conn,$select);
$data = mysqli_fetch_array($result);

$customer_name = $data['customer_name'];
$customer_email = $data['customer_email'];
$customer_address = $data['customer_address'];
$customer_phone = $data['customer_phone'];
$item_name = $data['item_name'];
$item_id = $data['item_id'];
$item_price = $data['item_price'];
$item_image = $data['item_image'];
$payment_method = $data['payment_method'];
$datee = $data['datee'];
$quantity = $data['quantity'];
$order_size = $data['order_size'];

$insert = "INSERT into orders(customer_name,customer_email,customer_address,customer_phone,item_name,item_id,item_price,item_image,payment_method,datee,quantity,order_size) VALUES('$customer_name','$customer_email','$customer_address','$customer_phone','$item_name','$item_id','$item_price','$item_image','$payment_method','$datee','$quantity','$order_size')";

mysqli_query($conn,$insert);

$delete = "DELETE from cart where cart_id='$cart_id'";

mysqli_query($conn,$delete);

header('location:customer_orders.php?email='.$email);

?>