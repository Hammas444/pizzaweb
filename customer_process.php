<?php

include 'database.php';

$customer_name = $_POST['name'];
$customer_email = $_POST['email'];
$customer_password = $_POST['password'];
$customer_address = $_POST['Address'];
$customer_phone = $_POST['Phone'];


if(isset($_POST['save'])){


$sql = "INSERT into customers(customer_name,customer_email,customer_password,customer_address,customer_phone) VALUES('$customer_name','$customer_email','$customer_password','$customer_address','$customer_phone')";


if(mysqli_query($conn,$sql)){


header('Location:index.php');


}

else{



echo "Error in insertion";




}







}






?>