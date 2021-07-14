<?php
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("ebooks",$connection);

$user_name=$_POST['uname'];
$password=$_POST['upass'];
$sql=mysql_query("SELECT * FROM user_reg WHERE u_uname='$user_name' and u_password='$password'",$connection);
$rows=mysql_num_rows($sql);
if($password=='admin')
{
	echo"<script type='text/javascript'>alert('Logined Successfully!');window.location='admin_index.html';</script>";
}
else if($rows==1)
{
	session_start();
	$_SESSION["uname"]=$user_name;
	echo"<script type='text/javascript'>alert('Logined Successfully!');window.location='user_index.html';</script>";
}
else{
	echo"error";
}

?>