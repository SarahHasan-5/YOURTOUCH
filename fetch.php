<?php
$connect = new PDO('mysql:host=localhost;dbname=dbweb2', 'root', '');
$query = "SELECT * FROM product ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row){
 $rating = count_rating($row['id'], $connect);
 $color = '';
 $output .= '
 <ul style="list-style:none" data-rating="'.$rating.'" title="Average Rating - '.$rating.'">
 ';
 
 for($count=1; $count<=5; $count++)
 {
  if($count <= $rating)
  {
   $color = 'color:#ffcc00;';
  }
  else
  {
   $color = 'color:#ccc;';
  }
  $output .= '<li title="'.$count.'" id="'.$row['id'].'-'.$count.'" data-index="'.$count.'"  data-produit_id="'.$row['id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size:16px;">&#9733;</li>';
 }
 $output .= '
 </ul>

 ';
}
echo $output;

function count_rating($produit_id, $connect)
{
 $output = 0;
 $query = "SELECT AVG(rating) as rating FROM rating WHERE produit_id = '".$produit_id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output = round($row["rating"]);
  }
 }
 return $output;
}


?>
