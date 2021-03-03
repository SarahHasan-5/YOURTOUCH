<?php
session_start();

if(isset($_GET['catid']))
{ 
  $catId = $_GET['catid'];
  //echo $catId . "<br>";
}

$item_Id = '';
if (isset($_POST["id"])){
  $item_Id = $_POST["id"];
  //echo $item_Id . "<br>";
}

include 'connect.php';
	$sql="SELECT * FROM product WHERE storeid='$item_Id'";
	if($result = $conn->query($sql)){
		//echo "data selected";
		$product="";
		while( $row=$result->fetch_assoc()){
			$product=$product."
			<div class='col-lg-4 col-md-6 mb-4'>
			<form action='viewpro.php' method='post'>
              <div class='card h-100' style='width:395px;height:600px;'>
                <img src='".$row["image"]."' alt='' style='width:393px;height:300px;'>
                <div class='card-body'> 
                  <p class='card-text'>".$row["productdescription"]." </p>
                </div>
				<div>
				<input type='text' name='id' value='".$row["id"]."' hidden>
                <input type='submit' value='View'  class='a'  >
				</div>
                <div class='card-footer'>
		      <div class='star-rating'>
    
    <input id='star-5x' type='radio' name='rating' value='star-5' />
    <label for='star-5x' title='5 stars'>
        <i class='fa fa-star'></i>
    </label>

    <input id='star-4x' type='radio' name='rating' value='star-4' />
    <label for='star-4x' title='4 stars'>
        <i class='fa fa-star'></i>
    </label>

    <input id='star-3x' type='radio' name='rating' value='star-3' checked />
    <label for='star-3x' title='3 stars'>
        <i class='fa fa-star'></i>
    </label>

    <input id='star-2x' type='radio' name='rating' value='star-2' />
    <label for='star-2x' title='2 stars'>
        <i class='fa fa-star'></i>
    </label>

    <input id='star-1x' type='radio' name='rating' value='star-1' />
    <label for='star-1x' title='1 star'>
        <i class='fa fa-star'></i>
    </label>
    
</div>
                </div>
              </div>
            </div>
			</form>";
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
<script>
        $(function(){
            $('.container').rating();
        });
    </script>
	
<link rel="stylesheet" type="text/css" src="rating.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="rating.js"></script>
 <script src="js/jquery.min.js"></script>
	
    <title>YOURTOUCH </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<style>
body{
	background-color:#666666;	
  margin-top: 50px;
}
#d{
	 padding: 0px 50px;
 }
 .se {
	 font-size: 16px; 
 }
 .nav-link dropdown-toggle:hover .dropdown-menu {
   display: block;
}

.dropdownw{
	color:#fff;
	
}
.dropdownw-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdownw-content a {
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
}

.dropdownw-content a:hover {background-color: #f1f1f1}

.dropdownw:hover .dropdownw-content {
  display: block;
}

.dropdownw:hover .dropbtn {
  background-color: #3e8e41;
}
.ww{
	margin-right:47px;
	margin-left:20px;
}
.sidenav {
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 154px;
  left: 10px;
  overflow-x: hidden;
  padding: 8px 0;
  height:400;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:#fff;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}
.main {
 
  font-size: 20px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.star-rating {
    display: block;
    direction: rtl;
    text-align: center;
}
.star-rating input[type="radio"] {
    display: none
}
.star-rating > label {
    color: #ccc;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    cursor: pointer;
    font-size: 20px
}
.star-rating > label:hover,
.star-rating > label:hover ~ label,
.star-rating > input[type="radio"]:checked ~ label
{
  color: #f2b600
}
input[value="View"]
{
  margin-bottom:20px;
}
.a{
  text-decoration:none;
  color: #fff;
  background: #e84c3d;
  padding:5px;
  letter-spacing:1px;
  text-transform:uppercase;
  border:none;
  cursor: pointer;
  width:20%;
  border-radius: 10px
 }
 .a:hover{
    background: #ff1802;
    color: #fff;
    text-decoration:none;
 }
</style>
</head>
  <body>
 
 <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">YOURTOUCH</a>
		<a class="nav-link h" href="shop.php"><i class="fas fa-shopping-cart" style="font-size:24px; color:white;"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
              <a class="nav-link" href="index1.php"><i class="fas fa-user"></i> SIGN UP</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	

   
</div> 
	      <div class="container-fluid text-center" id="d">
          <div class="row">
           <?php
           echo $product;
           ?> 
          </div>
          </div>
		  </div>
<br><br><br><br><br>
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Touch 2020</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="rate.js"></script>
</body>
</html>
