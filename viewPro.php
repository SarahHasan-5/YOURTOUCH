<?php
session_start();
$id=$_POST["id"];
$price=$_POST["price"];
$color=$_POST["color"];
$size=$_POST["size"];
$image=$_POST["image"];
$desc=$_POST["productdescription"];
$pid=$_POST["pid"];
//echo "the id is = ".$_SESSION["iduser"]."<br>";
$conn=new mysqli("localhost","root","","dbweb2");
$item_Id=$_POST["id"];
//echo "id =".$_POST["id"]."<br>";
if($conn->connect_error){
	die("not connected".$conn->connect_error);
}else{
	//echo "connected"."<br>";
	}
	$sql="SELECT * FROM product WHERE Id='$item_Id'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//echo "data selected";
		while($row=$result->fetch_assoc()){
			 $product=$product."
			      <div class='col-sm-6'>
			      <form action='add.php' method='post'>
	              <img src=".$row["image"]." style='height:500px; width:350px' alt=''> <input type='text' value='".$row["image"]."' name='image' hidden>
                  </div>
                  <div class='col-sm-6' >  
				  <h5><b>".$row["productdescription"]."<input type='text' value='".$row["productdescription"]."' name='productdescription' hidden ></h5>	<br>
                  <h4 style='background:#f5f5f5; color:red; height:40px; padding:10px 10px 10px 10px;'>".$row["price"]."<input type='text' value='".$row["price"]."' name='price' hidden ></h4>				  
				  <h4>".$row["color"]."<input type='text' value='".$row["color"]."' name='color' hidden></h4>
				  <h3>".$row["size"]."<input type='text' value='".$row["size"]."' name='size' hidden></h3>
				  <input type='submit' value='add' style='background:#e84c3d; border:none; color:#fff; padding:8px 40px;cursor:pointer; font-size:20px; margin:30px 0px;'><input type='text' value='".$row["id"]."' name='id' hidden>
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


	
    <title>Your Touch </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color:#f5f5dc"}
* {
  box-sizing: border-box;
}
table {
  border: 1px solid black;
}
.group {
	 float: right;
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
              <a class="nav-link" href="login.php"><i class="fas fa-user"></i> SIGN UP</a>
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
           <? echo $product; ?>
           </div>
        </div>
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
