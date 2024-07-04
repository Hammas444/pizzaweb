<?php

session_start(); 

include 'database.php';

if(isset($_POST['email']) && isset($_POST['password'])){

$email = $_POST['email'];
$password = $_POST['password'];

        $sql = "SELECT * FROM customers where customer_email='$email' and customer_password='$password'";

        $query = mysqli_query($conn,$sql);


        $sql2 = "SELECT * FROM admins where admin_email='$email' and admin_password='$password'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query) == 1){

            $row = mysqli_fetch_assoc($query);

            if ($row['customer_email'] === $email && $row['customer_password'] === $password) {

                echo "Logged in!";

                $_SESSION['loginID'] = $row['customer_email'];

                $_SESSION['password'] = $row['customer_password'];

               
                header('Location:customer_home.php?email='.$email);
            
            }else{

                "<script>alert('Invalid Email or Password. Please Try Again..!!')</script>";
              

            }


        }

        else if(mysqli_num_rows($query2) == 1){

            $row = mysqli_fetch_assoc($query2);

            if ($row['admin_email'] === $email && $row['admin_password'] === $password) {

                echo "Logged in!";

                $_SESSION['loginID'] = $row['admin_email'];

                $_SESSION['password'] = $row['admin_password'];

               

                header('Location:admin_home.php?email='.$email);
            
            }else{

            
                "<script>alert('Invalid Email or Password. Please Try Again..!!')</script>";
              
            }


        }

        else{

             
            "<script>alert('Invalid Email or Password. Please Try Again..!!')</script>";
          
        }


}
else{

            
    "<script>alert('Invalid Email or Password. Please Try Again..!!')</script>";
  
}

?>