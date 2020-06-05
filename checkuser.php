 <?php
session_start();
$idusers=$_SESSION["iduser"];
//echo "the id is = ".$_SESSION["iduser"]."<br>";
//echo "the UserName is = ".$_SESSION["user"]."<br>";
$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
	die("not connect".$conn->connect_error);
}else{
	//echo "connect"."<br>";
	echo "<br>";
	$sql="SELECT * FROM store WHERE id='$idusers'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//echo "data selected"."<br>";
		while($row=$result->fetch_assoc()){
			   echo "<br>"."<br>"."<br>"."<center>"."<h3 >"."<i class='fas fa-store'>"."    "."Welcome , ".$row['storename']."</i>"."</h3>";
              
	
		}
	}else{
		//echo "no data";
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
<html>
<title>check</title>
<head>
<style>
 h3{
	background:#fff;
    width:300px;
	height:100px;
    margin:5px 120px;
	padding:10px;
	border:1px solid gray;
	
  }
  h2{
	 
	   width:200px;
	   height:50px;
	   float:left;
	   margin-right:230px; 
	   margin-top:70px;
	  
  }
  .w{
	  margin-left:0px;
	  margin-right:10px;
	  
  }
  .a{
  text-decoration:none;
  color: #fff;
  background: #e84c3d;
  padding:10px 10px;
  letter-spacing:1px;
 }
 .a:hover{
	background: #ff1802;
    color: #fff;
	text-decoration:none;
 }
 .d{
    font-weight:bold;
	font-size:20px;
	padding:12px 40px;
 }	
 body{
	background-color:#f3f3f3;
}
  </style>
  </head>
  <body>
  <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Your touch</a>
		<a class="nav-link h" href="shop.php"><i class="fas fa-shopping-cart" style="font-size:24px; color:white;"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">SERVICES</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="owners.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<br><br>
	<div class="container">
   <h2><a href="AddPro.php" class="a c">Add</a> </h2>
  <h2> <a href="del.php" class="a c">Delete</a></h2>
  <h2 class="w"> <a href="update.php" class="a c">Update</a></h2>
  </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
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