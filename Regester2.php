<?php
session_start();
$name     = '';
$phone    = '';
$email    = '';
$password = '';
if(isset($_POST['Name']))
{ 
  $name   = $_POST['Name'];
}
if(isset($_POST["Phone"]))
{ 
  $phone  = $_POST["Phone"];
}
if(isset($_POST["Email"]))
{ 
  $email  = $_POST["Email"];
}
if(isset($_POST["Password"]))
{ 
  $password = $_POST["Password"];
}
require 'connect.php'; 
$sql = "INSERT INTO infouser(username,phone,email,password) VALUES('$name','$phone','$email','$password')";
$result = mysqli_query($conn, $sql);
    
    if (!empty ($_POST["Email"] ))
    {
      if($result){
          echo "<script>alert('User created for ". $name . "  Successfully');</script>"; 
          echo '<script> window.open("index1.php","_self");</script>'; 
    }
  }
    
?>