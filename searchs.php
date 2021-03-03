<?php
session_start();
include 'connect.php';

if(isset($_POST['btn'])){ //trigger button click

  $search=$_POST['search'];
  $sql = "SELECT * FROM product WHERE productdescription LIKE '%{$search}%' || Name LIKE '%{$search}%' ";
  $query=mysqli_query($conn,$sql);

if (mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_array($query)) {
    echo "<tr><td>".$row['productdescription']."</td><td></td><td>".$row['Name']."</td></tr>";
  }
}else{
    echo "No employee Found<br><br>";
  }

}
?>