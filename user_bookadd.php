<?php include 'dataconnection.php'?>
<?php
$b_name=$_POST['b_name'];
$b_wname=$_POST['b_aname'];
$b_cate=$_POST['b_cate'];
$b_pname=$_POST['b_publi'];
$sql="INSERT INTO user_add_book(a_bname,a_author,a_cate,a_pub)VALUES('$b_name','$b_wname','$b_cate','$b_pname')";
if($conn->query($sql)==true)
{
session_start();
	$_SESSION["book_name"]=$b_name;
	echo"<script type='text/javascript'>alert('Uploaded successfully!');window.location='user_book_img.html';</script>";
}
else
{
	echo "please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
