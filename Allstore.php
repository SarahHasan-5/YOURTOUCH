<?php
$catId=$_GET["catid"];
$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
	die("not connect".$conn->connect_error);
}else{
	//echo "connect";
	echo "<br>";
	$sql="SELECT * FROM store";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		echo "data selected";
		$product="";
		while( $row=$result->fetch_assoc()){
			$product=$product."
			<div class='col-lg-4 col-md-6 mb-4'>
              <div class='card h-100'>
                <a href='#'><img src='".$row["image"]."' alt=''></a>
                <div class='card-body'>
                  <h4 class='card-title'>
                    <a href='#'>".$row["name"]."</a>
                  </h4>
                  <h5>$".$row["storename"]."</h5>
				  <h5>$".$row["Email"]."</h5>
                  <p class='card-text'>".$row["storedescription"]." </p>
                </div>
                <div class='card-footer'>
                  <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>";
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <title>all store</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">YourTouch</a>
	  <a class="nav-link h" href="shop.php"><i class="fas fa-shopping-cart" style="font-size:24px; color:white;"></i></a>
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

  <!-- Page Content -->
  
     <div class="container">
    
  </div>
  <!-- /.container -->

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
