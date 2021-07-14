<?php include 'dataconnection.php'?>
<?php
$au_name=$_POST['name'];
$au_penname=$_POST['pname'];
$au_dob=$_POST['udob'];
$au_gender=$_POST['gender'];
$au_award=$_POST['uaward'];
$au_book1=$_POST['ubook1'];
$au_book2=$_POST['ubook2'];
$au_book3=$_POST['ubook3'];

$sql="INSERT INTO add_author(a_nam,a_pnam,a_dob,a_gender,a_award,a_book1,a_book2,a_book3)VALUES('$au_name','$au_penname','$au_dob','$au_gender','$au_award','$au_book1','$au_book2','$au_book1')";
if($conn->query($sql)==true)
{
	session_start();
	$_SESSION["name"]=$au_name;
	echo"<script type='text/javascript'>alert('Uploaded successfully!');window.location='adm_author_imageupload.html';</script>";
}
else
{
	echo"please enter all details".$sql."<br>".$conn->error;
}
$conn->close();
?>
