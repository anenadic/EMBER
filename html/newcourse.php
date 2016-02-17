<?php
	$go = false;
	if(isset($_POST["hiddenorganisername"]))
	{
		$user = $_POST["hiddenorganisername"];
		$passwd = $_POST["hiddenpassword"];
		$hint = $_POST["hiddenhint"];
		$mail = $_POST["hiddenmailaddress"];
		$institution = $_POST["hiddeninstitution"];
		$country = $_POST["hiddencountry"];
		$studentsnr = $_POST["hiddenstudentsnr"];
		$computersnr = $_POST["hiddencomputersnr"];
		$demonstratorsnr = $_POST["hiddendemonstratorsnr"];
		$start = $_POST["hiddenstartdate"];
		$end   = $_POST["hiddenenddate"];
		$uniq = $_POST["hiddenunique"];
		include ("connect.inc");
		mysql_query("insert into tblember_course VALUES('', '$start', '$end', '$user', '$mail', '$institution', '$country', '$studentsnr', '$computersnr', '$demonstratorsnr', '$passwd', '$hint', '$uniq', '0')") or die (mysql_error());
		mysql_free_result($result);
		echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
		echo "<script language=\"JavaScript\">";
		//echo "setCookie('username', '$user');";
		echo "document.location.href = \"confirmcourse.php\";";
		echo "</script>";
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: New course</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript" src="scripts.js"></script>
<script language="JavaScript" type="text/JavaScript">
if(getCookie('username') != 'add_course') document.location.href = 'login.php';
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
         <td valign=top height=1 bgcolor="#7B0101"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td></tr>
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
           <p><img src="Graphics/new_courser_header.gif" width="457" height="14"></p>
           <?php if(isset($error))
           			echo "<p>$error</p>";
           		 else
           		 	echo"<p>Please enter your data in the fields below. All fields are required to proceed.</p>";
           	?>
          <div align="center">
          <br>
		  <form name="loginform" method="post" action="newcourse.php">
           <table name="logintable" border=0 align=center cellpadding=0 cellspacing=4 class="imgborder">
            
            <input type="hidden" id="hiddenweborganisername" name="hiddenorganisername"/>
            <input type="hidden" id="hiddenwebmailaddress" name="hiddenmailaddress"/>
            <input type="hidden" id="hiddenwebinstitution" name="hiddeninstitution"/>
            <input type="hidden" id="hiddenwebcountry" name="hiddencountry"/>
            <input type="hidden" id="hiddenwebstudentsnr" name="hiddenstudentsnr"/>
            <input type="hidden" id="hiddenwebcomputersnr" name="hiddencomputersnr"/>
            <input type="hidden" id="hiddenwebdemonstratorsnr" name="hiddendemonstratorsnr"/>
            <input type="hidden" id="hiddenwebpassword" name="hiddenpassword" value=""/>
	        <input type="hidden" id="hiddenwebhint" name="hiddenhint"/>
	        <input type="hidden" id="hiddenwebcourse" name="hiddencourse"/>
	        <input type="hidden" id="hiddenwebunique" name="hiddenunique"/>
	        <input type="hidden" id="hiddenwebstartdate" name="hiddenstartdate"/>
	        <input type="hidden" id="hiddenwebenddate" name="hiddenenddate"/>
            <tr>
            <td><div align="right" ><b>Course organiser's name:</b></div></td> 
            <td><input class="formfield" type="text" id="weborganisername" value="<?= $organisername ?>" size="35"></td></tr>
            
<tr text-align=center>
<td><div align="right" ><b>Start date:</b></div></td>
<td>
<select id="startyear" onChange="populatestartdate();">
<option value=2003>2003</option>
<option selected value=2004>2004</option>
<option value=2005>2005</option>
</select>

<select id="startmonth" onChange="populatestartdate();">
<option value=01>January</option>
<option value=02>February</option>
<option value=03>March</option>
<option value=04>April</option>
<option value=05>May</option>
<option value=06>June</option>
<option value=07>July</option>
<option value=08>August</option>
<option value=09>September</option>
<option value=10>October</option>
<option value=11>November</option>
<option value=12>December</option>
</select>

<select id="startday" onChange="recalcstartdate();">
</select>
</td>
</tr>

<tr text-align=center>
<td><div align="right" ><b>End date:</b></div></td>
<td>
<select id="endyear" onChange="populateenddate();">
<option value=2003>2003</option>
<option selected value=2004>2004</option>
<option value=2005>2005</option>
</select>

<select id="endmonth" onChange="populateenddate();">
<option selected value=01>January</option>
<option value=02>February</option>
<option value=03>March</option>
<option value=04>April</option>
<option value=05>May</option>
<option value=06>June</option>
<option value=07>July</option>
<option value=08>August</option>
<option value=09>September</option>
<option value=10>October</option>
<option value=11>November</option>
<option value=12>December</option>
</select>

<select id="endday" onChange="recalcenddate();">

</select>
</td>
</tr>

            <tr text-align=center>
              <td><div align="right" ><b>Password:</b></div></td>
              <td><input class="formfield" type="password" id="webpassword" value="<?= $passwd ?>" size="35"></td>
            </tr>
            <tr text-align=center>
              <td><div align="right" ><b>Confirm password:</b></div></td>
              <td><input class="formfield" type="password" id="webpasswordconfirm" size="35"></td>
            </tr>
            <tr text-align=center>
              <td><div align="right" ><b>Hint to retrieve password:</b></div></td>
              <td><input class="formfield" type="text" id="webhint" value="<?= $hint ?>" size="35"></td>
            </tr>
            <tr>
            <td><div align="right" ><b>Email address:</b></div></td> 
            <td><input class="formfield" type="text" id="webmailaddress" value="<?= $mail ?>"size="35"></td></tr>
            <tr>
            <td><div align="right" ><b>Institution where course is held:</b></div></td>
            <td><input class="formfield" type="text" id="webinstitution" value="<?= $institution ?>" size="35"></td></tr>
			<tr>
            <td><div align="right" ><b>Country where course is held:</b></div></td>
            <td><input class="formfield" type="text" id="webcountry" value="<?= $country ?>" size="35"></td></tr>
			<tr>
            <td><div align="right" ><b>Number of students on course:</b></div></td>
            <td><input class="formfield" type="text" id="webstudentsnr" value="<?= $studentsnr ?>" size="35"></td></tr>
 			<tr>
            <td><div align="right" ><b>Number of computers available:</b></div></td>
            <td><input class="formfield" type="text" id="webcomputersnr" value="<?= $computersnr ?>" size="35"></td></tr>
 			<tr>
            <td><div align="right" ><b>Number of demonstrators:</b></div></td>
            <td><input class="formfield" type="text" id="webdemonstratorsnr" value="<?= $demonstratorsnr ?>" size="35"></td></tr>
			<tr text-align=center>
              <td><div align="right" ><b>Access code for course:</b></div></td>
              <td><input class="formfield" type="password" id="webunique" size="35"></td>
            </tr>
            </table>

            <br><br>
              <input class="formbutton" onClick="if(!checkNewCourse()) return false;submitNewUser('weborganisername');submitNewUser('webmailaddress');submitNewUser('webinstitution');submitNewUser('webcountry');submitNewUser('webstudentsnr');submitNewUser('webcomputersnr');submitNewUser('webdemonstratorsnr');submitNewUser('webhint');submitNewUser('webpassword');submitNewUser('webunique');" type="submit" name="submit" value="Create course">
              <input class="formbutton" type="reset" name="Reset" value="Clear form">
          </form></div>
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

