<?php
$conn = new mysqli('localhost','root','','dbweb2');
if ( $conn->connect_error )
{
	//die('Sorry, it not connect' . $conn->connect_error );
}
else
{
	//echo 'It connect' . '<br>';
}
