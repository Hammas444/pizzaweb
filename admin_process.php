<?php

include 'database.php';

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];


if(isset($_POST['save'])){


$sql = "INSERT into admins(admin_name,admin_email,admin_password) VALUES('$admin_name','$admin_email','$admin_password')";


if(mysqli_query($conn,$sql)){

$email = $_GET['email'];
header('Location:admin_details.php?email='.$email);

}

else{

echo "Error in insertion";


}


}


?>