<?php
session_start();
echo "<br>"."<br>"."<br>"."<br>";
$target_file = "upload/" . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
		
	    echo "<center>"."<h3>"."The file was downloaded successfully"."</h3>"."<br>";	
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		echo "<br>"."<br>";
        echo "<h3>"."File is not an image."."</h3>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
	echo "<br>";
    echo "<h3>"."Sorry, file already exists."."</h3>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
		echo "<br>";
    echo "<h3>"."Sorry, only JPG, JPEG, PNG & GIF files are allowed."."</h3>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
		echo "<br>";
    echo "<h3>"."Sorry, your file was not uploaded."."</h3>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$NameFi= "upload/".basename( $_FILES["fileToUpload"]["name"]);
		
		//echo " the file name = ".$NameFi;
		
		$store=$_POST["NameStore"];
	    $desc=$_POST["DescriptionStore"];
		$email=$_POST["email"];
        $name=$_POST["name"];
		$catid=$_POST["productcat3"];
        $conn=new mysqli("localhost","root","","dbweb2");
         if($conn->connect_error){
	
        die ("not connect" .$conn->connect_error);	
}

else{
	//echo "connect"."<br>";
	$sql="INSERT INTO store (storename, storedescription, Email, name, piclnk, catid) VALUES('$store', '$desc', '$email', '$name', '$NameFi', '$catid')";
	echo '<script type="text/javascript"> window.open("Addstore.php","_self");</script>';
	if($conn->multi_query($sql)== true){
			echo "<br>";
	echo "<center>"."<h3>"."Data is inserted into the database"."</h3>"."<br>";	
	
	}else{
			echo "<br>";
	echo "<h3>"."not insertead"."<br>"."</h3>";
	}
}

		$conn->close();
    } else {	echo "<br>";
        echo "<h3>"."Sorry, there was an error uploading your file."."</h3>"."<br>";
    }
}
?>
  
<!DOCTYPE html>
<html lang="en">

<head>
<style>

	h3{
		text-decoration: nonunderline;
			text-align:center;

	}
	h2{
	   text-decoration: underline;
	   	text-align:center;


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
  <title>Add store</title>

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
      <a class="navbar-brand" href="#">YourTouch</a>
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
  <html>
  <head>
  <title>store</title>
  </head>
  <body><br><br><br><br><br><br>
 <h2><a href="AddPro.php">Add your advertising</a></h2>
  <br><br><br><br><br><br><br><br><br>
  
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