<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("ebooks",$conn);
?>
<html>
<body>
<form name="" enctype="multipart/form-data" method ="post">
<?php
if(file_exists("uploads/" . $_FILES["file"]["name"])) //. is used to append
{
	echo $_FILES["file"]["name"] . "already exists. ";
}
else
{
	move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);
	
}
?>
<?php
if(isset($_POST['submit']))
{
	$p_img=''; //dummy image
	$p_img=$_FILES["file"]["name"];
	session_start();
	$au_nam=$_SESSION['name'];
	echo "$au_nam";
	$query="UPDATE add_author SET a_img='$p_img 'WHERE a_nam='$au_nam'";
	$ql=mysql_query($query);
	if($ql==1)
	{
		echo "<script type='text/javascript'>alert('Uploaded Successfully!');window.location='adm_authors.html';</script>";
		
				}
else
{
	echo "fail".mysql_error();
	
}
}
?>
<a href="<?php echo "uploads/" . $_FILES["file"]["name"]; ?>" target="_blank"><?php echo  " $au_nam";?></a>
</form>
</body>
</html>


