<?php
session_start();
$idusers=$_SESSION["iduser"];
echo $_SESSION["iduser"];
$id= $_POST["id"];
$color= $_POST["color"];
$price= $_POST["price"];
$size= $_POST["size"];
$conn=new mysqli("localhost","root","","dbweb2");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{ 
echo "connect"."<br>";
$sql="SELECT * FROM product WHERE storeid=$idusers";
$result=$conn->query($sql);
if($result->num_rows>0){
	$product="<table style='width:100%'><thead>
	<tr> 
	<th>Product</th>
    <th>  Description </th>	
	<th>Unit price</th>
	<th>color</th>
	<th> size</th>
	<th>    </th>
	</tr></thead>";
while($row=$result->fetch_assoc()){
		$product=$product."
		         <form action='update.php' method='post'><tr> 
                 <td> <img src=".$row["image"]." style='height:150px; width:130px' alt=''></td>			  
				 <td> ".$row["productdescription"]."</td>		  
				 <td> ".$row["price"]."	<input type='text'  name='price' placeholder= 'price' style='width:110px; height:30px;'></td>	
				 <td> ".$row["color"]."<input type='text'  name='color' placeholder= 'color' style='width:110px; height:30px;'></td>
				 <td>".$row["size"]."<input type='text' name='size' placeholder= 'size' style='width:110px; height:30px;'></td>
				 <td><input type='text' value='".$row["id"]."' name='id' hidden>
				 <input type='submit' value='Update' style='background:#e84c3d; border:none; color:#fff; padding:8px 40px; cursor:pointer; font-size:20px; margin:30px 0px;'></td> 
                  </tr></form>";	
	}
	$product=$product."</table>";
}

else{
	echo "error";
}
$sql ="UPDATE `product` SET `price`='$price',`color`='$color',`size`='$size' WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " ."<br>". $conn->error;
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
</style>
<html>
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
		  <li class="nav-item">
              <a class="nav-link" href="owners.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
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
  <br><br><br><br><br><br><br>
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