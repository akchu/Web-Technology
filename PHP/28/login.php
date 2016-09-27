<html>
<style>
<h4>{background:red}
</style>
</head>
<body>
<?php
$user='Akshay';
$pass='12345';
if(isset($_POST['username'])&&isset($_POST['password']))
{
  if(($_POST['username']==$user)&&($_POST['password']==$pass))
  {
	echo "<center><h1>WELCOME $_POST[username]</h1></center>";
  }
	else
	{
       echo "<h4> USERNAME?PASS INVALID </h4>";
	}
}
else
{
echo "<h4> Username and Pass Needed </h4>";
}
?>
</body>
</html>
