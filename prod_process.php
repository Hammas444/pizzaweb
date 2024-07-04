<?php

include 'database.php';

$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$item_image = $_FILES['item_image'];




$filename = $item_image['name'];
$filepath = $item_image['tmp_name'];
$fileerror = $item_image['error'];


if($fileerror == 0){

    $destfile = 'uploads/'.$filename;

move_uploaded_file( $destfile,$filepath);




if(isset($_POST['save'])){


$sql = "INSERT into items(item_name,item_price,item_image) VALUES('$item_name','$item_price','$destfile')";


if(mysqli_query($conn,$sql)){

$email = $_GET['email'];
header('Location:view_prod.php?email='.$email);


}

else{



echo "Error in insertion";




}


}




}






?>