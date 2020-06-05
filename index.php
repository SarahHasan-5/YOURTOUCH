<?php
session_start();
$catId   = $_GET["catid"];

$querys  = $_GET["search"];
$idusers = $_SESSION["iduser"];
$idusers = '';
if (!empty($_SESSION['iduser'])) {
     $idusers = $_SESSION['iduser'];
}
echo "the id is = ".$_SESSION["iduser"]."<br>";
echo "the UserName is = ".$_SESSION["user"]."<br>";
$conn = new mysqli("localhost","root","","dbweb2");
if ( $conn->connect_error )
{
	die("not connect".$conn->connect_error);
}
else
{
	echo "connect"."<br>";
	$sql    = "SELECT * FROM infouser WHERE id='$idusers'";
	$result = $conn->query($sql);
	if ( $result->num_rows>0 )
  {
		echo "data selected"."<br>";
		while ( $row=$result->fetch_assoc() )
    {
			   echo "<h3 >"."<i class='far fa-user'>"."    "."hi,".$row['username']."  "."Welcome to the market for your touches"."</i>"."</h3>";
		}
	}
  else
  {
		echo "no data";
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


    <title>YOUR TOUCH </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
<style>
body a:hover{
	text-decoration:none;
}
.col-sm-5 p 
{
color: black;	
}
.container-fluid {
      padding: 50px 50px;
  }
 #d{
	 padding: 0px 50px;
 }
 .a{
  text-decoration:none;
  color: #fff;
  background: #e84c3d;
  padding:10px 10px;
  letter-spacing:1px;
  text-transform:uppercase;
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
 .fixed{
	position:absolute;
    z-index:99;
    right:120px;
	margin:0px;
 }
 .g{
	position:absolute;
    z-index:99;
    right:120px;
 }
.sear input[type=text] {
  padding: 6px 10px;
  margin-top: 7px;
  margin-right:0;
  font-size: 17px;
  border: none;
  cursor: pointer;
  width:60%;
  height:45px;
}
.sear button:hover {
  background: #ccc;
}
.sear button {
    display: inline;
    margin: 0;
    padding: 13px;
	background:#909c8f ;
	border: none;
  } 
  .c{
	  font-weight:bold;
	font-size:20px;
	padding:12px 23px;
  }
  h3{
	background:#fff;
    width:620px;
	height:50px;
    margin:5px 120px;
	padding:10px;
	border:1px solid gray;
	
  }
	</style>
  </head>

  <body style="background-color:#f3f3f3">

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
              <a class="nav-link" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="index1.php"><i class="fas fa-user"></i>SIGNIN</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
		
		
    <div class="container">
	   <div class="fixed"><a href="Addstore.php" class="a d"> ADD STORE </a></div>
	   <div class="sear">
		 <form action="search.php" method="post">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" onclick="myFunction()"><i class="fa fa-search"></i></button>
         </form>
         </div>
		  <div class="g"><a href="owners.php" class="a c">Access to your store</a></div>
	</div>
    <!-- Page Content -->
    

        <div class="container-fluid text-center" id="d">
        <!-- /.col-lg-3 -->
        <div class="row carousel-holder">
        <div class="col-md-12">
		<br>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="image/men and women.webp" alt="First slide" style="width:1400px;  height:460px;">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="image/zzz.jpg" alt="Second slide" style="width:1400px;  height:450px;">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="image/ff.jpg" alt="Second slide" style="width:1400px;  height:450px;">
              </div>
            
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		   
		   </div>
		   
		  <div  id="service" class="Container-fluid ">
		  <h2 class="text-center" style="color:#666666"> Category selection </h2><br>
			  <div class="row ">
			  <div class="col-sm-6">
              <div class="card h-70" style="width: 35rem;">
                <a href="catname2.php?catid=1"><img src="image/women.webp" alt="" width="560px" height="350px">
                <div class="card-body">
                  <h4 class="card-title">
                    WOMEN CLOTHING
                  </h4>
                </div>
				</a>
              </div>
              </div>
			      <div class="col-sm-6">
              <div class="card h-70 " style="width: 35rem;">
                <a href="catname2.php?catid=4"><img src="image/cccc.png" alt="" width="560px" height="350px">
                <div class="card-body" style="align:left">
                  <h4 class="card-title">
                   MEN CLOTHING
                  </h4>
                </div>
				 </a>
              </div>
              </div>
			  </div>
			<br> <br>
			
			<div class="row ">
			 <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=2"><img src="image/mmm.png" alt="" width="560px" height="350px">
              <div class="card-body" style="align:left">
                 <h4 class="card-title">
                  ACCESSORIES
                 </h4>
               </div>
			   </a>
             </div>
             </div>
			 
			 <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=3"><img src="image/nnn.png" alt="" width="560px" height="350px">
              <div class="card-body" style="align:left">
                 <h4 class="card-title">
                 BABY CLOTHING
                 </h4>
               </div>
			   </a>
             </div>
             </div>
			 </div>
			 <br> <br>
			 <div class="row ">
			 <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=8"><img src="image/KKK.png" alt="" width="560px" height="350px">
              <div class="card-body" style="align:left">
                 <h4 class="card-title">
                  HOME
                 </h4>
               </div>
			   </a>
             </div>
             </div>
			 
			 <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=7"><img src="image/jjj.png" alt="" width="560px" height="350px">
              <div class="card-body" style="align:left">
                 <h4 class="card-title">
                  HANDBAGS
                 </h4>
               </div>
			   </a>
             </div>
             </div>
		   </div>
		   <br><br>
		   <div class="row ">
			 <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=5"><img src="image/makeup.webp" alt="" width="560px" height="350px">
              <div class="card-body" style="align:left">
                 <h4 class="card-title">
                  MAKEUP
                 </h4>
               </div>
			   </a>
             </div>
             </div>
			 
			 <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=6"><img src="image/uuu.png" alt="" width="560px" height="350px">
              <div class="card-body" style="align:left">
                 <h4 class="card-title">
                  SHOES
                 </h4>
               </div>
			   </a>
             </div>
             </div>
		   </div>
		   </div>
		   <br> <br>
			 
		   </div>
		  </div>
		  
          
		  
        
        <!-- /.col-lg-9 -->

      
      <!-- /.row -->

   
    <!-- /.container -->
      <div  id="about" class="Container-fluid">
		  <hr style="height:20px"> </hr>
		  <div class="row">
		  <div class="col-md-7"><br><br>
		  <h2 style="color:#666666"> ABOUT </h2><br>
		  <h4 style="color:#a3a3a3"> Welcome to oursite ,if this is your first visit.
		  we will present ageneral information about our website and the different services.<br>
		  It is asite for selling and buying through electronic store,Is one of the good ideas that have become famous in the
		  past period, where the idea of the cost is low compared to shops on the region.</h4><br><br>
		  <a  href="par.html" class="a"> learn more ! </a><br><br>
		  </div>
		  <div class="col-md-5">
		  <br><br><br><br>
		  <img src="image/eman1.png" alt="" width="500px" height="450px">
		  </div>
		  </div>
		  </div>
		  
		  <div id="contact" class="Container-fluid">
           <hr style="height:20px; "> </hr>
          <h2 class="text-center" style="color:gray">CONTACT</h2>
          <div class="row">
          <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
	      <div class="icon-bar">
          <p><i class="fas fa-map-marker-alt"></i>  Amman-jordan</p>
          <p><i class="fas fa-mobile-alt"></i> +962 780000000</p>
          <p><i class="fa fa-envelope"></i> sarah@gmail.com</p> 
		      <br>
          </div>
	      </div>
          <div class="col-sm-7">
          <div class="row">
          <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
          <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
          </div> 
          </div>
          </div>
          </div>
		  
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
