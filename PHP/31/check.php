<?php
$user=$_POST['username'];
$pass=$_POST['password'];


if(isset($user) && isset($pass))
{
	if($user=="Akshay" && $pass=="12345")
	{
		if(isset($_POST['rememberme']))
		{
			setcookie('username',$user);
			setcookie('password', md5($pass));
			echo "<h1>Cookie Created!!</h1>";
		}
		else
		{
			if (isset($_COOKIE['username']) && isset($_COOKIE['password']))
			{
				$var=md5($pass);
				if (($user==$_COOKIE['username']) && ($_COOKIE['password']==$var))
				{
					echo 'Welcome back ' . $_COOKIE['username'];
				}
				else
				{
					header('Location: login.html');
				}
			}
			else
			{
				header('Location: login.html');
			}
		}
	}
	else
	{
		echo "<h1>Error:Invalid User Name Or Password!!</h1>";
	}
}
else
{
	echo "<h1>Error:Please Enter User Name Or Password!!</h1>";
}
?>
