<?php
session_start();
$idusers=$_SESSION["iduser"];
//echo $_SESSION["iduser"];
$id = '';
if (isset($_POST["id"]))
{
  $id= $_POST["id"];
}
$color = '';
if (isset($_POST["color"]))
{
  $color= $_POST["color"];
}
$price = '';
if (isset($_POST["price"]))
{
  $price= $_POST["price"];
}
$size = '';
if (isset($_POST["size"]))
{
  $size= $_POST["size"];
}

include 'connect.php';
$sql="SELECT * FROM product WHERE storeid=$idusers";
$result=$conn->query($sql);
if($result->num_rows>0){
	$product="<table style='width:100%; text-align:center'><thead>
	<tr> 
	<th>Product</th>
    <th> Description </th>	
	<th> Unit price </th>
	<th> Color </th>
	<th> Size </th>
	<th>    </th>
	</tr></thead>";
while($row=$result->fetch_assoc()){
		$product=$product."
		         <form action='update.php' method='post'><tr> 
                 <td> <img src=".$row["image"]." style='height:150px; width:130px' alt=''></td>			  
				 <td> ".$row["productdescription"]."</td>		  
				 <td> ".$row["price"]."	<input type='text'  name='price' placeholder= 'New Price' style='width:110px; height:30px;'></td>	
				 <td> ".$row["color"]."<input type='text'  name='color' placeholder= 'New Color' style='width:110px; height:30px;'></td>
				 <td>".$row["size"]."<input type='text' name='size' placeholder= 'New Size' style='width:110px; height:30px;'></td>
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
    //echo "Record updated successfully";
} else {
    //echo "Error updating record: " ."<br>". $conn->error;
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
  <title>YOUR TOUCH</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <style>
  body{
	background-color:#f3f3f3;
  margin-top: 51px
}
footer {
  margin-top: 100px
}
table {
  border: 1px solid #bdbdbd ;
  
}
th {
  color: gray;
  font-size: 20px
}
td,th {
  padding: 10px;
}
input[type="text"] {
  border:none;
  text-align: center;
}
</style>
<html>
<body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">YOUR TOUCH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="checkuser.php">OPTIONS</a>
          </li>
		      <li class="nav-item">
              <a class="nav-link" href="logoutstore.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
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