<?php include 'dataconnection.php'?>
<?php
$b_name=$_POST['b_name'];
$b_wname=$_POST['b_wname'];
$b_cate=$_POST['b_cate'];
$b_pname=$_POST['b_pname'];
$sql="INSERT INTO add_book(a_bname,a_author,a_cate,a_pub)VALUES('$b_name','$b_wname','$b_cate','$b_pname')";
if($conn->query($sql)==true)
{
	echo"<script type='text/javascript'>alert('registered succesfully!');window.location='adminbookadd.html';</script>";
}
else
{
	echo "please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
