<?php
session_start();
$output = '';
 include 'connect.php';
if (isset($_POST['search']))
{


$searchq= preg_replace('#[^0-9a-z]#i','',$_POST['search']);
$query = 'SELECT * FROM product WHERE productdescription LIKE "%$searchq%" OR color LIKE "%$searchq%"';

if ($result = $conn->query($query)){
  echo 'data selected';
  while ($row = $result->fetch_row()){
    $product=$product."
      <div class='col-lg-4 col-md-6 mb-4'>
      <form action='viewpro.php' method='post'>
              <div class='card h-100'>
                <img src='".$row["image"]."' alt=''>
                <div class='card-body'>
                  <h4 class='card-title'>
                    ".$row["name"]."
                  </h4> 
                  <p class='card-text'>".$row["productdescription"]." </p>
                </div>
        <div>
        <input type='text' name='id' value='".$row["id"]."' hidden>
                <input type='submit' value='View'  class='btn btn-success'  >
        </div>
                <div class='card-footer'>
          <div id='star-rating'>
    <input type='radio' name='example' class='rating' value='1' />
    <input type='radio' name='example' class='rating' value='2' />
    <input type='radio' name='example' class='rating' value='3' />
    <input type='radio' name='example' class='rating' value='4' />
    <input type='radio' name='example' class='rating' value='5' />
</div>
                </div>
              </div>
            </div>
      </form>";
  }
  $result->close();
}else{
  echo 'no data';
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
	<link rel="stylesheet" type="text/css" src="rating.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="rating.js"></script>
	
    <title>YOURTOUCH </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<style>
	body{
	background-color:#666666;	
}
.er{
	color:white;
	text-align:center;
}
.er:hover{
	text-decoration:none;
	color:#ff1802;
}
</style>
</head>
<body>
  <? echo $output; ?>
   <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">YOURTOUCH</a>
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
	
	
   
	      <div class="container-fluid text-center">
          <div class="row">
           <?
           echo $product;
           ?> 
          </div>
          </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="rate.js"></script>
</body>
</html>
