<?php
include ("connect.inc");
$name = "results-EMBER00$coursenum";
header("Pragma: cache");
header("Content-Type: text/comma-separated-values");
header("Content-Disposition: attachment; filename=".urlencode($name).".csv");

	$result = mysql_query("select t2.user_name as Name from tblember_course t1, tblember_user t2 where t1.course_id = '$coursenum' AND t1.course_id = t2.course_id") or die (mysql_error());
	while($row = mysql_fetch_array($result))
	{
		$name = $row["Name"];
		$result2 = mysql_query("select t1.user_initial_datetimestamp as initial_datetimestamp, t1.user_final_datetimestamp as final_datetimestamp, t2.user_firstname as FName, t2.user_lastname as LName, t1.user_initial_score as initial_score, t1.user_final_score as final_score, t1.user_nr_questions as nrquestions from tblember_user_results t1, tblember_user t2 where t2.user_name = '$name' AND t1.user_name = t2.user_name") or die (mysql_error());
		while($row2 = mysql_fetch_array($result2))
		{
			$fname = $row2["FName"];
			$lname = $row2["LName"];
			$initial = $row2["initial_score"];
			$initialdate = substr($row2["initial_datetimestamp"], 0, 10);
			$final = $row2["final_score"];
			$finaldate = substr($row2["final_datetimestamp"], 0, 10);
			$nrquestions = $row2["nrquestions"];
			if($final == '')
				$finalresult = "not yet taken";
			else
				$finalresult = "$final out of $nrquestions ($finaldate)";
			print("$fname $lname ($name), $initial out of $nrquestions ($initialdate), $finalresult\n");	
			$names = $names."<tr><td>$fname $lname ($name)</td><td>$initial out of $nrquestions ($initialdate)</td><td>$finalresult</td></tr>";
		}
		mysql_free_result($result2);
	}
	mysql_free_result($result);
?>

