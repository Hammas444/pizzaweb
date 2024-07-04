<?php

include 'database.php';

$customer_id = $_GET['customer_id'];

$email = $_GET['email'];

$delete = "DELETE FROM custumor where customer_id ='$customer_id'";

mysqli_query($conn,$delete);

header('Location:customer_details.php?email='.$email);

?>



