<?php
include ("connect.inc");
$name = "students-EMBER00$coursenum";
header("Pragma: cache");
header("Content-Type: text/comma-separated-values");
header("Content-Disposition: attachment; filename=".urlencode($name).".csv");

	$result = mysql_query("select t2.user_name as UName, t2.user_firstname as FName, t2.user_lastname as LName, t2.user_background as Background, t2.user_qualifications as Qualifications, t2.user_currentlevel as Currentlevel from tblember_course t1, tblember_user t2 where t1.course_id = $coursenum AND t1.course_id = t2.course_id") or die (mysql_error());
	$courseid = sprintf("EMBER%04d", $coursenum);
	while($row = mysql_fetch_array($result))
	{
		$name = $row["UName"];
		$fname = $row["FName"];
		$lname = $row["LName"];
		$background = $row["Background"];
		$qualifications = $row["Qualifications"];
		$currentlevel = $row["Currentlevel"];
		print("$name, $fname, $lname, $background, $qualifications, $currentlevel\n");
	}
	mysql_free_result($result);
?>

