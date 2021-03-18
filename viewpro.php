<?php
session_start();

if (isset($_POST["id"])){
  $id=$_POST["id"];
}
if (isset($_POST["price"])){
  $price=$_POST["price"];
}
if (isset($_POST["color"])){
  $color=$_POST["color"];
}
if (isset($_POST["size"])){
  $size=$_POST["size"];
}
if (isset($_POST["image"])){
  $image=$_POST["image"];
}
if (isset($_POST["productdescription"])){
  $desc=$_POST["productdescription"];
}
if (isset($_POST["pid"])){
  $pid=$_POST["pid"];
}

//echo "the id is = ".$_SESSION["iduser"]."<br>";
$item_Id=$_POST["id"];
//echo "id =".$_POST["id"]."<br>";
include 'connect.php';

	$sql="SELECT * FROM product WHERE Id='$item_Id'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//echo "data selected";
    $product = '';
		while($row=$result->fetch_assoc()){
			 $product=$product."
			      <div class='col-sm-6'>
			      <form action='add.php' method='post'>
	              <img src=".$row["image"]." style='height:500px; width:450px' alt=''> <input type='text' value='".$row["image"]."' name='image' hidden>
                  </div>
                  <div class='col-sm-6' >  
				  <h5><b>".$row["productdescription"]."<input type='text' value='".$row["productdescription"]."' name='productdescription' hidden ></h5>
                  <h4 style='color:#FF1802; font-size:20px'>".$row["price"]."JD<input type='text' value='".$row["price"]."' name='price' hidden ></h4><h4 style='font-weight:normal; font-size:20px'>".$row["color"]."<input type='text' value='".$row["color"]."' name='color' hidden></h4>
				  <h3 style='font-weight:normal; font-size:20px'>".$row["size"]."<input type='text' value='".$row["size"]."' name='size' hidden></h3>
          <input type='text' value='".$row["id"]."' name='id' hidden>
				  <input type='submit' value='Add to cart' name='submit' class='a'>
          <hr>
          <pre><h5>
Product information</h5>
Product Code: ".$row["Product Code"]."
The possibility of return within '14 days'.
Delivery: The item will be shipped within 24 hours.</pre>
				  </form>
				  </div>";
			
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


	
    <title>YOUR TOUCH</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<style>
body {
  background-color:#F3F3F3;
}
* {
  box-sizing: border-box;
}
table {
  border: 1px solid black;
}
.group {
	 float: right;
}
footer 
{
  margin-top:60px;
}
.a{
  text-decoration:none;
  color: #fff;
  background: #e84c3d;
  padding:10px;
  border:none;
  cursor: pointer;
  width:50%;
  font-size: 30px;
  margin-top: 40px;
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
        <a class="navbar-brand" href="index.php">YOUR TOUCH</a>
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
              <a class="nav-link" href="index1.php"><i class="fas fa-user"></i> SIGN UP</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>
<div class="container">
            <div class="row">
           <?php echo $product; ?>
           </div>
        </div>
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
