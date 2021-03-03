<?php
session_start();
if (isset($_POST["pid"])){
  $pid=$_POST["pid"];
}
$idusers=$_SESSION["iduser"];
include 'connect.php';
	$product="<table style='width:100%'>
	<tr> 
	<th>Product</th>
    <th>Description</th>	
	<th>Size</th>
	<th>Unit price</th>
	<th></th>
	</tr>";
	$sql="SELECT * FROM myproduct2 WHERE userid='$idusers'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//echo "data selected";
		while($row=$result->fetch_assoc()){
			 $product=$product."<form action='delete.php' method='post' ><input type='text' value='".$row["pid"]."' name='id' hidden>
			 <tr> 
                  <td> <img src=".$row["image"]." style='height:150px; width:130px' alt=''>	</td>			  
				 <td> ".$row["description"]."</td>		  
				 <td>".$row["size"]."</td>
				 <td> ".$row["price"]."	</td>	
				 <td><input type='submit' value='delete' name='submit' style='background:#e84c3d; border:none; color:#fff; padding:8px 40px;cursor:pointer; font-size:20px;margin:30px 0px;'></td> </form>
                  </tr>";
				  
			
		}
		$product=$product."</table>";
		
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
	font-family: Arial, Helvetica, sans-serif; 
	background-color:#f5f5dc;
	margin-top: 50px;
}
.oi{
	background:#e84c3d;	
	color:#fff;
	padding:8px 40px;
	font-size:20px;
	margin:60px 0px
}
.oi:hover{
	background: #ff1802;
    color: #fff;
	cursor:pointer;
	text-decoration:none;
}
.k {
	float:right;
	margin-left:773px
}
table{
	border:1px solid gray;
	text-align: center;
}
td {
padding:20px;	
}
th{	
	padding:30px;
}
footer
{
	margin-top: 30px
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
              <a class="nav-link" href="index1.php"><i class="fas fa-user"></i> SIGN UP</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


        <div class="container">
     <?php 
   echo $product;
   ?>
  </div>
		
		<div class="container">
            <div class="row">
		<a href="check.php" class="oi"> Check out</a>
		<a href="index.php" class="oi k"> Go Shopping</a>
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