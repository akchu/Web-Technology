<?php
session_start();
if( isset( $_SESSION['counter'] ) )
{
$_SESSION['counter'] += 1;
}
else
{
$_SESSION['counter'] = 1;
}
$msg =$_SESSION['counter'];
?>
<html>
<head>
<title>Maintining Session</title>
</head>
<body>
<center>
<h2><span style="color:red;font-weight:300;font-color:red;">You Visited This Page:</span><span style="color:black;"><?php echo ( $msg );?> </span></span> Times
<center>
</body>
</html>