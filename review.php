<?php include 'dataconnection.php'?>
<?php
$bnam=$_POST['bnam'];
$msg=$_POST['msg'];
$unam=$_POST['nam'];

$sql="INSERT INTO review(bnam,b_revie,unam)VALUES('$bnam','$msg','$unam')";
if($conn->query($sql)==true)
{
	
	echo"<script type='text/javascript'>alert('Uploaded successfully!');window.location='user_viewbooks.php';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
