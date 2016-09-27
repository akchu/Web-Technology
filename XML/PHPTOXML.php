
<?php
 
$conn=odbc_connect("empdsn","","");

if (!$conn)
  {exit("Connection Failed: " . $conn);}
$sql="SELECT * FROM dept";
$rs=odbc_exec($conn,$sql);

if (!$rs)
  {exit("Error in SQL");}

$file=fopen("autogenerated.xml","w") or exit("Unable to open file!");

echo fputs($file, "<?xml Version = 1.0 ?>\n ");
echo fputs($file,"<Employee> \n");
while (odbc_fetch_row($rs))
  {
    $vardno=odbc_result($rs,"dno");
    $vardname=odbc_result($rs,"dname");
	$varlocation=odbc_result($rs,"location");
     echo fputs($file,"<deptno> $vardno </deptno> \n");
     echo fputs($file,"<deptname> $vardname </deptname>\n");
	 echo fputs($file,"<location> $varlocation </location>\n");
  }

  echo fputs($file,"</Employee>" );
  odbc_close($conn);
  fclose($file);
?>




