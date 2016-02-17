<?php
include ("connect.inc");

function calc1()
{
	for($i = 0;$i < 5;$i++)
	{
		$test = chr(65 + $i);
		$result = mysql_query("select * FROM tblember_questionaire where answers LIKE '1$test%'") or die (mysql_error());
		echo mysql_num_rows($result);
		if($i < 4) echo ", ";
	}
	print "<br>";
}

function calc($nr)
{
	for($i = 0;$i <5;$i++)
	{
		$test = chr(65 + $i);
		$result = mysql_query("select * FROM tblember_questionaire where answers LIKE '% $nr$test %'") or die (mysql_error());
		echo mysql_num_rows($result);
		if($i < 4) echo ", ";
	}
	print "<br>";
}

calc1();
for($j = 2;$j < 22;$j++)
	calc($j);
?>
