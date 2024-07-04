<?php

include 'database.php';

$item_id = $_GET['item_id'];


$update = "SELECT * from items where item_id='$item_id'";


$result = mysqli_query($conn,$update);

$data = mysqli_fetch_array($result);


if(isset($_POST['save'])){

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


$sql = "UPDATE items SET item_name='$item_name',item_price='$item_price',item_image='$destfile' where item_id='$item_id'";


if(mysqli_query($conn,$sql)){

$email = $_GET['email'];
header('Location:view_prod.php?email='.$email);


}

else{



echo "Error in insertion";




}


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
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kalam&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
.nav-link{
    color: rgb(73, 36, 9);
    font-family: 'Comfortaa', cursive;
    
}
.nav-link:hover{
  color: green;

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

<br><br><br>
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



<div class="container" style="font-family: 'Comfortaa', cursive;">
    <div class="row">
  
      
        <div class="col-sm-6" style="box-shadow:0 5px 5px gray ;">
          <h3 class="text-center" style="color:darkorange ;">Update Item</h3>
          <br>
          <form action="prod_process.php?email=<?php echo $_GET['email']; ?>" method="post" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Item Name</label>
              <input type="text"  style="border-radius:0% ;border-top: none;border-left: none;border-right: none;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item_name" value="<?php echo $data['item_name']; ?>" required>
              <div id="emailHelp" class="form-text"></div>
            </div>
<br>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Item Price</label>
              <input type="number"  style="border-radius:0% ;border-top: none;border-left: none;border-right: none;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item_price" value="<?php echo $data['item_price']; ?>" required>
     
            </div>
            <br>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Old Item Image</label>
              <input type="text"  style="border-radius:0% ;border-top: none;border-left: none;border-right: none;" class="form-control" id="exampleInputPassword1" name="item_image" value="<?php echo $data['item_image']; ?>" required>
            </div>
<br>
<div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Item Image</label>
              <input type="file"  style="border-radius:0% ;border-top: none;border-left: none;border-right: none;" class="form-control" id="exampleInputPassword1" name="item_image" value="<?php echo $data['item_name']; ?>" required>
            </div>
  

            
<button type="submit" class="btn btn-" style="background-color: lightseagreen ;border-radius: 0%;font-family: 'Comfortaa', cursive;letter-spacing: 2px;color:white;"  name="save">Update</button>
          </form>
      </div>
<br>
      <div class="col-sm-6" style="background-color:#4286f4;height:520px;width: 480px;box-shadow:0 5px 5px gray ;" >

     
     
 
   
   
    
        </div>
     
      
      </div>
   
    </div>


<!-- <form action="" method="post" enctype="multipart/form-data">
<h1>Update Product</h1>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="item_name" value="<?php echo $data['item_name']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="item_price" value="<?php echo $data['item_price']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="item_image" value="<?php echo $data['item_image']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="item_image" value="<?php echo $data['item_name']; ?>" required>
  </div>
  <button type="submit" class="btn btn-primary" name="save">Update</button>
</form> -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>


</body>
</html>

