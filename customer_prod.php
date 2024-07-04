<?php

include 'database.php';
session_start();

require ('checksession.php');
$email = $_GET['email'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
body {
    margin:0;
    font-family:Arial;
}

.product{
height: 100px;
width:100px;

}


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

--
.sale {
            flex-direction: row-reverse;
        }

        .card {
            width: fit-content;
        }

        .card-body {
            width: fit-content;
        }

        .btn {
            border-radius: 0;
            width: fit-content;
            background-color: #108dc7;
            box-shadow: 0px 10px 10px #E0E0E0;
            z-index: 1;
            color: white;
            width: 100px;
            font-size: 11.5px;
            font-weight: 900;
        }

        .img-thumbnail {
            border: none;
        }

        .card {
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            border-radius: 5px;
            padding-bottom: 10px;
        }

        .card-title {
            font-size: 14px;
            font-weight: 900;
        }

        .card-text {
            font-size: 14px;
            font-family: sans-serif;
            font-weight: 500;
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
<br>
<!-- 
<table class="table table- table-hover" style="margin-top:5%;background-color: #f9f9f9;">
<thead>
    <tr>
      <th scope="col">PRODUCT ID</th>
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRODUCT IMAGE</th>
      <th scope="col">PRODUCT PRICE</th>
      <th scope="col">ADD TO CART</th>
    </tr>
  </thead>
  <tbody> -->


<div class="container"><center><h1 style="   font-family: 'Kaushan Script', cursive;font-weight:600;color:#e53935">Our Pizza's</h1></center>
<div class="row">

<?php

include 'database.php';

$sql = "SELECT * from items";

$result = mysqli_query($conn,$sql);

while($data = mysqli_fetch_array($result)){

?>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class='container-fluid' >
<div class="card mx-auto col-md-3 col-10 mt-5 pt-4">
<div class="d-flex sale ">
<a  href="place_cart.php?email=<?php echo $_GET['email']; ?>&item_id=<?php echo $data['item_id'] ?>"> <div class="btn" style="font-family: 'Comfortaa', cursive;">Add to Cart</div></a>
</div>
<img class='mx-auto img-thumbnail' src="<?php echo $data['item_image']; ?>" width="auto" height="auto"/>
<div class="card-body text-center mx-auto">
<h5 class="card-title" style="font-family: 'Kaushan Script', cursive;font-size:25px;"><?php echo $data['item_name']; ?></h5>
<p class="card-text" style="font-family: 'Kaushan Script', cursive;">Price:<?php echo $data['item_price']; ?></p>
</div>
</div>

</div>
<!-- <div class="card" style="width: 18rem;font-family: 'Poppins', sans-serif;">
  <img src="<?php echo $data['product_image']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <center><h5 class="card-title" ><?php echo $data['product_name']; ?></h5>
    <p class="card-text"><?php echo $data['product_price']; ?></p>
   <a class="btn btn-" style="border-radius: 0%;background-color:darkslategray;color:white;letter-spacing: 2px;" href="place_cart.php?email=<?php echo $_GET['email']; ?>&product_id=<?php echo $data['product_id'] ?>">Add to Cart</a></center>
  </div>
</div> -->
</div>




    <!-- <tr>
      <td><?php echo $data['product_id']; ?></td>
      <td><?php echo $data['product_name']; ?></td>
      <td><img class="product" src="<?php echo $data['product_image']; ?>" ></td>
      <td><?php echo $data['product_price']; ?></td>
      <td><a href="place_cart.php?email=<?php echo $_GET['email']; ?>&product_id=<?php echo $data['product_id'] ?>"><i class="fa fa-shopping-cart" style="font-size:50px; color:black;"></i></a></td>
    </tr>
  </tbody> -->


<?php

}

?>
</div>
</div>

</table>

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