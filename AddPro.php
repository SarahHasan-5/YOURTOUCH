<?php
session_start();
$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
die("not connected".$conn->connect_error);
}else{
//echo "connected";
$sql="SELECT * FROM productcat";
$result=$conn->query($sql);
if($result->num_rows>0){
	//echo"selected";
	$select="<select name='productcat'>";
while($row=$result->fetch_assoc()){
		$select=$select."<option value=".$row['id']." > ".$row['catname']."</option>";
	}
	$select=$select."</select>";
}

else{
	//echo "error";
}
$conn->close;
}

$sql1="SELECT * FROM dept";
$result=$conn->query($sql1);
if($result->num_rows>0){
	//echo"selected";
	$select1="<select name='productcat1'>";
while($row=$result->fetch_assoc()){
		$select1=$select1."<option value=".$row['id']." > ".$row['name']."</option>";
	}
	$select1=$select1."</select>";
}

else{
	//echo "error";
}
$conn->close;

$sql="SELECT * FROM store";
$result=$conn->query($sql);
if($result->num_rows>0){
	//echo"selected";
	$select2="<select name='productcat2'>";
while($row=$result->fetch_assoc()){
		$select2=$select2."<option value=".$row['id']." > ".$row['storename']."</option>";
	}
	$select2=$select2."</select>";
}

else{
	//echo "error";
}
$conn->close;
session_start();
$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image



if(isset($_POST["submit"]) && isset($_FILES['file'])) {
    $file_temp = $_FILES['file']['tmp_name'];   
    $info = getimagesize($file_temp);
if($check !== false) {
		//echo "<center>"."<h3>"."The file was downloaded successfully"."</h3>"."<br>";
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "<h3>"."File is not an image."."</h3>";
        $uploadOk = 0;
    }

}

// Check if file already exists
if (file_exists($target_file)) {
    //echo "<h3>"."Sorry, file already exists."."</h3>";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "<h3>"."Sorry, your file is too large."."</h3>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "<h3>"."Sorry, only JPG, JPEG, PNG & GIF files are allowed."."</h3>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "<h3>"."Sorry, your file was not uploaded."."</h3>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$NameFi= "uploads/".basename( $_FILES["fileToUpload"]["name"]);
		
		//echo " the file name = ".$NameFi;
		
		$price=$_POST["price"];
        $color=$_POST["color"];
	    $size=$_POST["size"];
		$length=$_POST["length"];
        $Desc=$_POST["description"];
        $catid=$_POST["productcat"];
		$selid=$_POST["productcat1"];
		$storeid=$_POST["productcat2"];
        $conn=new mysqli("localhost","root","","dbweb2");
         if($conn->connect_error){
	
        die ("not connect" .$conn->connect_error);	
}

else{
	//echo"connect"."<br>";
	$sql="INSERT INTO product (Price, color, size, image, productdescription, Catid, selid,	storeid) VALUES ('$price', '$color', '$size', '$NameFi', '$Desc', '$catid', '$selid','$storeid')";
	
	if($conn->query($sql)===TRUE){	
	header('location: fe.php');
	}else{
	$output ="<script >  alert('Your goods have not been included, please try again ');</script>";
	echo $output;
	}
}

		$conn->close();
    } else {
        //echo "<h3>"."Sorry, there was an error uploading your file."."</h3>"."<br>";
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <title>Add Product</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
    
<style>
.dropbtn {
  background-color: #e84c3d;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #ff1802;}
body{
	background-color:#f3f3f3;
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
		  <li class="nav-item">
              <a class="nav-link" href="logoutstore.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
   <h2 style="color:black; font-size:35px" >Add Product Free:</h2>
  <form action="AddPro.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
	<h3><?echo $select; ?></h3>
	</div>

	<div class="form-group">
	<h3><? echo $select1; ?></h3>
  </div>
  <div class="form-group">
	<h3><? echo $select2; ?></h3>
  </div>

	  
	<div class="form-group">
		  <label> <p style="color:black; font-size:20px" ><b>Price:</b></p></label>
      <input type="text" class="form-control" name="price" required>
    </div>
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b>Color:</b></p></label>
      <input type="text" class="form-control"  name="color" required >
    </div>
	<div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b>Size:</b></p></label>
      <input type="text" class="form-control"  name="size" required >
    </div>
    <div class="form-group">
	 <label> <p style="color:black; font-size:20px" ><b> Select image to Upload:</b></p></label>
	<br>
    <input type="file" name="fileToUpload" id="fileToUpload" >
	</div>
	<div class="form-group">
	  <label> <p style="color:black; font-size:20px" ><b>Product Description:</b></p></label>
      <input type="text" class="form-control" name="description" required>
    </div>
	<div class="form-group"><center>
		<input type="submit" value="Add" name="submit" >
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
