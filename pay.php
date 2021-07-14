<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'dataconnection.php'?>
<?php
	session_start();
	$unam=$_SESSION["uname"];
$book_nam=$_POST['book_nam'];
$pay_typ=$_POST['pay_type'];
$card_no=$_POST['card_no'];
$bank_nam=$_POST['b_nam'];
$amount=$_POST['amt'];
$sql="INSERT INTO payment(book_nam,pay_typ,card_no,bank_nam,amount,unam)VALUES('$book_nam','$pay_typ','$card_no','$bank_nam','$amount','$unam')";
if($conn->query($sql)==true)
{

	$_SESSION['book_nam']=$book_nam;
	
	echo"<script type='text/javascript'>alert('Payment successfully!');window.location='donload.php';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>


