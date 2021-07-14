<?php include 'dataconnection.php'?>
<?php
$b_id=$_POST['b_id'];
$b_name=$_POST['b_nam'];
$rate=$_POST['rating'];

$sql="INSERT INTO rate(b_id,b_name,b_rate)VALUES('$b_id','$b_name','$rate')";
if($conn->query($sql)==true)
{
	
	echo"<script type='text/javascript'>alert('rated successfully!');window.location='user_viewbooks.php';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
