
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

   <title>YOUR TOUCH </title>
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<style>
    body {
      margin-top:39px;
      background-color:#f3f3f3
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
	cursor:pointer	
}
.navbar-brand span{
	color:red;
}
.form-group p:active {
 border-color: #F46924
}
input[type="text"]
{
  margin-bottom: 20px 
}
.form-group p
{
  background-color: #FCFCFC;
  border-radius: 10px;
  width:100%;
  border: 1px solid #e0e0e0;
  padding: 10px;
  font-size: 18px;
  color: #757575;
  margin: 18px 0 25px 0;
}
	</style>
  </head>

<body>

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
            <a class="nav-link" style="color:#2A9A3E; background-color: #F4FCF5; border-radius: 50px; font-size: 13px"><i class="fas fa-lock"></i>  Safe payment</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>






<div class="container">
  <div class="row">
    <div class="col-sm-6">
<form action="deCheck.php" method="post" enctype="multipart/form-data">
    <div class="card h-70" style="width: 35rem; height:20rem; padding:20px">
      <label> <p style="color:black; font-size:20px" > Address </p></label>
    <div class="form-group">
   <input type="text" class="form-control"  name="country" placeholder="Add your Country" required>
  </div>
  <div class="form-group">
      <input type="text" class="form-control"  name="address" placeholder="Add your Address" required>
    </div>
  </div>
  </div>

  <div class="col-sm-6">
    <div class="card h-70" style="width: 35rem; height:20rem; padding:20px">
    <div class="form-group">
   <label> <div style="color:black; font-size:20px" > Payment Method </div></label><br>
   <p><input type="radio" name="VisaOROnDelivary" value="Visa" required> Visa </p>
   <p><input type="radio" name="VisaOROnDelivary" value="On Delivary" required> On Delivary </p>
  </div>
  </div>
  </div>
  </div>
  <div class="form-group"><center>
    <input type="submit" value="Complete the order" name="submit">
  </div>
  </div>
  </form>
  
  <!-- /.container -->

  <!-- Footer -->
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
