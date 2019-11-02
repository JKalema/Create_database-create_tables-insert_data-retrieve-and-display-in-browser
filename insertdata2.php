<?php 

if (isset($_POST['submitted'])) {
	include('connection.php');
	$id =$_POST['id'];
	$fname =$_POST['fname'];
	$sname =$_POST['sname'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	
	$next =$_POST['next'];
	$tb = "INSERT INTO Evening_table (id,fname,sname,email,phone,next) VALUES ('$id','$fname','$sname','$email','$phone','$next')";
	

		if (!mysqli_query($conn,$tb)){

			echo "Error inseting New record".mysqli_error($conn);

			
		}//end of our nested if setment
		else{

		$Newrecord="1 record added to the database";
}
}//end of the main if statement

 ?>


<!DOCTYPE html>
<html lang='en'>
<head>







    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="formindex.css">
    <style>
        body {
            background: #fff;
        }
        
        .deo-web {
            visibility: hidden;
        }
        
        .sect {
            z-index: 99999;
        }
        
        .rt li ul li {
            margin-top: 0;
        }
		fieldset input{
		width:80%;
		height:200px;
		align-items:center;
		}
		form{
			width:100%;
			height:fit-content;
			
			
		}
        
        .rt li {
            position: sticky;
            visibility: visible;
            margin-top: 20vh;
        }
        
        .apply img {
            width: 40vw;
        }
    </style>
    <title>registration | Join us</title>
</head>

<body>

    <div class="sect">

        <h5 class="dew" style="position: absolute; height: 20vh; margin-top:0; left:0; width:20vw; background: url(ndejje.png);">
            <p style="align-items: baseline;
        text-align:start;margin-top:90px; height: 50px;
        background: rgba(0,0,0,0.596); color: #fff; font-size: 19px; padding: 10px 0px 0px 0px;">18/2/314/e/222</p>
        </h5>



        <div class="bannet">
            <h1>APPLICANT FILL FORM</h1>
            <h3>made by Jjuuko Deogratious <br>18/2/314/e/222</h3>

        </div>
        <div class="cover" style="font-family: cursive; font-size: 12px; color: rgb(255, 255, 255);">
            <marquee behavior="" direction="left">
                Welcome to ndejje university online registration portal
            </marquee>
            <marquee behavior="" direction="right">

                Please complete the form by filling all fields bellow
            </marquee>
        </div>
        <nav class="deo-web">
            <ul class="rt">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Manage Form Data</a>
                    <ul id="submenu">
                        <li><a href="retrievedata.php">Exam Records</a> </li>
                        <li><a href="Listview.php">Exam Records</a> </li>
                        <li><a href="Listview.php">Edit Records</a></li>
                    </ul>
                </li>
                <li><a href="about-me.html">About Me</a></li>

                <li><a href="Ndejje.html">Ndejje University</a></li>
                <li><a href="aboutUs.html">About us</a></li>

                <li style="width: 250px;"><a href="insertdata2.php">Refresh</a></li>
               
            </ul>
        </nav>





    </div>
    <div class="seko">
        <p><br> Tap to upload your photo. <br>
        </p>
      
    </div>

    <div class="apply">
        <img src="capture.PNG" alt="form-title" sizes="" srcset="">
            

  
   
 

           
<form  method="POST" action="insertdata2.php">
<input type="hidden" name="submitted" value="true"/>
<fieldset>
	<legend> Enter Your Data</legend>
	
		<input type="number" name="id" placeholder="id"><br>
        <input type="text" name="fname" placeholder="Sir Name"><br><br>
        <input type="text" name="sname" placeholder="Second Name"><br><br>     
        <input type="email" name="email" placeholder="email"><br><br>
		<input type="tel" name="phone" placeholder="your phone number"><br><br>     
        <input type="text" name="next" placeholder="Next of kin full names"><br><br>
        
	


</fieldset>
<br>
		
		

        <input style="width:100px;height:40px;border-radius:4px; border:none;float:right;"  type="submit"  onclick="myFunction()" name="" value="Submit"><br><br>
        <input style="width:100px;height:40px;border-radius:4px;border:none;float:left;" type="reset" name="" value="Cancel">
    </form>
    </div>
<script>

function myFunction(){
alert("sorry am still working on my webite");
}
</script>

</form>
<?php

echo $Newrecord;

 ?>
 
</body>
</html>

