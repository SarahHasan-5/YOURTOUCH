<?php
session_start();
$catId=$_GET["catid"];
$item_Id=$_POST["id"];
$stoId=$_GET["storeid"];
$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
	die("not connect".$conn->connect_error);
}else{
	echo "connect";
	echo "<br>";
	$sql="SELECT * FROM store WHERE catid='$catId'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		echo "data selected";
		$product="";
		while( $row=$result->fetch_assoc()){
			$product=$product."
			<div class='col-lg-4 col-md-6 mb-4'>
			<form action='product.php?storeid='$item_Id'' method='post'>
			
              <div class='card h-100'>
                <img src='".$row["piclnk"]."' alt='' style='width:395px; height:300px;'>
                <div class='card-body'>
                  <h4 class='card-title'>
                    ".$row["storename"]."
                  </h4> 
                  <p class='card-text'>".$row["storedescription"]." </p>
				  <h5>".$row["Email"]."</h5>
                </div>
				<div>
				<input type='text' name='id' value='".$row["id"]."' hidden >
                <input type='submit' value='View'  class='btn btn-success'  >
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
			 </form>
            </div>";
		}
		
	}else{
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
	 <script src="js/jquery.min.js"></script>
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
	
    <title>YOURTOUCH </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<style>
a:hover{
	text-decoration:none;
	color:black;
}
a{
color:gray;	
}
#d{
	 padding: 0px 50px;
 }
 .nav-link dropdown-toggle:hover .dropdown-menu {
   display: block;
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
{color: #f2b600}
</style>
</head>
  <body style="background-color:#f3f3f3;">
 
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
              <a class="nav-link" href="login.php"><i class="fas fa-user"></i> SIGN UP</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	

	   
	      <div class="container-fluid text-center" id="d">
          <div class="row">
           <?
           echo $product;
           ?> 
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
	<script src="rate.js"></script>
</body>
</html>
<script>
$(document).ready(function(){
 
 load_produit_data();
 
 function load_produit_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#produit_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var produit_id = $(this).data('produit_id');
  remove_background(produit_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+produit_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(produit_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+produit_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var produit_id = $(this).data('produit_id');
  var rating = $(this).data("rating");
  remove_background(produit_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+produit_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var produit_id = $(this).data('produit_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, produit_id:produit_id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_produit_data();
    // alert("You have rate "+index +" out of 5");
    }
    else
    {
    // alert("There is some problem in System");
    }
   }
  });
  
 });

});
</script>