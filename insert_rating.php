<?php


$connect = new PDO('mysql:host=localhost;dbname=dbweb2', 'root', '');

if(isset($_POST["index"], $_POST["produit_id"]))
{
 $query = "
 INSERT INTO rating(produit_id, rating) 
 VALUES (:produit_id, :rating)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':produit_id'  => $_POST["produit_id"],
   ':rating'   => $_POST["index"]
  )
 );
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
 }
}


?>
