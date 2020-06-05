<?php
$store=$_POST["NameStore"];
	    $desc=$_POST["DescriptionStore"];
		$phone=$_POST["phone"];
        $name=$_POST["name"];
		$catid=$_POST["productcat"];
        $conn=new mysqli("localhost","root","","dbweb2");
         if($conn->connect_error){
	
        die ("not connect" .$conn->connect_error);	
}

else{
	echo"connect"."<br>";
}
$conn->close();
$target_file = "upload/" . basename($_FILES["fileToUploa"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUploa"]["tmp_name"]);
    if($check !== false) {
		echo "The file was downloaded successfully"."<br>";
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUploa"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUploa"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUploa"]["name"]). " has been uploaded.";
		$NameFi= "upload/".basename( $_FILES["fileToUploa"]["name"]);
		
		echo " the file name = ".$NameFi;
		
		
$sql="INSERT INTO store(storename, storedescription, phone, name, piclnk, catid) VALUES('$store', '$desc', '$phone', '$name', '$NameFi', '$catid')";
	
	if($conn->query($sql)===TRUE){
		
	echo "Data is inserted into the database"."<br>";	
	
	}else{
	echo "not insertead"."<br>";}
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
.add {
	border:2px solid gray;
	width:500px;
	height:300px;
	text-align:center;
	font-weight:bold;
	margin:40px 0px 170px 0px ;
	
}
.add p{
	border:4px solid gray;
	padding:20px;
	margin:20px;
	background-color:gray;
	}
	h3{
		text-decoration: underline;
	}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <title>Add Product</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#f3f3f3">

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
            <a class="nav-link" href="index.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
  <center>
  <div class="add">
  
  <p>
  YOUR STORE HAS BEEN SUCCESSFULLY ADDED </p><br><br><br><br><br>
  <h3>
  <a href="AddPro.php"target="_top" >TO ADD YOUR STORE</a></h3>
  </div>
   </div>
  
  
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
