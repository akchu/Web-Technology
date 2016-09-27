<!Doctype HTML>
<html>
<head>
<title>Employee Info</title>
</head>

<body>
<CENTER>
<H1>Select The Department Number.</H1>
<form  action="result.php" method="post">
<select name="xyz">
<?php  sql(); ?>
</select>
<input type="submit" value="Submit">
</form>
</CENTER>
</body>
</html>
<?php
function sql()
{
$con=mysql_connect("localhost","root","")or die("error");
mysql_select_db("employee");
$sql = "SELECT dno FROM pers;";
$result = mysql_query($sql) ;
if($result==FALSE)
{
	die(mysql_error());
}
while($row = mysql_fetch_array($result))
{		
echo "<option value=".$row['dno'].">".$row['dno'];
}
mysql_close($con);
}

?>
