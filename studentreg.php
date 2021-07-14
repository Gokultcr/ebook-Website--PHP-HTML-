<?php include 'dataconnection.php'?>
<?php
$au_fname=$_POST['fname'];
$au_lname=$_POST['lname'];
$au_adha=$_POST['Aadhar'];
$sql="INSERT INTO studentdeatil(studfname,studlname,aadhar)VALUES('$au_fname','$au_lname','$au_adha')";
if($conn->query($sql)==true)
{
	session_start();
	$_SESSION["name"]=$au_fname;
	echo"<script type='text/javascript'>alert(' Details Uploaded successfully! Your request will be proceed in 24hrs');window.location='user_index.html';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
