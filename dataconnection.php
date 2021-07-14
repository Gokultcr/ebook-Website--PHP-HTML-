<?php
$servername="localhost";
$username="root";
$password="";
$database="ebooks";
$conn=new MYSQLi("$servername","$username","$password","$database");
if($conn->connect_error){
die("connection failled".$conn->connect_error);
}
?>
