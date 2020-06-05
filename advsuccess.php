<?php
$conn=new mysqli("localhost","root","","dbweb2");
$store=$_POST["NameStore"];
$desc=$_POST["DescriptionStore"];
$con=$_POST["name"];
$name=$_POST["phone"];
if($conn->connect_error){
die("not connected".$conn->connect_error);
}else{
echo "connected";
$sql="INSERT INTO store1 (storename,storedescription,name,phone)VALUES('$store','$desc','$con','$name')";
if($conn->query($sql)===TRUE){
echo"inserted";
}
else{
	echo "error";
}
$conn->close;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
.add {
	border:2px solid gray;
	width:500px;
	height:300px;
	text-align:center;
	font-weight:bold;
	margin:40px 0px 170px 0px ;
	
}
.add p{
	border:4px solid gray;
	padding:20px;
	margin:20px;
	background-color:gray;
	}
	h3{
		text-decoration: underline;
	}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <title>product</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="par.html">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
  <center>
  <div class="add">
  
  <p>
  YOUR ADVERTISING HAS BEEN ADDED FOR FREE </p><br><br><br><br><br>
  <h3>
  <a href="AddPro.php"target="_top" >ADD AN ADVERTISING </a></h3>
  </div>
   </div>
  
  
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