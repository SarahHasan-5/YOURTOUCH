<?php
        $country=$_POST["country"];
		$city=$_POST["city"];
		$add=$_POST["Address"];
	    $email=$_POST["email"];
		$phone=$_POST["phone"];
		$family=$_POST["family"];
        $name=$_POST["Name"];
		$postal=$_POST["postal"];
		$pay=$_POST["city1"];
$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
die("not connected".$conn->connect_error);
}else{
//echo "connected";
       
	$sql="INSERT INTO information (Family, Phone, Email, Address, City, Country,Postal Code,Name) VALUES('$family', '$phone', '$email', '$add', '$city', '$country','$postal','$name')";
	if($conn->multi_query($sql)== true){
		$output ="<script > alert('confirm payment and shipping:');</script>";
		echo $output;
	}else{
		$output ="<script > alert('confirm payment and shipping:');</script>";
		echo $output;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <title>Add store</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <style>
  body{
	background-color:#f3f3f3;
}
</style>  </head>

<body>

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
            <a class="nav-link" href="index.php">Product</a>
          </li>
        
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
  <br><br><br><br><br><br>
 <center>
 <h3><p>Thank,you for choosing your touch <br>
You Will recieve your item 48 hours.</p> 
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  
  <!-- /.container -->
<br><br><br><br><br><br><br><br><br><br><br>
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

</html>