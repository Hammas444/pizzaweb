<?php

include 'database.php';



$email = $_GET['email'];

$delete = "DELETE FROM orders where customer_email ='$email'";

mysqli_query($conn,$delete);

header('Location:logout.php?email='.$email);

?>




