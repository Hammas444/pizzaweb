<?php

include 'database.php';
session_start();

require ('checksession.php');
$email = $_GET['email'];

$select = "SELECT * from customers where customer_email ='$email' ";

$result = mysqli_query($conn,$select);
$data = mysqli_fetch_array($result);




?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color:none;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}

.active {
  background-color: none;
  color: black;
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
  position: absolute;
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
  background-color: none;
  color: lightcoral;
  transition: 0.3s;
 
}

.dropdown-content a:hover {
  background-color:darkorange ;
  color: black;
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


.nav-link{
    color: rgb(73, 36, 9);
    font-family: 'Comfortaa', cursive;
    
}
.nav-link:hover{
  color: #ff5e62;

}
.navbar{
  
}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar- ">
        <div class="container-fluid" >
          <a class="navbar-brand " href="#" ><span style="color:#2BC0E4;font-family: 'Kaushan Script', cursive;font-weight: 700;margin-left:10px ;font-size: 20px;">Pizzeria</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa-solid fa-bars" ></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" >
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="customer_home.php?email=<?php echo $_GET['email']; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer_prod.php?email=<?php echo $_GET['email']; ?>">Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer_cart.php?email=<?php echo $_GET['email']; ?>">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer_orders.php?email=<?php echo $_GET['email']; ?>">My Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" >Logout</a>
              </li>
            
            </ul>
            <form class="d-flex">
             <img src="uploads/social media icons-02.png" style="height: 30px;">&nbsp; <img src="uploads/social media icons-03.png" style="height: 30px;"> &nbsp;<img src="uploads/social media icons-04.png" style="height: 30px;">
            </form>
          </div>
        </div>
      </nav>
      <br>
<!-- <div class="topnav" id="myTopnav" style="font-family: 'Poppins', sans-serif;">
  <a href="customer_home.php?email=<?php echo $_GET['email']; ?>" class="active">Home</a>
  <a href="customer_prod.php?email=<?php echo $_GET['email']; ?>">Products</a>
  <a href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile</a>
  <a href="customer_cart.php?email=<?php echo $_GET['email']; ?>">Cart</a>
  <a href="customer_orders.php?email=<?php echo $_GET['email']; ?>">My Orders</a>
  <a href="logout.php" >Logout</a>
  <a href="customer_cart.php?email=<?php echo $_GET['email']; ?>" style="margin-left: 250px;"><i class="fa-solid fa-cart-shopping" style="font-size: 26px;"></i></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div> -->

<center><h1 style="font-family: 'Comfortaa', cursive;">My Profile</h1>
<form action="" style="font-family: 'Comfortaa', cursive;" method="post" style="font-family: 'Poppins', sans-serif;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" style="width:50% ;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $data['customer_email']; ?>" disabled>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" style="width:50% ;" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $data['customer_password']; ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" style="width:50% ;" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $data['customer_name']; ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" style="width:50% ;" class="form-control" id="exampleInputPassword1" name="Address" value="<?php echo $data['customer_address']; ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="number" style="width:50% ;" class="form-control" id="exampleInputPassword1" name="Phone" value="<?php echo $data['customer_phone']; ?>" disabled>
  </div>
  <button type="submit" class="btn btn-" style="background-color: lightseagreen ;border-radius: 0%;font-family: 'Comfortaa', cursive;letter-spacing: 2px;"  name="save"><a style="color:white;text-decoration:none;" href="update_profile.php?email=<?php echo $_GET['email']; ?>">Edit</a></button>
  <button type="submit" class="btn btn" style="background-color: cornflowerblue ;border-radius: 0%;font-family: 'Comfortaa', cursive;letter-spacing: 2px;"  name="save"><a style="color:white;text-decoration:none;" href="delete_profile.php?email=<?php echo $_GET['email']; ?>">Deactivate</a></button>
</form>
</center>
<br><br><br>
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

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>