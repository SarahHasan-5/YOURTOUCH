
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
  <title>check</title>
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<style>
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
  .c{
	  font-weight:bold;
	font-size:20px;
	padding:12px 23px;
  }
  .form-group input[type="submit"]{
	background:#e84c3d;	
border:none;
color:#fff;
padding:8px 40px;
font-size:20px;
margin:30px 0px;
}


.form-group input[type="submit"]:hover{
	background: #ff1802;
    color: #fff;
	cursor:pointer;

	
}
.navbar-brand span{
	color:red;
}
body{
	background-color:#f3f3f3;
}
	</style>
  </head>

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
<form action="de.php" method="post" enctype="multipart/form-data"><br>
<h2>SHIPPING ADDRESS</h2> <br>
	<div class="form-group">
		  <label> <p style="color:black; font-size:20px" ><b> Name:</b></p></label>
		  <input type="text" class="form-control" name="Name" >
    </div>
	<div>
	<label> <p style="color:black; font-size:20px" ><b> Family:</b></p></label>
      <input type="text" class="form-control" name="family" >
	  </div>
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b>Phone:</b></p></label>
      <input type="text" class="form-control"  name="phone" >
    </div>

	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b>Email:</b></p></label>
      <input type="text" class="form-control"  name="email" >
    </div>	
	
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b> Address:</b></p></label>
      <input type="text" class="form-control"  name="Address" >
    </div>
	
	
     <div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b> City:</b></p></label>
	 <input type="text" class="form-control"  name="city" >
	</div>
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b> Country:</b></p></label>
	 <input type="text" class="form-control"  name="country" >
	</div>
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b> Postal Code:</b></p></label>
	 <input type="text" class="form-control"  name="postal" >
	</div>
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b> Payment Method:</b></p></label><br>
	 <input type="radio"   name="city1">Visa</input>
	 <input type="radio"   name="city1">On Delivary</input>
	</div>
	<div class="form-group"><center>

		<input type="submit" value="SAVE" name="submit">
		
    </div>
  </form>
  
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
