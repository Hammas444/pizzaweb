<?php

include 'database.php';

$admin_id = $_GET['admin_id'];


$update = "SELECT * from admins where admin_id='$admin_id'";


$result = mysqli_query($conn,$update);

$data = mysqli_fetch_array($result);


if(isset($_POST['save'])){

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];




if(isset($_POST['save'])){


$sql = "UPDATE admins SET admin_name='$admin_name',admin_email='$admin_email',admin_password='$admin_password' where admin_id='$admin_id'";


if(mysqli_query($conn,$sql)){

$email = $_GET['email'];
header('Location:admin_details.php?email='.$email);


}

else{



echo "Error in insertion";




}


}


}



?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: darkseagreen;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: darkorange;
  color: white;
}

.dropdown-content a:hover {
  background-color: darkorange;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar- bg-">
  <div class="container-fluid">
  <a class="navbar-brand " href="#" ><span style="color:#2BC0E4;font-family: 'Kaushan Script', cursive;font-weight: 700;margin-left:10px ;font-size: 20px;">Pizzeria</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" ></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_home.php?email=<?php echo $_GET['email']; ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Items
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="view_prod.php?email=<?php echo $_GET['email']; ?>">View Item</a></li>
            <li><a class="dropdown-item" href="insert_prod.php?email=<?php echo $_GET['email']; ?>">Insert Item</a></li>
           
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Admins
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="admin_details.php?email=<?php echo $_GET['email']; ?>">Admin Details</a></li>
            <li><a class="dropdown-item" href="create_admin.php?email=<?php echo $_GET['email']; ?>">Create Admin</a></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order_details.php?email=<?php echo $_GET['email']; ?>">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_details.php?email=<?php echo $_GET['email']; ?>">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <div class="topnav" id="myTopnav">
  <a href="admin_home.php?email=<?php echo $_GET['email']; ?>" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view_prod.php?email=<?php echo $_GET['email']; ?>">View Product</a>
      <a href="insert_prod.php?email=<?php echo $_GET['email']; ?>">Insert Product</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Admins 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="admin_details.php?email=<?php echo $_GET['email']; ?>">Admin Details</a>
      <a href="create_admin.php?email=<?php echo $_GET['email']; ?>">Create Admin</a>
    </div>
  </div> 
  <a href="order_details.php?email=<?php echo $_GET['email']; ?>">Orders</a>
  <a href="customer_details.php?email=<?php echo $_GET['email']; ?>">Customers</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div> -->






<form action="" method="post" enctype="multipart/form-data">
<h1>Update Admin</h1>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Admin Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="admin_name" value="<?php echo $data['admin_name']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Admin Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="admin_email" value="<?php echo $data['admin_email']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Admin Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="admin_password" value="<?php echo $data['admin_password']; ?>" required>
  </div>
  
  <button type="submit" class="btn btn-primary" name="save">Update</button>
</form>

<footer>
  <div class="container-fluid" style="background-color: #2c3e50 ;color:white;font-family: 'Comfortaa', cursive;">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3" style="color:white;font-family: 'Comfortaa', cursive;">
     <a class="navbar-brand " href="#" ><span style="color:#2BC0E4;font-family: 'Kaushan Script', cursive;font-weight: 700;margin-left:10px ;font-size: 30px;">Pizzeria</span></a>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color:white ;font-family: 'Baloo 2', cursive;" >Opening Hours</a></li>
            <li class="nav-item mb-2"><a href="#" style="color:white;font-family: 'Comfortaa', cursive;" class="nav-link p-0 ">8:00 am- 5:00 pm</a></li>
            <li class="nav-item mb-2"><a href="#" style="color:white;font-family: 'Comfortaa', cursive;" class="nav-link p-0 "><i class="fa-brands fa-facebook" ></i><span style="margin-left: 7px;"> Facebook</span></a></li>
            <li class="nav-item mb-2"><a href="#" style="color:white;font-family: 'Comfortaa', cursive;" class="nav-link p-0 "><i class="fa-brands fa-twitter" ></i><span style="margin-left: 10px;"> Twitter</span></a></li>
            <li class="nav-item mb-2"><a href="#" style="color:white;font-family: 'Comfortaa', cursive;" class="nav-link p-0 "><i class="fa-brands fa-instagram"></i> <span style="margin-left: 10px;">Instagram</span></a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3" style="color:white;font-family: 'Comfortaa', cursive;">
          <h5 style="color:#F37335">Section</h5>
          <ul class="nav flex-column" style="color:white;font-family: 'Comfortaa', cursive;">
            <li class="nav-item mb-2"><a class="nav-link p-0" aria-current="page" style="color:white;font-family: 'Comfortaa', cursive;" href="customer_home.php?email=<?php echo $_GET['email']; ?>">Home</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0" style="color:white;font-family: 'Comfortaa', cursive;" href="customer_prod.php?email=<?php echo $_GET['email']; ?>">Items</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3" style="color:white;font-family: 'Comfortaa', cursive;">
          <h5 style="color:#F37335">Section</h5>
          <ul class="nav flex-column" style="color:white;font-family: 'Comfortaa', cursive;">
            <li class="nav-item mb-2"><a class="nav-link p-0" style="color:white;font-family: 'Comfortaa', cursive;" href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0" style="color:white;font-family: 'Comfortaa', cursive;" href="customer_cart.php?email=<?php echo $_GET['email']; ?>">Cart</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0" style="color:white;font-family: 'Comfortaa', cursive;" href="customer_orders.php?email=<?php echo $_GET['email']; ?>">My Orders</a></li>

          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5 style="color:#F37335">Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="" style="background:#F37335;color:white;border:none;border-radius:3px" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>© 2022 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"> </li>
          <li class="ms-3"><a class="link-dark" style="color:white;font-family: 'Comfortaa', cursive;" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>


</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>

</body>
</html>
