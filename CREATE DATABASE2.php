<?php
$sname="localhost";
$uname="root";
$pass="";

$conn=mysqli_connect($sname,$uname,$pass);
if(!$conn){
    die("connection aborted".mysqli_connect_errors());

}
echo"connected";

$db="CREATE DATABASE Evening";
if(mysqli_query($conn, $db))
{
    die("Database created");

}else
{
    echo "Error creating database! <br>".mysqli_error($conn);
}
mysqli_close($conn);
?>

