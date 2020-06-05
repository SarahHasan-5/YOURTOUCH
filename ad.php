<?php
session_start();
$pid=$_POST["id"];
$priceP=$_POST["price"];
$colorP=$_POST["color"];
$sizeP=$_POST["size"];
$descP=$_POST["productdescription"];
$imageP=$_POST["image"];
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
$sql="INSERT INTO myproduct2 (userid,pid,price,color,size,image,description) VALUES('$idusers','$pid','$priceP','$colorP','$sizeP','$imageP','$descP')";
if($conn->multi_query($sql)== true){
echo "data intersted"."<br>";
echo '<script type="text/javascript"> window.open("shop.php","_self");</script>'; 
}else{
echo "error";
}
}
?>
<html>

</html>