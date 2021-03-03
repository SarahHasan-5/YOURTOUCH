<?php
session_start();
$pid = '';
if(isset($_POST["id"]))
{
	$pid=$_POST["id"];
}
$image = '';
if(isset($_POST["image"]))
{
	$image=$_POST["image"];
}
$prod = '';
if(isset($_POST["productdescription"]))
{
	$prod=$_POST["productdescription"];
}
$color = '';
if(isset($_POST["color"]))
{
	$color=$_POST["color"];
}
$size = '';
if(isset($_POST["size"]))
{
	$size=$_POST["size"];
}
$price = '';
if(isset($_POST["prize"]))
{
	$price=$_POST["price"];
}

	$idusers=$_SESSION["iduser"];

include 'connect.php';
   $sql2="DELETE FROM myproduct2 WHERE pid=$pid";
   $sql1 ="SELECT * FROM product ";
   
	if($conn->multi_query($sql2) === TRUE){
		echo "data Deleted"."<br>";
		echo '<script type="text/javascript"> window.open("shop.php","_self");</script>'; 
    }else{
		echo "error";
	}
?>
<html>

</html>