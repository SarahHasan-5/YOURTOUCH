 <?php
session_start();
$idusers=$_SESSION["iduser"];
//echo "the id is = ".$_SESSION["iduser"]."<br>";
//echo "the UserName is = ".$_SESSION["user"]."<br>";
include 'connect.php';
	$sql="SELECT * FROM store WHERE id='$idusers'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//echo "data selected"."<br>";
		while($row=$result->fetch_assoc()){
      $name =  "Hi , " . $row['storename']; 
	
		}
	}else{
		//echo "no data";
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


	
    <title>YOUR TOUCH </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<head>
<style>
  body {
    background-color: #f3f3f3; 
    text-align: center;
  }
  .name {
    background-color: #fff;
    padding:0px 5px;
  }
  .values {
    padding-top:17px;
  }
 .values h2{
    margin: 20px auto;
  }
  .values h1 {
    font-size: 35px;
    color: gray;
    padding-bottom: 30px;
  }
  a {
    color: #fff;
    text-decoration:none
  }
  .a {
    background: #e84c3d;
    padding:10px 40px;
    letter-spacing:1px;
    width:200px;
 }
  .a a:hover {
	  background: #ff1802;
    color: #fff;
	  text-decoration:none;
 }
 .a:hover {
    background: #ff1802;
 }
footer
{
  margin-top:110px;
}
  </style>
  </head>
  <body>
  <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">YOUR TOUCH</a>
		<a class="nav-link h"><i class='fas fa-store' style="font-size:24px; color:white;"></i></a>
    <div class="name"><?php echo $name ?></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">SERVICES</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logoutstore.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<br><br>
	<div class="container values">
    <h1> Please select the operation you want to perform: </h1>
  <h2 class="a"><a href="AddPro.php">ADD</a> </h2>
  <h2 class="a"> <a href="del.php">DELETE</a></h2>
  <h2 class="a w"> <a href="update.php">UPDATE</a></h2>
  </div>
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