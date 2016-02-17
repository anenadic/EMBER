<?php
	$go = false;
	$coursenum = $_POST["hiddencourse"];
	include ("connect.inc");
	$result = mysql_query("select * from tblember_course") or die (mysql_error());
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
	if(isset($_POST["hiddenusername"]))
	{
		$user = $_POST["hiddenusername"];
		$passwd = $_POST["hiddenpassword"];
		$firstname = $_POST["hiddenfirstname"];
		$lastname = $_POST["hiddenlastname"];
		$mail = $_POST["hiddenmailaddress"];
		$institution = $_POST["hiddeninstitution"];
		$country = $_POST["hiddencountry"];
		$background = $_POST["hiddenbackground"];
		$qualifications = $_POST["hiddenqualifications"];
		$currentlevel = $_POST["hiddencurrentlevel"];
		$hint = $_POST["hiddenhint"];
		$uniq = $_POST["hiddenunique"];
		$result = mysql_query("select * from tblember_user where user_name = '$user'") or die (mysql_error());
		if(mysql_num_rows($result))
		{
			// duplicate user name was chosen
			$error = "<font color=\"#990000\" /><b>Sorry, the user name $user already exists. Please choose another.</b></font>";
			mysql_free_result($result);
		}
		else
		{
			// check course unique id
			$add = $coursenum == 1; // independent doesnt have to be checked
			if(!$add)
			{
				$result = mysql_query("select * from tblember_course where course_id='$coursenum' AND course_access_code='$uniq'") or die (mysql_error());
				if(!mysql_num_rows($result))
				{
					$error = "<font color=\"#990000\" /><b>Sorry, the entered access code is not correct for course EMBER00$coursenum.</b></font>";
					mysql_free_result($result);
				}
				else
					$add = true;
			}
			if($add)
			{
				// everything ok, add the user
				mysql_query("insert into tblember_user VALUES('$user', '$passwd', '$firstname', '$lastname', '$hint', '$mail', '$coursenum', '$institution', '$country', '', '$background', '$qualifications', '$currentlevel', '0')") or die (mysql_error());
				mysql_free_result($result);
				echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
				echo "<script language=\"JavaScript\">";
				echo "setCookie('username', '$user');";
				echo "document.location.href = \"confirm.php?user=$user\";";
				echo "</script>";
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Account</title>
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
      <td valign=top height=21> 
       <img src="Graphics/intro_tab.gif" width="314" height=21 border=0 align=bottom></td>
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
           <p><img src="Graphics/account_header.gif" width="457" height="14"></p>
           <?php if(isset($error))
           			echo "<p>$error</p>";
           		 else
           		 	echo"<p>Please enter your data in the fields below. Choose 'Independent' as the course if you are not part of a taught course. All fields are required to proceed.</p>";
           	?>
          <div align="center">
          <br>
		  <form name="loginform" method="post" action="newuser.php">
           <table border=0 align=center cellpadding=0 cellspacing=4 class="imgborder">
            
            <input type="hidden" id="hiddenwebfirstname" name="hiddenfirstname"/>
            <input type="hidden" id="hiddenweblastname" name="hiddenlastname"/>
            <input type="hidden" id="hiddenwebmailaddress" name="hiddenmailaddress"/>
            <input type="hidden" id="hiddenwebusername" name="hiddenusername"/>
            <input type="hidden" id="hiddenwebinstitution" name="hiddeninstitution"/>
            <input type="hidden" id="hiddenwebcountry" name="hiddencountry"/>
            <input type="hidden" id="hiddenwebbackground" name="hiddenbackground"/>
            <input type="hidden" id="hiddenwebqualifications" name="hiddenqualifications"/>
            <input type="hidden" id="hiddenwebcurrentlevel" name="hiddencurrentlevel"/>
	        <input type="hidden" id="hiddenwebpassword" name="hiddenpassword" value=""/>
	        <input type="hidden" id="hiddenwebhint" name="hiddenhint"/>
	        <input type="hidden" id="hiddenwebcourse" name="hiddencourse"/>
	        <input type="hidden" id="hiddenwebunique" name="hiddenunique"/>
            <tr>
            <td><div align="right" ><b>First name:</b></div></td> 
            <td><input class="formfield" type="text" id="webfirstname" value="<?= $firstname ?>" size="30"></td></tr>
            <tr>
            <td><div align="right" ><b>Last name:</b></div></td> 
            <td><input class="formfield" type="text" id="weblastname" value="<?= $lastname ?>" size="30"></td></tr>
            <tr>
            <td><div align="right" ><b>Email address:</b></div></td> 
            <td><input class="formfield" type="text" id="webmailaddress" value="<?= $mail ?>"size="30"></td></tr>
            <tr>
            <td><div align="right" ><b>Institution/workplace:</b></div></td>
            <td><input class="formfield" type="text" id="webinstitution" value="<?= $institution ?>" size="30"></td></tr>
			<tr>
            <td><div align="right" ><b>Country of student's institution:</b></div></td>
            <td><input class="formfield" type="text" id="webcountry" value="<?= $country ?>" size="30"></td></tr>

            <tr text-align=center>
              <td><div align="right" ><b>Original background:</b></div></td>
              <td><select class="formfield" id="webbackground">
              		<option value="biologist">biologist</option>
              		<option value="biochemist">biochemist</option>
					<option value="chemist">chemist</option>
					<option value="medical">medical</option>
					<option value="pharmacist">pharmacist</option>
					<option value="computer scientist">computer scientist</option>
					<option value="engineer">engineer</option>
					<option value="mathematician">mathematician</option>
					<option value="bioinformatician">bioinformatician</option>
					<option value="physicist">physicist</option>
					<option value="other">other</option>
              </select></td>
            </tr>

			<tr text-align=center>
              <td><div align="right" ><b>Qualifications:</b></div></td>
              <td><select class="formfield" id="webqualifications">
              		<option value="none">none</option>
              		<option value="BSc">BSc</option>
					<option value="MSc">MSc</option>
					<option value="PhDd">PhD</option>
					<option value="other">other</option>
              </select></td>
            </tr>

  <tr> 
   <td><div align="right" ><b>Current Bioinformatics level:</b></div></td>
   <td><select class="formfield" id="webcurrentlevel">
              		<option value="none">none</option>
              		<option value="beginner">beginner</option>
					<option value="competent">competent</option>
					<option value="advanced">advanced</option>
					<option value="expert">expert</option>
              </select></td>
  </tr>
            <tr text-align=center><td><div align="right" ><b>User name:</b></div></td>
            <td>
              <input class="formfield" type="text" id="webusername" value="<?php if(isset($user) && isset($valid_username)) echo $user;?>" size="30"></td></tr>
            <tr text-align=center>
              <td><div align="right" ><b>Password:</b></div></td>
              <td><input class="formfield" type="password" id="webpassword" value="<?= $passwd ?>" size="30"></td>
            </tr>
            <tr text-align=center>
              <td><div align="right" ><b>Confirm password:</b></div></td>
              <td><input class="formfield" type="password" id="webpasswordconfirm" size="30"></td>
            </tr>
            <tr text-align=center>
              <td><div align="right" ><b>Hint to retrieve password:</b></div></td>
              <td><input class="formfield" type="text" id="webhint" value="<?= $hint ?>" size="30"></td>
            </tr>
            <tr text-align=center>
              <td><div align="right" ><b>Choose the course:</b></div></td>
              <td><select class="formfield" id="webcourse"><?= $courseoptions ?></select></td>
            </tr>
            <tr text-align=center>
              <td><div align="right" ><b>Access code for course:</b></div></td>
              <td><input class="formfield" type="password" id="webunique" value="<?= $uniq ?>" size="30"></td>
            </tr>
            </table>     
            
            <br><br>
              <input class="formbutton" onClick="if(!checkNewUser()) return false;submitNewUser('webusername');submitNewUser('webpassword');submitNewUser('webfirstname');submitNewUser('weblastname');submitNewUser('webmailaddress');submitNewUser('webinstitution');submitNewUser('webcountry');submitNewUser('webhint');document.getElementById('hiddenwebbackground').value = document.getElementById('webbackground').value;document.getElementById('hiddenwebqualifications').value = document.getElementById('webqualifications').value;document.getElementById('hiddenwebcurrentlevel').value = document.getElementById('webcurrentlevel').value;document.getElementById('hiddenwebcourse').value = document.getElementById('webcourse').value;submitNewUser('webunique');" type="submit" name="submit" value="Create account">
              <input class="formbutton" type="reset" name="Reset" value="Clear form">
          </form></div>
           <br></td>
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

