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
echo "<br>"."all good connected"."<br>";
$sql="INSERT INTO myproduct2( `userid`, `pid`, `price`, `color`, `size`, `image`, `description`) VALUES('$idusers','$pid','$price','$color','$size','$image','$prod')";
	if ($conn->query($sql) === TRUE) {
echo "data intersted"."<br>";
echo '<script type="text/javascript"> window.open("shop.php","_self");</script>'; 
}else{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<html>

</html>