<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Evening";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
   die("Connection Failed !".mysqli_error());
}

?>