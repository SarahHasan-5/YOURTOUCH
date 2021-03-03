<?php
session_start();
if(isset($_GET['catid']))
{ 
  $catId = $_GET['catid'];
}
$name = '';
if (!empty($_POST["search"])) 
{
  $search = $_POST["search"];
}
$idusers = '';
if (!empty($_SESSION['iduser'])) {
     $idusers = $_SESSION['iduser'];
     //echo "the id is = ".$_SESSION["iduser"]."<br>";
}
if (!empty($_SESSION['user'])) {
     $user = $_SESSION['user'];
     //echo "the UserName is = ".$_SESSION["user"]."<br>";
}
include 'connect.php';
$sql = "SELECT * FROM infouser WHERE id ='$idusers'";
if ( $result = $conn->query($sql))
{
    //echo "data selected"."<br>";
    while ( $row = $result->fetch_assoc() )
    {
         $name = "<i class='fas fa-user-circle'></i> " . $row["username"] ;
    }
}
else
{
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
  
<style>
body a:hover{
  text-decoration:none;
}
.col-sm-5 p 
{
color: black; 
}
h4 , h5{
  color:#FF1802
}
 #service , #about , #contact{
   padding: 0px 100px;
 }
  #pic{
   padding: 0px 50px;
 }
 
 .search {
  width: 80%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 2px solid;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #E84C3D;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #CCCDCF ;
  background: #CCCDCF;
  text-align: center;
  color: #E84C3D;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
  outline: none;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 47%;
  transform: translate(-50%, -50%);
}
h3 {
    background:#fff;
    width:620px;
    height:50px;
    margin:5px 120px;
    padding:10px;
    border:1px solid gray;
  
  }
  .container .buttons{
    margin-top: 50px
  }
  .name  
  {
    color: #e0e0e0;
  }
  .catg
  {
    padding:20px
  }
  .send 
  {
    background-color:#B5A9A1;
    color: white;
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
 .mystore {
  margin:auto;
  padding-top: 50px;
 }
 .create {
  padding: 20px;
 }
 .mystore hr {
  margin-top: 80px;
 }
  </style>
  </head>

  <body style="background-color:#f3f3f3">

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">YOURTOUCH</a>
        <div class="name"> <?php echo $name ?> </div>
        <a class="nav-link h" href="shop.php"><i class="fas fa-shopping-cart" style="font-size:24px; color:white;"></i></a>
        <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="Search...">
            <button type="submit" class="searchButton">
              <i class="fa fa-search"></i>
            </button>
          </div>
       </div>
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
    <!-- Page Content -->
    

        <div class="container-fluid text-center">
        <!-- /.col-lg-3 -->
        <div class="row carousel-holder">
        <div class="col-md-12" id="pic">
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
                <img class="d-block img-fluid" src="image/pic2.jpg" alt="Second slide" style="width:1400px;  height:450px;">
              </div>
        <div class="carousel-item">
                <img class="d-block img-fluid" src="image/homhomepage.jpg" alt="Second slide" style="width:1400px;  height:450px;">
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
       


      <div  id="service" class="Container-fluid">
        <div class="row">
          <div class="mystore">
            <h2 class="create"> Create an Online Store </h2>
            <a href="owners.php"><h5> On our website, we allow you to create an online store and display your products on it. </h5></a>
            <hr style="height:20px"> </hr>
          </div>      
    </div>
      <h2 class="text-center catg"> Category Selection </h2><br>
        <div class="row">
        <div class="col-sm-6">
              <div class="card h-70" style="width: 35rem;">
                <a href="catname2.php?catid=1"><img src="image/women.jpg" alt="" width="560px" height="350px">
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
                <a href="catname2.php?catid=4"><img src="image/man.jpg" alt="" width="560px" height="350px">
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
      
      <div class="row">
       <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=2"><img src="image/Fashion-Accessories.jpg" alt="" width="560px" height="350px">
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
              <a href="catname2.php?catid=3"><img src="image/baby.jpg" alt="" width="560px" height="350px">
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
       <div class="row">
       <div class="col-sm-6">
            <div class="card h-70 " style="width: 35rem;">
              <a href="catname2.php?catid=8"><img src="image/home.jpg" alt="" width="560px" height="350px">
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
       <div class="row">
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
              <a href="catname2.php?catid=6"><img src="image/shoes.png" alt="" width="560px" height="350px">
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

  
      <div  id="about" class="Container-fluid">
        <hr style="height:20px"> </hr>
        <div class="row">
          <div class="col-md-7"><br><br>
              <h2> ABOUT </h2><br>
              <h5 style="color:#616161; line-height:1.5; font-weight:normal;"> Welcome to oursite ,if this is your first visit.
              we will present ageneral information about our website and the different services.<br>
              It is asite for selling and buying through electronic store,Is one of the good ideas that have become famous in the
              past period, where the idea of the cost is low compared to shops on the region.</h5><br><br>
              <a href="par.html" class="a"> learn more ! </a><br><br>
          </div>
          <div class="col-md-5">
            <img src="image/web.jpg" alt="" width="500px" height="450px">
          </div>
        </div>
      </div>
      
      
      <div id="contact" class="Container-fluid">
           <hr style="height:20px; "> </hr>
          <h2 class="text-center">CONTACT</h2>
          <div class="row">
          <div class="col-md-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
        <div class="icon-bar">
          <p><i class="fas fa-map-marker-alt"></i>  Amman-jordan</p>
          <p><i class="fas fa-mobile-alt"></i> +962 780000000</p>
          <p><i class="fa fa-envelope"></i> @YourTouch.com </p> 
          </div>
        </div>
          <div class="col-md-7">
          <div class="row">
          <div class="col-md-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-md-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
          <div class="col-md-12 form-group">
          <button class="btn btn-default pull-right send" type="submit">Send</button>
          </div>
          </div> 
          </div>
          </div>
          </div>
      
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Touch 2020</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
