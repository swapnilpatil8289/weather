<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>ICCSIR App Registration</title>


<link href="./android_application_download/css/default.css" rel="stylesheet" type="text/css"/>
<script src="./android_application_download/js/jquery.js" type="text/javascript"></script>
<script src="./android_application_download/js/validate.min.js" type="text/javascript"></script>
<script src="./android_application_download/js/init.js" type="text/javascript"></script>

<link rel="shortcut icon" href="./android_application_download/logo.ico">


</head>

<body>
<?php
include './android_application_download/header.php';

?>
<br><br><br><br><br><br><br>

<h1 align="center">Registration Form </h1>
<h1 align="center">for downloading AWS android app</h1>

<br><br><br>


<form id="form" class="blocks" method="post">
<?php 

include 'android_application_download/connect.php';

if(isset($_POST['submit']))
{
$fullname=$_POST['fullname'];

$email=$_POST['email'];

$contact=$_POST['contact'];



//$query=mysqli_query($connect,"INSERT INTO app_user_data ('user_name','user_email','contact','date_time_createat') VALUES
   //('$fullname','$email','$contact',now())");
//$result=mysqli_query($connect,"INSERT INTO app_user_data (user_name,user_email,contact,date_time_createat) VALUES ('$fullname','$email','$contact',now(),)");

mysqli_query($connect,"INSERT INTO app_user_data (user_name,user_email,contact,date_time_createat) VALUES ('$fullname', '$email', '$contact', now())");

//$result=mysqli_query($connect,$result_query);
header('location: android_application_download/apk_download.php?fullname='.$fullname);

/*if($result)
{
header('location: apk_download.php');

    }
else
{

}*/
}
?>




<p>
				<label>Full Name:</label>
				<input type="text" class="text" name="fullname" />
			</p>


<p>
				<label>Your e-mail (Optional):</label>
				<input type="text" class="text" name="email" />
			</p>	


<p>
				<label>Contact number:</label>
				<input type="text" class="text" name="contact" />
			</p>


<p>
				<label>&nbsp;</label>
				<input type="submit" class="btn" value="Register" name="submit"/>
			</p>

</form>

<br><br><br><br><br>
<h3>In case of any difficulty please contact:</h3>
<h3>Dr. Rohit Srivastava</h3>
<h3>Mobile No. 09274584406</h3> 
<h3>Phone No. (02834) 224024</h3>
<h3>Email : rohit.srivastava@iccsir.org</h3>

</body>
</html>
