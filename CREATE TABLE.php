<?php
$sname="localhost";
$uname="root";
$pass="";
$db="Evening";
$conn=mysqli_connect($sname,$uname,$pass,$db);
if(!$conn){
    die("connection aborted".mysqli_connect_errors());

}
echo"connection established";

$tb="CREATE TABLE Evening_table (id int(11)not null PRIMARY KEY AUTO_INCREMENT,fname varchar(30),sname varchar(30), email varchar(128)not null ,phone int(20)not null,next varchar(60)not null)";
if(mysqli_query($conn, $tb))
{
    die("<br>Table created");

}else
{
    echo "<br>Error creating table! <br>".mysqli_error($conn);
}
mysqli_close($conn);
?>

