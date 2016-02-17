<script language="JavaScript" type="text/JavaScript" src="scripts.js"></script>
<script language="JavaScript" type="text/JavaScript">
if(getCookie('username') != 'coordinator') document.location.href = 'login.php';
</script>
<?php
	$go = false;
	if(!isset($hint))
	{
		$passwd = $_POST["hiddenwebpassword"];
		$coursenum = $_POST["hiddencourse"];
		$delete = $_POST["hiddendelete"];
	}
	//$viewusers = $_POST["hiddenviewusers"];
	include ("connect.inc");
	//echo "select * from tblember_course where course_id = '$coursenum' AND course_passwd = '$passwd'";
	$result = mysql_query("select * from tblember_course where deleted < 1 ORDER BY course_id ") or die (mysql_error());
	$courseoptions = "<OPTION value=\"0\">Please select...";
	while($row = mysql_fetch_array($result))
	{
		$course = $row["course_id"];
		if($course > 1) // skip independent
		{
			$courseid = sprintf("EMBER%04d", $course);
			$extra = ($coursenum == $course) ? "SELECTED" : "";
			$courseoptions = $courseoptions."<OPTION $extra value=\"$course\">$courseid";
		}
	}
	if(isset($_POST["hiddenwebpassword"]) || isset($hint))
	{
		if(isset($hint))
		{
			//echo "select * from tblember_course where course_id = '$coursenum'";
			$result = mysql_query("select * from tblember_course where course_id = '$coursenum'") or die (mysql_error());
			$row = mysql_fetch_array($result);
			$coursehint = $row["course_hint"];
			$error = "The hint you provided was: $coursehint";
		}
		else
		{
			$result = mysql_query("select * from tblember_course where course_id = '$coursenum' AND course_passwd = '$passwd'") or die (mysql_error());
			if(mysql_num_rows($result) > 0)
			{
				if(isset($delete) && $delete == 'true')
				{
					// delete course + students on that course
					$result = mysql_query("update tblember_course set deleted = 1 where course_id = '$coursenum'") or die (mysql_error());
					mysql_free_result($result);
					$result = mysql_query("update tblember_user set deleted = 1 where course_id = '$coursenum'") or die (mysql_error());
					mysql_free_result($result);
					/*mysql_free_result($result);
					$result = mysql_query("delete from tblember_course where course_id = '$coursenum'") or die (mysql_error());
					mysql_free_result($result);
					$result = mysql_query("select user_name from tblember_user where course_id = '$coursenum'") or die (mysql_error());
					while($row = mysql_fetch_array($result))
					{
						$username = $row["user_name"];
						$result = mysql_query("delete from tblember_user_results where user_name = '$username'") or die (mysql_error());
					}
					$result = mysql_query("delete from tblember_user where course_id = '$coursenum'") or die (mysql_error());*/

					echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
					echo "<script language=\"JavaScript\">";
					echo "deleteCookie('passwd') ;";
					//echo "setCookie('username', '$user');";
					echo "document.location.href = \"course_login.php?coursenum=$coursenum\";";
					echo "</script>";
				}
				else
				{
					echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
					echo "<script language=\"JavaScript\">";
					echo "setCookie('passwd', '$passwd');";
					echo "document.location.href = \"view_results.php?coursenum=$coursenum\";";
					echo "</script>";
				}
			}
			else
			{
				$courseid = sprintf("EMBER%04d", $coursenum);
				$error = "<font color=\"#990000\" /><b>Incorrect password for $courseid.</b></font>";
			}
		}
		mysql_free_result($result);
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	include "notepad.php";
	?>
<div style="z-index:1; position:absolute; left:0px; top:0px">
<table width="750" border="0" cellpadding="0" cellspacing="0"><!--DWLayoutTable-->
 <tr>
  <td colspan="2">
	<?PHP
	include "banner.php";
	?>
	</td>
 </tr>
 <tr>
  <td width="215" valign="top" nowrap></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/intro_tab.gif" width="314" height=21 border=0 align=bottom></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%"> 
          <p>&nbsp;</p>
         </td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#7B0101"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table>
      </td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p>
      </td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
          <td valign=top> 
           <p><img src="Graphics/login_header.gif" width="457" height="14"></p>
           <?php if(!isset($error))
            echo "<p>Welcome coordinator. You can either <a href=\"intro.php\"><b>proceed to the EMBER site</b></a> or view the results of your students by selecting your course from the menu below.</p>";
            if(isset($error)) echo "<p>$error</p>";
           ?>
      
           <form name="loginform" method="post" action="course_login.php">
           <input type="hidden" id="hiddenwebcourse" name="hiddencourse"/>
        	<input type="hidden" id="hiddenwebpassword" name="hiddenwebpassword" value=""/>
        	<input type="hidden" name="hiddenviewusers" id="hiddenviewusers" value=""/>
        	<input type="hidden" name="hiddendelete" id="hiddendelete" value=""/>
        	<br>
           <table align=center border=0 cellpadding=0 cellspacing=4>
            <tr>
            <td><div align="right"><b>Select course:</b></div></td> 
            <td><select class="formfield" id="webcourse"><?= $courseoptions ?></select></td>
            <td></td></tr><tr>
            <td><div align="right"><b>Course password:</b></div></td> 
            <td><input class="formfield" onkeypress="if(enter(event)) { if(checkCourseLogin()) document.loginform.submit.click(); else return false; }" type="password" id="webpassword" size="20"></td><td><a href="#" type="submit" onclick="var coursename = document.getElementById('webcourse').value;if(coursename == 0) { alert('Please select a course!');return false; }document.location.href ='course_login.php?hint=true&coursenum=' + coursename;">Need a hint?</a></td></tr>
            <tr text-align=center><td>
            </td>
            <td><br>
               	<input class="formbutton" onClick="if(!checkCourseLogin()) return false;submitNewUser('webcourse');submitNewUser('webpassword');document.getElementById('hiddencourse').value = document.getElementById('webcourse').value;" type="submit" name="submit" value="Manage course">
				<!-- <input class="formbutton" onClick="if(!checkCourseLogin()) return false;var coursename = document.getElementById('webcourse').value;if(!confirm('Are you sure that you want to delete the selected course and all related users and results?')) return false;document.getElementById('hiddendelete').value = 'true';submitNewUser('webcourse');submitNewUser('webpassword');if(coursename == 0) { alert('Please select a course!');return false; };document.location.url = 'save_feedback.php&coursenum='+document.getElementById('hiddenwebcourse').value" type="submit" name="submit" value="Delete course"> -->
              </td>
            <td></td></tr>
</table>
</form>
           <br>
</td>
        </tr>
       </table>
      </td>
      <td valign=top width=1 bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p>
      </td>
     </tr>
     <tr> 
      <td valign=top width="1" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p>
      </td>
      <td valign=top width="100%" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p>
      </td>
      <td valign=top width="1" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p>
      </td>
     </tr>
    </table>
   </td>
   <td width=15 valign="top">&nbsp;</td>
  </tr>
 </table></td>
 </tr>
</table>

</div>

<p>&nbsp;</p></body>
</html>

