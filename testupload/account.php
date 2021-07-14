<?php 
mysql_connect("localhost","root","");
mysql_select_db("acc");
?>
<html>
<body>
<form action="#" method="post" >
<input type="text" name="n"/>
<input type="submit" name="sub" value="update"/>
<input type="submit" name="del" value="delete"/>
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['sub']))
{
$n=$_ POST['n'];
$_SESSION['a']=$n;
?>
<form action="#" mothod-"post">
<table>
<tr><td>Amount</td><td><input type="text" name="amount"/></td></tr>
<tr><td><input type="submit" name="go" value="go"/></td></tr></table></form>
<?php
}
if(isset($_POST['go']))
{
$amount=$_POST['amount'];
$n=$_SESSION['a'];
mysql_query("update account set `amount`='$amount' where ` no`='$n' ");
$query=mysql_query("select *from account where ` no` ='$n' ");
echo "<table><tr><th>account
number</th><th>name</th><th>amount</th></tr>";
while($row=mysql_fetch_array($query))
{
$a=$row['no'];
$b=$row['name'];
$c=$row['amount'];
echo "<tr><td>$a</td><td>$b</td><td>$c</td></tr>";
}
}
if(isset($_POST['del']))
{
$n=$_POST['n'];
mysql_query("delete from account where `no`='$n' ");
$query=mysql_query("select * from account");
echo "<table><tr><th>account number</th><th>name</th><th>amount</th></th></tr>";
while($row=mysql_fetch_array($query))
{
$a=$row['no'];
$b=$row['name'];
$c=$row['amount'];
echo "<tr><td>$a</td><td>$b</td><td>$c</td></tr>";
}
}
?>

