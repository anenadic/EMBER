<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 7 - Homology modelling: Instructions Step 1</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_chapter_f2.gif')">
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch7.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%">
     <tr> 
      <td valign=top height=21> 
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_instr_aiir.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
           <tr> 
            <td valign=top height=20 width="100%"> 
             <p>&nbsp;</p></td>
           </tr>
           <tr> 
            <td valign=top height=1 bgcolor="#336633"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <table border=0 cellspacing=0 cellpadding=0>
        <tr> 
         <td valign=top width=1 bgcolor="#336633"> 
          <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
         <td valign=top background="Graphics/background_content.gif">
          <table border=0 cellspacing=0 cellpadding=10 width="100%">
           <tr> 
            <td valign=top> 
<?PHP
include "instr_header.php";
?>


<p>The aim here is to build a 3D model 
 of your protein. If the structure of your protein is already known, for the 
 purpose of this exercise, you may wish to use one of these <a href="ch7/sequences.htm" target="left">sequences</a> 
 instead. </p>
<p>i) Visit the
 <?php $Url_id="200"; $Link_naam="SWISS-MODEL"; include ('get_link.php'); ?> submission page. Click on the button
 to <em>Start Modelling</em> and follow the instructions.<em> NOTE:
The results may take some time...</em></p> You may benefit from creating an account.
<p>ii) From 
 this service, you will receive both a Welcome message and a listing of the identified 
 homologues, p-values, % identities, and a schematic of the regions of the query 
 that are matched. SWISS-MODEL uses the structures of any significant matches 
 as templates from which it derives a single model. It then emails the result 
 and a 'bug report' from <em>WHAT CHECK</em>. View 
 the model in a PDB viewer (see <a href="ch6_aims.php">Chapter 6</a>). <a href="ch7/structuresnote.htm" target="new">Compare</a> 
 the model with the structure found in <a href="ch6_aims.php">Chapter 6</a>. </p>
<p><em>Reflections...</em></p>
	<ul>
 <li><i>How many matches are statistically 
  significant? </i></li>
 <li><i>Are the matches plausible - 
  are the proteins related? </i></li>
 <li><i>Were any sequence matches rejected? 
  If so why? </i></li>
 <li><i>How similar are the model and 
  template structures? </i></li>
 <li><i>In the 
  WHAT CHECK Report, are 
  there any errors in the structure that may cause concern? (<a href="ch7_info_2-2.php">HINT</a>)</i></li>
</ul>

	




<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goStep('ch6_4')" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous_chapter','','Graphics/previous_chapter_f2.gif',1)"><img name="previous_chapter" src="Graphics/previous_chapter.gif" width="85" height="49" border="0" alt=""></a></p></td><td>
		<p align='center'>&nbsp;</p></td><td>
		<p align='right'><a href="JavaScript:goNextStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_f2.gif',1)"><img name='next' src='Graphics/next.gif' width=49 height=49 border=0 alt=''></a></p></td></tr>
</table></td>
           </tr>
          </table></td>
         <td valign=top width=1 bgcolor="#336633"> 
          <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
        </tr>
       </table>
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=1>
        <tr> 
         <td valign=top height=1 bgcolor="#336633"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table></td>
   <td width="15" valign="top"><img src="Graphics/spacer.gif" width=15 height=1 align=bottom></td>
  </tr>
 </table>
 <p>&nbsp;</p></td>
 </tr>
</table>

 <map name="Map">
  <area shape="rect" coords="6,4,39,18" href="ch7_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch7_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch7_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,3,247,18" href="ch7_refs.php" alt="References" title="References">
 </map> 
</div><script>awmSelectedItem=12</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
