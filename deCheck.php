<?php
session_start();

$address = '';
$country = '';
$VisaOROnDelivary = '';

if(isset($_POST['address']))
{
  $address = $_POST['address'];
}
if(isset($_POST['country']))
{
  $country = $_POST['country'];
}
if(isset($_POST['VisaOROnDelivary']))
{
  $VisaOROnDelivary = $_POST['VisaOROnDelivary'];
}
$idusers = $_SESSION['iduser'];

include 'connect.php';
$sql = "INSERT INTO information (`userid`, `Address`, `Country`, `Payment Method`) VALUES ('$idusers','$address','$country','$VisaOROnDelivary')";
if($conn->query($sql) === TRUE){
    //echo 'data inserted';
    $output = "<script > alert('confirm payment and shipping:');</script>";
    //echo $output;
  }else{
    echo 'error';
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <title>YOUR TOUCH</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <style>
  body{
	background-color:#f3f3f3;
  margin-top: 50px;
  width:100%;
  height:100%;
  overflow: hidden;
  position: relative;
}
footer {
  margin-top: 100px;
}
.z
{
  transform: translate(-50%,-50%);
  left:50%;
  top:50%;
  position: absolute;
}
</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">YOURTOUCH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" style="color:#2A9A3E; background-color: #F4FCF5; border-radius: 50px; font-size: 13px"><i class="fas fa-lock"></i>  Safe payment</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <div class="row z">
    <p>Thank,you for choosing your touch You Will recieve your item throw 48 hours.</p> 
  </div>
</div>
  
  
  <!-- /.container -->
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Touch 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>