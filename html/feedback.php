<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Feedback</title>
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
	?></td>
 </tr>
 <tr>
  <td width="215" valign="top" nowrap></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/feedback_tab.gif" width="314" height=21 border=0 align=bottom></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%"> 
          <p>&nbsp;</p></td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#7B0101"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
          <td valign=top> 
				   <p><img src="Graphics/feedback_header.gif">	
					</p>
  
<?php $go = true;
$user = $HTTP_COOKIE_VARS['username'];
if($user != "coordinator" || isset($coursenum))
{
	include ("connect.inc");
	$result = mysql_query("select * from tblember_course where course_id='$coursenum' AND course_access_code='$uniq'") or die (mysql_error());
	if($user == "coordinator" && !mysql_num_rows($result))
	{
		$error = "<font color=\"#990000\" /><b>Sorry, the entered access code is not correct for course EMBER00$coursenum.</b></font>";
		echo $error;
		mysql_free_result($result);
	}
	else if(isset($f1))
	{
		$qnum = ($user == "coordinator") ? 20 : 12;
		for ($i=1;$i<=$qnum;$i++) {
			$temp = $_GET["f$i"];
			$answers = $answers."$i$temp ";
		}

		$addr = getenv("REMOTE_ADDR");
		if($user == "coordinator")
		{
			$result = mysql_query("select * from tblember_questionaire_tutors where courseid='$coursenum'") or die (mysql_error());
			if(!mysql_num_rows($result))
				mysql_query("insert into tblember_questionaire_tutors VALUES('$coursenum', NOW(), '$addr', '$email', '$answers', '$comments')") or die (mysql_error());
			else
				mysql_query("update tblember_questionaire_tutors set timestamp=NOW(), address = '$addr', email = '$email', answers = '$answers', comments = '$comments' where courseid='$coursenum' ") or die (mysql_error());
		}
		else
		{
			$result = mysql_query("select * from tblember_questionaire where user='$user'") or die (mysql_error());
			if(!mysql_num_rows($result))
				mysql_query("insert into tblember_questionaire VALUES('$user', NOW(), '$addr', '$email', '$answers', '$comments')") or die (mysql_error());
			else
				mysql_query("update tblember_questionaire set timestamp=NOW(), address='$addr', email='$email', answers='$answers', comments='$comments' where user='$user'") or die (mysql_error());
		}
?>
<p>Thank you. Your feedback is much appreciated!</p>
<p align="right"><strong>The EMBER Team</strong></p>
<?php
		$go = false;
	}
}
if($go)
{
?>
<form name="form1" method="get" action="feedback.php">
 <table border="0" cellpadding="7" cellspacing="2">
  <tr> 
   <td width="75%" class="sectionheader">Please 
    tick the appropriate response:</td>
   <td align="center"> 
     <strong>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+</strong></td>
  </tr>

<?php
if($username == 'coordinator')
{
	include ("connect.inc");
	$result = mysql_query("select * from tblember_course where deleted < 1 ORDER BY course_id") or die (mysql_error());
	$courseoptions = "<OPTION value=\"0\">Please select...";
	while($row = mysql_fetch_array($result))
	{
		$course = $row["course_id"];
		$courseid = sprintf("EMBER%04d", $course);
		if($course == 1)
			$courseid = "Independent";
		$extra = ($coursenum == $course) ? "SELECTED" : "";
		$courseoptions = $courseoptions."<OPTION $extra value=\"$course\">$courseid";
	}
	mysql_free_result($result);
?>
  <td width="75%">1. 
    How would you rate the material organisation?</td>
   <td nowrap> <div align="center"> 
     <input name="f1" type="radio"<?php if(isset($f1) && $f1 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f1" type="radio"<?php if(isset($f1) && $f1 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f1" type="radio"<?php if(isset($f1) && $f1 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f1" type="radio"<?php if(isset($f1) && $f1 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f1" type="radio"<?php if(isset($f1) && $f1 == 'e') echo " CHECKED "; ?>value="e">
     </div></td>
  </tr>
  <tr> 
   <td width="75%">2. 
    How would you rate the appearance of this practical?</td>
   <td > <div align="center"> 
     <input name="f2" type="radio"<?php if(isset($f2) && $f2 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f2" type="radio"<?php if(isset($f2) && $f2 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f2" type="radio"<?php if(isset($f2) && $f2 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f2" type="radio"<?php if(isset($f2) && $f2 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f2" type="radio"<?php if(isset($f2) && $f2 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">3. 
    How comprehensible were the background notes?</td>
   <td > <div align="center"> 
     <input name="f3" type="radio"<?php if(isset($f3) && $f3 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f3" type="radio"<?php if(isset($f3) && $f3 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f3" type="radio"<?php if(isset($f3) && $f3 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f3" type="radio"<?php if(isset($f3) && $f3 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f3" type="radio"<?php if(isset($f3) && $f3 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">4. 
    How helpful were the background notes?</td>
   <td > <div align="center"> 
     <input name="f4" type="radio"<?php if(isset($f4) && $f4 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f4" type="radio"<?php if(isset($f4) && $f4 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f4" type="radio"<?php if(isset($f4) && $f4 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f4" type="radio"<?php if(isset($f4) && $f4 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f4" type="radio"<?php if(isset($f4) && $f4 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">5. 
    How easy was it to find the appropriate background notes for each step?</td>
   <td > <div align="center"> 
     <input name="f5" type="radio"<?php if(isset($f5) && $f5 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f5" type="radio"<?php if(isset($f5) && $f5 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f5" type="radio"<?php if(isset($f5) && $f5 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f5" type="radio"<?php if(isset($f5) && $f5 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f5" type="radio"<?php if(isset($f5) && $f5 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">6. 
    When reading background information, how helpful did you find additional 
    graphics?</td>
   <td > <div align="center"> 
     <input name="f6" type="radio"<?php if(isset($f6) && $f6 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f6" type="radio"<?php if(isset($f6) && $f6 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f6" type="radio"<?php if(isset($f6) && $f6 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f6" type="radio"<?php if(isset($f6) && $f6 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f6" type="radio"<?php if(isset($f6) && $f6 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">7. 
    When carrying out an exercise, how helpful did you find additional graphics?</td>
   <td > <div align="center"> 
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">8. 
    How comprehensible did you find the instructions for each chapter?</td>
   <td > <div align="center"> 
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">9. 
    How easy was it to execute each step?</td>
   <td > <div align="center"> 
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">10. 
    How useful were the exercises?</td>
   <td > <div align="center"> 
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">11. 
    How often did you have technical problems (software not available, servers down, dead links, etc.)
    <B>(- constantly to + never)</B>?</td>
   <td > <div align="center"> 
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">12. 
    How useful were the quizzes?</td>
   <td > <div align="center"> 
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">13. 
    How informative was this practical?</td>
   <td > <div align="center"> 
     <input name="f13" type="radio"<?php if(isset($f13) && $f13 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f13" type="radio"<?php if(isset($f13) && $f13 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f13" type="radio"<?php if(isset($f13) && $f13 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f13" type="radio"<?php if(isset($f13) && $f13 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f13" type="radio" <?php if(isset($f13) && $f13 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">14. 
    How sufficient was the breadth of material coverage?</td>
   <td > <div align="center"> 
     <input name="f14" type="radio"<?php if(isset($f14) && $f14 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f14" type="radio"<?php if(isset($f14) && $f14 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f14" type="radio"<?php if(isset($f14) && $f14 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f14" type="radio"<?php if(isset($f14) && $f14 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f14" type="radio"<?php if(isset($f14) && $f14 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">15. 
    How sufficient was the depth of material coverage?</td>
   <td > <div align="center"> 
     <input name="f15" type="radio"<?php if(isset($f15) && $f15 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f15" type="radio"<?php if(isset($f15) && $f15 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f15" type="radio"<?php if(isset($f15) && $f15 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f15" type="radio"<?php if(isset($f15) && $f15 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f15" type="radio"<?php if(isset($f15) && $f15 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">16. 
    How often was reference to material/text outside EMBER (books, papers, etc.) required <B>(- constantly 
    to + never)</B>?</td>
   <td > <div align="center"> 
     <input name="f16" type="radio"<?php if(isset($f16) && $f16 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f16" type="radio"<?php if(isset($f16) && $f16 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f16" type="radio"<?php if(isset($f16) && $f16 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f16" type="radio"<?php if(isset($f16) && $f16 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f16" type="radio"<?php if(isset($f16) && $f16 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">17. 
    How often did the students need to consult you <B>(- constantly to + never)</B>?</td>
   <td > <div align="center"> 
     <input name="f17" type="radio"<?php if(isset($f17) && $f17 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f17" type="radio"<?php if(isset($f17) && $f17 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f17" type="radio"<?php if(isset($f17) && $f17 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f17" type="radio"<?php if(isset($f17) && $f17 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f17" type="radio"<?php if(isset($f17) && $f17 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
<!--   <td width="75%">18. 
    How helpful did you find the accompanying book?</td>
   <td > <div align="center"> 
     <input type="radio" name="18" value="a">
     <input type="radio" name="18" value="b">
     <input type="radio" name="18" value="c">
     <input type="radio" name="18" value="d">
     <input name="18" type="radio" value="e" >
     </div></td>
  </tr>-->
  <tr> 
   <td width="75%">18. 
    How often did you need to consult the EMBER team?</td>
   <td > <div align="center"> 
     <input name="f18" type="radio"<?php if(isset($f18) && $f18 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f18" type="radio"<?php if(isset($f18) && $f18 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f18" type="radio"<?php if(isset($f18) && $f18 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f18" type="radio"<?php if(isset($f18) && $f18 == 'a') echo " CHECKED "; ?>value="d">
     <input name="f18" type="radio"<?php if(isset($f18) && $f18 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">19. 
    How easy was this practical to navigate?</td>
   <td > <div align="center"> 
     <input name="f19" type="radio"<?php if(isset($f19) && $f19 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f19" type="radio"<?php if(isset($f19) && $f19 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f19" type="radio"<?php if(isset($f19) && $f19 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f19" type="radio"<?php if(isset($f19) && $f19 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f19" type="radio"<?php if(isset($f19) && $f19 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%"><p>20. 
     Overall, did you find this short course in Bioinformatics useful?</p></td>
   <td > <p align="center"> 
     <input name="f20" type="radio"<?php if(isset($f20) && $f20 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f20" type="radio"<?php if(isset($f20) && $f20 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f20" type="radio"<?php if(isset($f20) && $f20 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f20" type="radio"<?php if(isset($f20) && $f20 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f20" type="radio"<?php if(isset($f20) && $f20 == 'e') echo " CHECKED "; ?>value="e" >
     </p></td>
  </tr>
              <tr text-align=center>
              <td><div align="right" >Choose the course:</div></td>
              <td><select class="formfield" id="webcourse" name="coursenum"><?= $courseoptions ?>
              </tr>
              <tr><td><div align="right" >Access code for course:</div></td>
              <td><input class="formfield" type="password" id="webunique" name="uniq" size="30"></td>
              </select></td>
            </tr>

<?php } else { ?>
  <tr> 
   <td width="75%">1. 
    How would you rate the material organisation?</td>
   <td nowrap> <div align="center"> 
     <input name="f1" type="radio" value="a">
     <input name="f1" type="radio" value="b">
     <input name="f1" type="radio" value="c">
     <input name="f1" type="radio" value="d">
     <input name="f1" type="radio" value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">2. 
    How would you rate the appearance of this practical?</td>
   <td > <div align="center"> 
     <input name="f2" type="radio" value="a">
     <input name="f2" type="radio" value="b">
     <input name="f2" type="radio" value="c">
     <input name="f2" type="radio" value="d">
     <input name="f2" type="radio" value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">3. 
    How helpful were the background notes?</td>
   <td > <div align="center"> 
     <input name="f3" type="radio" value="a">
     <input name="f3" type="radio" value="b">
     <input name="f3" type="radio" value="c">
     <input name="f3" type="radio" value="d">
     <input name="f3" type="radio" value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">4. 
    How helpful did you find additional graphics?</td>
   <td > <div align="center"> 
     <input name="f4" type="radio" value="a">
     <input name="f4" type="radio" value="b">
     <input name="f4" type="radio" value="c">
     <input name="f4" type="radio" value="d">
     <input name="f4" type="radio" value="e" >
     </div></td>
  </tr>
<tr> 
   <td width="75%">5. 
    How comprehensible did you find the instructions for each chapter?</td>
   <td > <div align="center"> 
     <input name="f5" type="radio" value="a">
     <input name="f5" type="radio" value="b">
     <input name="f5" type="radio" value="c">
     <input name="f5" type="radio" value="d">
     <input name="f5" type="radio" value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">6. How easy was it to execute each step?</td>
   <td > <div align="center"> 
     <input name="f6" type="radio" value="a">
     <input name="f6" type="radio" value="b">
     <input name="f6" type="radio" value="c">
     <input name="f6" type="radio" value="d">
     <input name="f6" type="radio" value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">7. 
    How often did you have technical problems (software not available, servers down, dead links, etc.) 
    <B>(- constantly to + never)</B>?</td>
   <td > <div align="center"> 
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f7" type="radio"<?php if(isset($f7) && $f7 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">8. 
    How useful were the quizzes?</td>
   <td > <div align="center"> 
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f8" type="radio"<?php if(isset($f8) && $f8 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">9. 
    How often was reference to material/text outside EMBER (books, papers, etc.)required<B>(- constantly 
    to + never)</B>?</td>
   <td > <div align="center"> 
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f9" type="radio"<?php if(isset($f9) && $f9 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%">10. 
    How often did you consult a demonstrator <B>(- constantly to + never)</B>?</td>
   <td > <div align="center"> 
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f10" type="radio"<?php if(isset($f10) && $f10 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
<!--   <td width="75%">18. 
    How helpful did you find the accompanying book?</td>
   <td > <div align="center"> 
     <input type="radio" name="18" value="a">
     <input type="radio" name="18" value="b">
     <input type="radio" name="18" value="c">
     <input type="radio" name="18" value="d">
     <input name="18" type="radio" value="e" >
     </div></td>
  </tr>-->
  <tr> 
   <td width="75%">11. 
    How easy was this practical to navigate?</td>
   <td > <div align="center"> 
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f11" type="radio"<?php if(isset($f11) && $f11 == 'e') echo " CHECKED "; ?>value="e" >
     </div></td>
  </tr>
  <tr> 
   <td width="75%"><p>12. 
     Overall, did you enjoy this short course in Bioinformatics?</p></td>
   <td > <p align="center"> 
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'a') echo " CHECKED "; ?>value="a">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'b') echo " CHECKED "; ?>value="b">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'c') echo " CHECKED "; ?>value="c">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'd') echo " CHECKED "; ?>value="d">
     <input name="f12" type="radio"<?php if(isset($f12) && $f12 == 'e') echo " CHECKED "; ?>value="e" >
     </p></td>
  </tr>
<?php
}
?>
  <tr> 
   <td width="75%" align="left" valign=top > <p><em>Any 
     comments, or suggestions? Please feel free to fill the text box out 
     below. </em></p>

    <p> 
     <textarea name="comments" cols="50" rows="10" class="formbutton"></textarea>
     </p></td>
   <td valign=top> <p align="center">&nbsp; </p></td>
  </tr>
  <tr>
   <td align="left" valign=top ><p><em>If
       you would like us to respond to you directly, please enter your
       email address.</em></p>
    <p><em>       <input name="email" type="text" class="formbutton" id="email">
    </em> </p></td>
  </tr>
  <tr>
   <td align="center" valign=top colspan=2><input name="submit" onClick="
   <?php if($username == 'coordinator') { ?>
   if(document.getElementById('webcourse').value == '0') { alert('Please select your course number. Consult your coordinator when in doubt.');return false; };
   <?php } ?>
   if(!checkFeedback(<?= ($username == 'coordinator') ? 20 : 12 ?>)) {alert('Please answer all questions.'); return false; } return true;" type="submit" class="formbutton" value="Submit feedback form"></td>
  </tr>
 </table>
</form>

<?php
}
?>
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
<script>awmSelectedItem=24</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>

