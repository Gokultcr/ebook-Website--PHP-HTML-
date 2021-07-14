<?php include 'dataconnection.php'?>
<?php
$a_name=$_POST['a_name'];
$a_wname=$_POST['a_wname'];
$a_category=$_POST['a_category'];
$a_publisher=$_POST['a_publisher'];

$sql="INSERT INTO add_lat_book(a_bname,a_author,a_cate,a_pub)VALUES('$a_name','$a_wname','$a_category','$a_publisher')";
if($conn->query($sql)==true)
{
	 session_start();
	$_SESSION["book_name"]=$a_name;
	echo"<script type='text/javascript'>alert('Uploaded successfully!');window.location='latest_book_img.html';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
