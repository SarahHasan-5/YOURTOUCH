<?php
session_start();
$pid=$_POST["id"];
$idusers=$_SESSION["iduser"];
$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
	die("not connected".$conn->connect_error);
}else{
	//echo "connected"."<br>";
	$product="<table style='width:100%'><thead>
	<tr> 
	<th>Product</th>
    <th>Description</th>	
	<th>Description</th>
	<th>Unit price</th>
	<th></th>
	</tr></thead>";
	$sql="SELECT * FROM myproduct2 WHERE userid='$idusers'";
	$sql1="SELECT * FROM product";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//echo "data selected";
		while($row=$result->fetch_assoc()){
			 $product=$product."<tr> 
                  <td> <img src=".$row["image"]." style='height:150px; width:130px' alt=''>	</td>			  
				 <td> ".$row["description"]."</td>		  
				 <td> ".$row["color"]."
				  ".$row["size"]."</td>
				 <td> ".$row["price"]."	</td>	
				 <form action='delete.php' method='post' ><td><input type='text' value='".$row["pid"]."' name='id' hidden><input type='submit' value='delete' style='background:#e84c3d; border:none; color:#fff; padding:8px 40px;cursor:pointer; font-size:20px;margin:30px 0px;'></td> </form>
                  </tr>";
				  
			
		}
		$product=$product."</table>";
	}else{
		//echo "no data";
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


	
    <title>Your Touch </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
		<style>
		body {font-family: Arial, Helvetica, sans-serif; 
		background-color:#f5f5dc";
		}
*{
  box-sizing: border-box;
}
.group {
	 float: right;
}

.group #oi{
	background:#e84c3d;	
color:#fff;
padding:8px 40px;
font-size:20px;
margin:30px 0px;
position:static;

}
.group #oi:hover{
	background: #ff1802;
    color: #fff;
	cursor:pointer;
	text-decoration:none;
	
}
table{
	border:1px solid gray;
}
td {
padding:20px;	
}
th{	
	padding:30px;
}
		</style>
</head>
  <body>

 
 <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Your touch</a>
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
		
		<div class="container">
            <div class="row">
		<div class="group"><br><center>
		<a href="check.php" id="oi" style="text-align:right"> Check out</a><br>
		<div class="group h"><br><center>
		<a href="index.php" id="oi" style="text-align:right"> Go Shopping</a>
      		
    </div>
	</div>
        </div>
		
</div>
<br><br><br><br><br>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>