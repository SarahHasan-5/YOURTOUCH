<?php
session_start();
$pid=$_POST["id"];
$image=$_POST["image"];
$prod=$_POST["productdescription"];
$color=$_POST["color"];
$size=$_POST["size"];
$price=$_POST["price"];
$idusers=$_SESSION["iduser"];

echo "the id is = ".$_POST["id"]."<br>";
echo "the id is = ".$_POST["image"]."<br>";
echo "the id is = ".$_POST["productdescription"]."<br>";
echo "the id is = ".$_POST["color"]."<br>";
echo "the id is = ".$_POST["size"]."<br>";
echo "the id is = ".$_POST["price"]."<br>";
echo "the id is = ".$_SESSION["iduser"]."<br>";

$conn=new mysqli("localhost","root","","dbweb2");
if($conn->connect_error){
   die ("not connected".$conn->connect_error);
}else{
   echo "<br>"."all good connected";
   $sql2="DELETE FROM myproduct2 WHERE pid=$pid";
   $sql1 ="SELECT * FROM product ";
   
	if($conn->multi_query($sql2)== true){
		echo "data intersted"."<br>";
		 echo '<script type="text/javascript"> window.open("shop.php","_self");</script>'; 
    }else{
		echo "error";
	}
}
?>
<html>

</html>