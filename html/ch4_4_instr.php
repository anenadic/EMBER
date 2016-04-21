<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 4 - Sequence alignment: Instructions Step 3</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch4.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%">
     <tr> 
      <td valign=top height=21> 
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_instr_aiiqr.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
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
         <td valign=top width=1 bgcolor="#336633"></td>
         <td valign=top background="Graphics/background_content.gif">
          <table border=0 cellspacing=0 cellpadding=10 width="100%">
           <tr> 
            <td valign=top> 
						<?php
include ('instr_header.php');
?>

<p>We will now explore the creation of regular expressions (regexs) from conserved
 motifs, and will compare the results of database searching with manually- and
 automatically-generated patterns.

<p>i) From one of your alignments, select and save a conserved, un-gapped motif
 using an alignment editor. Design your own <a href="ch4/regexppopup.htm" target="new">regular
 expression</a> and use it for database searching with
  <?php $Url_id="22"; $Link_naam="PATTINPROT"; include ('get_link.php'); ?>. </p>


<p ><em>Reflections...</em></p>
<ul>
 <li><em>Does your regex resemble any of those in PROSITE?</em></li>
 <li><em>Does your motif correspond to any of those included in Blocks and/or PRINTS? </em></li>
 <li><em>How and why might these differ?</em></li>
 <li><em>Did the search using your own regular expression yield sensible results?</em></li>
 <li><em>In general, are there significant differences between manually- and automatically-generated regexs? If so, what are the main differences?</em></li>
</ul>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1);"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<div align="center"><form><input type="button" class="formbutton" name="goquiz" value="Go to quiz" onClick="goQuiz(4)" onMouseOver="this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.background='#D5E1ED'; this.style.color='#000060';"></form></div></td><td>
		<p align='right'><a href="JavaScript:goNextChapter()" onMouseOut="MM_swapImgRestore()" onClick="" onMouseOver="MM_swapImage('next_chapter','','Graphics/next_chapter_f2.gif',1);"><img name="next_chapter" src="Graphics/next_chapter.gif" width="68" height="49" border="0" alt=""></a></p></td></tr></table></td>
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
 </table></td>
   <td width="15" valign="top"><img src="Graphics/spacer.gif" width=15 height=1 align=bottom></td>
  </tr>
 </table>
 <p>&nbsp;</p></td>
 </tr>
</table>

 <map name="Map">
  <area shape="rect" coords="6,4,39,18" href="ch4_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch4_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch4_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch4_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch4_refs.php" alt="References" title="References">
 </map>
</div>
<script>awmSelectedItem=7</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>