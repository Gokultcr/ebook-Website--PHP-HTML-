<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("ebooks",$conn);
?>
<html>
<body>
<form name="" enctype="multipart/form-data" method ="post">
<?php
 
 $targetfolder = "book_uploads/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
 
if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
 {
 
 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 $p_img=''; //dummy image
	$p_img=$_FILES["file"]["name"];
	session_start();
	$bu_nam=$_SESSION['book_name'];
	echo "$bu_nam";
	$query="UPDATE add_book SET book_img='$p_img' WHERE a_bname='$bu_nam'";
	$ql=mysql_query($query);
	if($ql==1)
	{
		echo "<script type='text/javascript'>alert('Uploaded Successfully!');window.location='adminbookimageadd.html';</script>";
		
				}
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>

<a href="<?php echo "testupload/" . $_FILES["file"]["name"]; ?>" target="_blank"><?php echo  "$bu_nam";?></a>
</form>
</body>
</html>


