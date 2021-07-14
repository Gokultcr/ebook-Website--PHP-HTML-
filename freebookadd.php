<?php include 'dataconnection.php'?>
<?php
$us_bname=$_POST['b_name'];
$us_wname=$_POST['b_aname'];
$us_cate=$_POST['b_cate'];
$us_pub=$_POST['b_publi'];
$sql="INSERT INTO add_freebook(b_name,b_aname,b_cate,b_publi)VALUES('$us_bname','$us_wname','$us_cate','$us_pub')";
if($conn->query($sql)==true)
{
	session_start();
	$_SESSION["book_name"]=$us_bname;
	echo"<script type='text/javascript'>alert('Uploaded successfully!');window.location='admin_freebook_imageadd.html';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
