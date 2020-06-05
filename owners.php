<?php
session_start();
if($_POST['submit']) {
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
echo "<b><i>Incorrect login</i></b>";
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


    <title>Your Touch </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<style>
	.form-group input[type="submit"]{
	background:#e84c3d;	
border:none;
color:#fff;
padding:8px 40px;
font-size:20px;
margin:30px 0px;
}


.form-group input[type="submit"]:hover{
	background: #ff1802;
    color: #fff;
	cursor:pointer;

	</style>
</head>

  <body style="background-color:#f3f3f3">

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">YourTouch</a>
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="par.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="owners.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container">
	<br>
<form action="owners.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		  <label> <p style="color:black; font-size:20px" ><b> User name:</b></p></label>
      <input type="text" class="form-control" name="email" required>
    </div>
	<div class="form-group">
		  <label> <p style="color:black; font-size:20px" ><b> Password:</b></p></label>
      <input type="text" class="form-control" name="password" required>
    </div>
	<div class="form-group"><center>
		<input type="submit" value="OK" name="submit" onClick="display();">
    </div>
	</div>
	</form>
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
