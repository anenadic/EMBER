<?php
	if(!isset($act)) $act = 'results';
	$go = false;
	include ("connect.inc");
	$result = mysql_query("select t2.user_name as Name from tblember_course t1, tblember_user t2 where t1.course_id = $coursenum AND t1.course_id = t2.course_id") or die (mysql_error());
	$courseid = sprintf("EMBER%04d", $coursenum);
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
			$names = $names."<tr><td>$fname $lname ($name)</td><td>$initial out of $nrquestions ($initialdate)</td><td>$finalresult</td></tr>";
		}
		mysql_free_result($result2);
	}
	mysql_free_result($result);
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
		$usernames = $usernames."<tr><td>$name</td><td>$fname</td><td>$lname</td><td>$background&nbsp;</td><td>$qualifications&nbsp;</td><td>$currentlevel&nbsp;</td></tr>";
	}
	mysql_free_result($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: <?= $courseid ?> results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript" src="scripts.js"></script>
<script language="JavaScript" type="text/JavaScript">
if(getCookie('username') != 'coordinator') document.location.href = 'login.php';
</script>
<!-- Fireworks MX Dreamweaver MX target. Created Wed Oct 16 13:14:05 GMT-2200 2002-->
<script language="JavaScript" type="text/JavaScript">
<!-- 

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
  var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
  if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>
<script language="JavaScript" type="text/JavaScript" src="scripts.js">
</script>
<link href="screen.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg')">
<?PHP
	//include "notepad.php";
	?>
<div style="z-index:1; position:absolute; left:0px; top:0px">
<table width="750" border="0" cellpadding="0" cellspacing="0"><!--DWLayoutTable-->
 <tr>
  <td colspan="2">
	<?PHP
	include "banner.php";
	?></td>
 </tr>

 <tr>
  <td width="215" valign="top" nowrap></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21> 
       <img src="Graphics/feedback_tab.gif" width="314" height=21 border=0 align=bottom></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%"> 
          <p>&nbsp;</p></td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#7B0101"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td></tr>
       </table></td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#7B0101"><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
          <td valign=top> 
           <p><img src="Graphics/course_manage.gif" width="457" height="14"></p>

			<form method="post" id="courseform">
			<input type="hidden" id="hiddenwebpassword" name="hiddenwebpassword" value="<?= $passwd ?>"/>
		   	<input type="hidden" name="hiddendelete" id="hiddendelete" value=""/>
		   	<input type="hidden" name="hiddencourse" id="hiddencourse" value="<?= $coursenum ?>"/>
			<input type="hidden" name="coursenum" id="coursenum" value="<?= $coursenum ?>"/>
			<input type="hidden" id="act" name="act"/>
           <select class="formfield" id="act2">
           <option <?php if(isset($act) && $act == "results") echo " selected "; ?> value="results">Show results</option>
           <option <?php if(isset($act) && $act == "students") echo " selected "; ?> value="students">Show students</option>
           <option <?php if(isset($act) && $act == "feedback") echo " selected "; ?> value="feedback">Save feedback</option>
           <option <?php if(isset($act) && $act == "delcourse") echo " selected "; ?> value="delcourse">Delete course</option>
           </select>
           <input class="formbutton" onclick="document.getElementById('coursenum').value = <?= $coursenum?>;var act2 = document.getElementById('act2').value;document.getElementById('act').value = act2;if(act2 == 'delcourse') { if(!confirm('Are you sure that you want to delete the selected course and all related users and results?')) return false;document.getElementById('hiddendelete').value = 'true';document.getElementById('courseform').action = 'course_login.php'; } else if(act2 == 'feedback') document.getElementById('courseform').action = 'save_feedback.php'; else document.getElementById('courseform').action = 'view_results.php';" type="submit" name="submit" value="Go">
           </form>

           <?php if(isset($act) && $act == "students")
           		 {
           		 	if(!isset($usernames))
           		 		echo "<p>No users for course $courseid.</p>";
            		else
            			echo "<p>Users for course $courseid:</p>
		   <div align=\"center\"><br>
		   <table width=\"100%\" border=1 cellpadding=4 cellspacing=0>
 			<tr bgcolor=\"#990000\"> 
 			<td> 
   			<div align=\"center\"><strong><font color=\"#FFFFFF\">User Name</font></strong></div></td>
  			<td> 
   			<div align=\"center\"><strong><font color=\"#FFFFFF\">First Name</font></strong></div></td>
  			<td>
			<div align=\"center\"><font color=\"#FFFFFF\"><strong>Last Name</strong></font></div></td>
 		    <td> 
            <div align=\"center\"><font color=\"#FFFFFF\"><strong>Background</strong></font></div></td>
            <td> 
            <div align=\"center\"><font color=\"#FFFFFF\"><strong>Qualifications</strong></font></div></td>
            <td> 
            <div align=\"center\"><font color=\"#FFFFFF\"><strong>Current Level</strong></font></div></td>
 			</tr>"; ?>
			
			
			<?= $usernames ?>
		   
		   
		   <?php if(isset($usernames)) echo "</table><br></div>"; ?>

 			<div align="center">
		   <table>
		   <tr>
		   <td>
		   <form method="post" action="save_students.php">
		   	<input type="hidden" name="coursenum" id="coursenum" value="<?= $coursenum ?>"/>
            	<input class="formbutton" type="submit" name="submit" value="Save student overview">
			</form>
			</td>
			</tr>
			</table></div>

           <?php } if(isset($act) && $act == "results")
           		 {
           		 	if(!isset($names))
           		 		echo "<p>No results for course $courseid.</p>";
            		else
            			echo "<p>Results for course $courseid:</p>
		   <div align=\"center\"><br>
		   <table width=\"100%\" border=1 cellpadding=4 cellspacing=0>
 			<tr bgcolor=\"#990000\"> 
  			<td> 
   			<div align=\"center\"><strong><font color=\"#FFFFFF\">Name (user name)</font></strong></div></td>
  			<td>
			<div align=\"center\"><font color=\"#FFFFFF\"><strong>Initial quiz score</strong></font></div></td>
 		    <td> 
            <div align=\"center\"><font color=\"#FFFFFF\"><strong>Final quiz score</strong></font></div></td>
 			</tr>"; ?>
			
			<?= $names ?>

	<?php if(isset($names)) echo "</table><br></div>"; ?>
 			<div align="center">
		   <table>
		   <tr>
		   <td>
		   <form method="post" action="save_results.php">
		   	<input type="hidden" name="coursenum" id="coursenum" value="<?= $coursenum ?>"/>
            	<input class="formbutton" type="submit" name="submit" value="Save results">
			</form>
			</td>
			</tr>
			</table></div>

			<?php } ?>

		   <div align="center">
		   <table>
		   <tr>
		   <td>
		   <?php if(isset($act) && $act == "feedback") { ?>
		   <form method="post" action="save_feedback.php">
		   	<input type="hidden" name="coursenum" id="coursenum" value=""/>
            	<input class="formbutton" onclick="document.getElementById('coursenum').value = <?= $coursenum?>" type="submit" name="submit" value="Save feedback">
			</form>
			</td>
			<td>
			<?php }if(isset($act) && $act == "delusers") { ?>
			<form method="post" action="course_login.php">
		   	<input type="hidden" name="hiddencourse" id="hiddencourse" value="<?= $coursenum ?>"/>
		   	<input type="hidden" id="hiddenwebpassword" name="hiddenwebpassword" value="<?= $passwd ?>"/>
		   	<input type="hidden" name="hiddendelete" id="hiddendelete" value=""/>
            <input class="formbutton" onclick="if(!confirm('Are you sure that you want to delete the selected course and all related users and results?')) return false;document.getElementById('hiddendelete').value = 'true';" type="submit" name="submit" value="Delete course">
			</form>
			<?php } ?>
			</td>
			</tr>
			</table></div>

			<?php echo "<p><a onclick=\"deleteCookie('passwd')\" href=\"intro.php\"><b>Return to the EMBER site</b></a></p>"; ?>
			<?php echo "<p><a onclick=\"deleteCookie('passwd')\" href=\"course_login.php\"><b>Return to the EMBER administration login</b></a></p>"; ?>
           </td>
        </tr>
       </table></td>
      <td valign=top width=1 bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
     <tr> 
      <td valign=top width="1" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="100%" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="1" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
    </table></td>
   <td width=15 valign="top">&nbsp;</td>
  </tr>
 </table></td>
 </tr>
</table>

</div>

<p>&nbsp;</p></body>
</html>

