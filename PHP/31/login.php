<?php
$user=$_POST['username'];
$pass=$_POST['password'];

if (isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	$var=md5($pass);
	if (($user==$_COOKIE['username']) && ($_COOKIE['password']==$var))
	{
		echo 'Welcome back ' . $_COOKIE['username'];
	}
	else
	{
		header('Location: index.html');
	}
}
else
{
	header('Location: index.html');
}
?>