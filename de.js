<?php
        $country=$_POST["country"];
		$city=$_POST["city"];
		$add=$_POST["Address"];
	    $email=$_POST["email"];
		$phone=$_POST["phone"];
		$family=$_POST["family"];
        $name=$_POST["Name"];
		$postal=$_POST["postal"];
		$pay=$_POST["city1"];
$conn=new mysqli("localhost","root","11111111","dbweb2");
if($conn->connect_error){
die("not connected".$conn->connect_error);
}else{
echo "connected";
       
	$sql="INSERT INTO information (Family, Phone, Email, Address, City, Country,Postal Code,Name) VALUES('$family', '$phone', '$email', '$add', '$city', '$country','$postal','$name')";
	if($conn->multi_query($sql)== true){
	}else{
		$output ="<script > alert('confirm payment and shipping:');</script>";
		echo $output;
	}
}
?>