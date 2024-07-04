<?php

include 'database.php';

$item_id = $_GET['item_id'];

$email = $_GET['email'];

$delete = "DELETE FROM items where item_id ='$item_id'";

mysqli_query($conn,$delete);

header('Location:view_prod.php?email='.$email);

?>




