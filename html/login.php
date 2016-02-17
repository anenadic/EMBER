<?php
	$go = false;
	if(isset($username))
	{
		// write notepad contents to db
		include ("connect.inc");
		mysql_query("update tblember_user set notepadcontents = '".(base64_encode($ember_np))."' where user_name = '$username'") or die (mysql_error());
		echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
		echo "<script language=\"JavaScript\">";
		//echo "if(!confirm('Are you sure you want to log out?')) history.go(-1); else removeCookie('username')";
		echo "deleteCookie('username');";
		echo "deleteCookie('ember_np');";
		echo "</script>";
	}
	if(isset($_POST["hiddenwebusername"]) || isset($hint))
	{
		if(!isset($hint))
		{
			$user = $_POST["hiddenwebusername"];
			$passwd = $_POST["hiddenwebpassword"];
		}
		include ("connect.inc");
		// check for course adding
		if($user == "add_course")
		{
			$result = mysql_query("select * from tblember_user where user_name = '$user' AND user_passwd = '$passwd'") or die (mysql_error());
			if(mysql_num_rows($result) > 0)
			{
				echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
				echo "<script language=\"JavaScript\">";
				echo "setCookie('username', '$user');";
				echo "document.location.href = \"newcourse.php\";";
				echo "</script>";
			}
		}
		// check for coordinator
		if(!strcmp($user, "coordinator"))
		{
			$result = mysql_query("select * from tblember_user where user_name = '$user' AND user_passwd = '$passwd'") or die (mysql_error());
			if(mysql_num_rows($result) > 0)
			{
				echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
				echo "<script language=\"JavaScript\">";
				echo "setCookie('username', '$user');";
				echo "document.location.href = \"course_login.php\";";
				echo "</script>";
			}
		}
		$result = mysql_query("select * from tblember_user where user_name = '$user'") or die (mysql_error());
		if(mysql_num_rows($result) == 0)
			$error = "<font color=\"#990000\" /><b>No such username found.</b></font>";
		else
		{
			$valid_username = true;
			if(isset($hint))
			{
				$row = mysql_fetch_array($result);
				$hint = $row["user_hint"];
				$error = "The hint you provided was: $hint";
			}
			else
			{
				$result2 = mysql_query("select * from tblember_user where user_name = '$user' AND user_passwd = '$passwd'") or die (mysql_error());
				if(mysql_num_rows($result2) > 0)
					$go = true;
				else
					$error = "<font color=\"#990000\" /><b>Password is incorrect. Please try again.</b></font>";
				mysql_free_result($result2);
			}
		}
		mysql_free_result($result);
	}
	if($go)
	{
		// read notepad contents from db
		$result = mysql_query("select * from tblember_user where user_name = '$user'") or die (mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			$row = mysql_fetch_array($result);
			$embernp = base64_decode($row["notepadcontents"]);
		}
		echo "<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"scripts.js\"></script>";
		echo "<script language=\"JavaScript\">";
		echo "setCookie('username', '$user');";
		$embernp = "";//addcslashes($embernp, "\0..\37");
		echo "setCookie('ember_np', '$embernp');";
		echo "document.location.href = \"intro.php\";";
		echo "</script>";
	}
	if(isset($_POST["hiddenwebusername"]) && !$go) $go = true;
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
            echo "<p>Welcome to EMBER, an online practical designed to introduce a range of bioinformatics services, databases and software available on the Web.</p>";
            if(isset($error)) echo "<p>$error</p>";
           ?>
			<p>Please log in to continue. If you are a new user, please <b><a href="newuser.php">create an EMBER account</a></b> first. Do you have trouble logging in? Please make sure you have cookies enabled in your browser.</p><br>
           <form name="loginform" method="post" action="login.php">
           <input type="hidden" id="hiddenwebusername" name="hiddenwebusername"/>
        	<input type="hidden" id="hiddenwebpassword" name="hiddenwebpassword" value=""/>
           <table align=center border=0 cellpadding=0 cellspacing=4>
            <tr>
            <td><div align="right"><b>User name:</b></div></td> 
            <td><input class="formfield" type="text" id="webusername" value="<?php if(isset($user) && isset($valid_username)) echo $user;?>" size="20"></td>
            <td></td></tr><tr>
            <td><div align="right"><b>Password:</b></div></td> 
            <td><input class="formfield" type="password" id="webpassword" size="20"></td><td><a href="#" type="submit" onclick="var username = document.getElementById('webusername').value;if(username == '') { alert('Please enter your user name!');return false; }document.location.href ='login.php?hint=true&user=' + username;">Need a hint?</a></td></tr>
            <tr text-align=center><td>
            </td>
            <td><br>
              <input class="formbutton" onClick="if(!checkLogin()) return false;submitNewUser('webusername');submitNewUser('webpassword');" type="submit" name="submit" value="Log in!">
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

