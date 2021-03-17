<?php
session_start();
$pid=$_POST["id"];
$image=$_POST["image"];
$prod=$_POST["productdescription"];
$color=$_POST["color"];
$size=$_POST["size"];
$price=$_POST["price"];
$idusers=$_SESSION["iduser"];

if (empty($_SESSION["iduser"]))
  {
  	$output ="<script > alert('You are not logged in, please log in. ');</script>";
    echo $output;
    echo '<script type="text/javascript"> window.open("index1.php","_self");</script>'; 
  }
include 'connect.php';
$sql="INSERT INTO myproduct2( `userid`, `pid`, `price`, `color`, `size`, `image`, `description`) VALUES('$idusers','$pid','$price','$color','$size','$image','$prod')";
	if ($conn->query($sql) === TRUE) {
//echo "data intersted"."<br>";
echo '<script type="text/javascript"> window.open("shop.php","_self");</script>'; 
}else{
//echo "Error: " . $sql . "<br>" . $conn->error;
}
?>