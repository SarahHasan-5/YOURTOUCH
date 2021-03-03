<?php
session_start();
if(isset($_POST['submit']) ){
$username = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);

$db = mysqli_connect("localhost","root","","dbweb2") or die ("Failed to connect");

$sql = "SELECT id,Email,password FROM store where Email = '$username' AND password ='$password'";
$query = mysqli_query($db, $sql);
if($query) {
$row = mysqli_fetch_row($query);
$userId= $row[0];
$dbUserName = $row[1];
$dbPassword = $row[2];
}
if($username == $dbUserName && $password == $dbPassword) {
     $_SESSION['iduser'] = $userId;
	 echo '<script> window.open("checkuser.php","_self");</script>'; 
}else {
    echo "<script>alert('The password you’ve entered is incorrect');</script>"; 
}
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


    <title>YOUR TOUCH</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<style>
    body
    {
      padding-top:100px;
    }
.inpu {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  border :5px solid white;
}

p{
color:#9a7e6c;
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
footer {
  margin-top: 115px ;
	</style>
}
</head>

  <body style="background-color:#f3f3f3">

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">YOUR TOUCH</a>
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="par.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logoutstore.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container-fluid">
<form action="owners.php" method="post" enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2 class="text-center">Login</h2>
  <div class="inpu">
    <i class="fa fa-envelope icon"></i>
    <input type="text"  placeholder="Please enter your email" name="email" class="form-control" style="height:50px; width:100%" required>
  </div>
  
  <div class="inpu">
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Please enter your Password" name="password" class="form-control" style="height:50px; width:100%"  required>
  </div>
    <input class="btn" type="submit" name="submit" value="LOG IN" onClick="display();"><br><br>
  <div class="text-center">
  <b><p> Dont have a Store? </b><a href="Addstore.php" style="color:gray">REGISTER HERE </a></p>
    </div>
</form>
 </div>
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
