<?php
 include_once('connection.php');
 $tb="SELECT * FROM Evening_table";
 $result=mysqli_query($conn,$tb);

?>

<!DOCTYPE html>
<html lang='en'>

<head>
<title>Fetch data from database</title>
<style>
body{
	background:#deb0fd;
}
table{
	border:15px green;
}

td,tr{
	line-height:20px;
	border-radius:5px;
	background-color:grey;
	color:#fff;
	text-align:center;
	
}
th{
	
	color:blue;	
	font-family:cursive;
	background-color:violet;
	
	
}
th h1{
	
	color:white;
}

</style>
</head>
<body>

<table align="center" border="1px"  style="width:1000px; line-height:30px" >
<tr>
	<th colspan="8"><h1>Registered Members</h1></th>
</tr>
<tr>
<th>ID_Number</th>
<th>First_Name</th>
<th>Second_Name</th>
<th>Email_Address</th>
<th>phone_Number</th>


<th>Next_of_Kin_Full_Names</th>

</tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
	?>
	<tr>
		<td><?php  echo $rows['id'];?></td>
		<td><?php  echo $rows['fname'];?></td>
		<td><?php  echo $rows['sname'];?></td>
		<td><?php  echo $rows['email'];?></td>
		<td><?php  echo $rows['phone'];?></td>
		
		
		<td><?php  echo $rows['next'];?></td>
	</tr>
	<?php
	}

	?>



</table>

</body>
