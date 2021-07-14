<?php include 'dataconnection.php'?>
<?php
$us_fname=$_POST['fname'];
$us_lname=$_POST['lname'];
$us_Email=$_POST['umail'];
$us_dob=$_POST['udob'];
$us_gender=$_POST['gender'];
$us_uname=$_POST['uname'];
$us_pass=$_POST['upass'];
$sql="INSERT INTO user_reg(u_fname,u_lname,u_mail,u_dob,u_gender,u_uname,u_password)VALUES('$us_fname','$us_lname','$us_Email','$us_dob','$us_gender','$us_uname','$us_pass')";
if($conn->query($sql)==true)
{
	echo"<script type='text/javascript'>alert('registered succesfully!');window.location='index.html';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
