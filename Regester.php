<?php
session_start();
$name=$_POST["Name"];
$phone=$_POST["Phone"];
$email=$_POST["Email"];
$passwo=$_POST["Password"];
$conn=new mysqli("localhost","root","","dbweb2");
if($conn -> connect_error){
	die(" Not Connected  ".$conn -> connect_error);
}else{	
	echo "All Good < Connected "."<br>";
	$sql = "INSERT INTO infouser(username,phone,email,password) VALUES('$name','$phone','$email','$passwo')";
	
	if($conn->query($sql)== TRUE){
	    echo " Some Data inserted";
		//$output= '<script> window.open("index1.php","_self");</script>'; 
		//echo $output;
		}else{
		echo " No Data ";
	         }
		$conn->close;
	}	

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


	
    <title>Your Touch </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image :url("lololo.jpg"); background-size: cover;}
* {
  box-sizing: border-box;
}
.container-fluid{
	border:5px solid white;
	background-color:white;
	width:50%;
	height:450px;
	padding:20px;
}
.inpu {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 17px;
  background: #c19e87;
  color: white;
  min-width: 50px;
  text-align: center;
}


.btn {
  background-color: #c19e87;
  color: white;
  padding: 15px 15px;
  border: none;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
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
              <a class="nav-link" href="product.php">SERVICES</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="login.php"><i class="fas fa-user"></i> SIGN UP</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br> <br>
<div class="container-fluid">
<form action="Regester.php" style="max-width:500px;margin:auto" method="post">
  <h2 class="text-center">Join us</h2>
  <div class="inpu">
    <i class="fa fa-user icon"></i>
    <input class="form-control" type="text"  placeholder="Username" name="Name" style="height:50px; width:100%" required> 
  </div>
  
  <div class="inpu">
    <i class="fas fa-mobile-alt icon"></i>   
    <input class="form-control" type="text" placeholder="Phone" name="Phone" style="height:50px; width:100%" required>
  </div>
  
  <div class="inpu">
    <i class="fa fa-envelope icon"></i>
    <input class="form-control" type="text" placeholder="Email" name="Email" style="height:50px; width:100%" required>
  </div>
  
  <div class="inpu">
    <i class="fa fa-key icon"></i>
    <input class="form-control" type="password" placeholder="Password" name="Password" style="height:50px; width:100%" required>
  </div>
    <input class="btn" type="submit" value="Register" >
	<div class="text-center">
	<p><b><a href="index1.php" style="color:#cdc0b0">Sign in </a> </b></p>
    </div>
</form>
</div>
<br><br><br><br><br>
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
