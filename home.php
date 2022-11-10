<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","colourc5_bus","Shivsingh1@","colourc5_bus");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Selling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style> 
  
</head>
<body>

<div class="container">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: green;">Welcome <?php echo $_SESSION['username']; ?> to CarSelling</h1><br>

  </hgroup>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav center">
        <li><a href="logout.php">Logout</a></li
      </ul>

    </div>
  </div>
</nav>

<main class="main-content">
 <div class="col-md-6 col-md-offset-4">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>

<br><br>
<div class="card">
  <img src="car.webp" alt="Denim Jeans" style="width:100%">
  <h1>New Model BMW X5 Car</h1>
  <p class="price">Rs. 5,000,000</p>
  <p>The BMW X5 has 2 Diesel Engine and 2 Petrol Engine on offer.</p>
  <p><button><a href="contact.php">Contact us to Buy</a></button></p>
</div>
<br><br>
</body>
</html>











