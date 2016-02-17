<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 3 - Protein family analysis: Information</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_page_f2.gif')">
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch3.jpg); background-repeat: no-repeat">
  <td align="left" valign="top">
	
	
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_info_aiiqr.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%">
          <p>&nbsp;</p></td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#993333"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
         
				 <td valign=top>
<?PHP
include "info_header.php";
?>
<a name="TOC"></a><blockquote>
 3.1&nbsp;&nbsp;<a href="ch3_info.php">Protein Families</a><br>
 3.2&nbsp;&nbsp;<a href="ch3_info_2.php">Single motif-based Databases</a><br>
 3.3&nbsp;&nbsp;<a href="ch3_info_3.php">Domain-based databases</a><br>
  3.4&nbsp;&nbsp;<a href="ch3_info_4.php">Multiple-motif databases</a><br>
  3.5&nbsp;&nbsp;<u>InterPro</u>
</blockquote>
<p class="sectionheader">
 <a name=interpro></a>3.5 InterPro</p>
<p>The proliferation of protein family 
 databases bears witness to their growing importance in sequence analysis, and 
 especially genome annotation. But database maintenance, and particularly the 
 provision of high quality annotation, is arduous and time consuming. As a result, 
 to date there is no complete (<i>i.e</i>., fully comprehensive) protein family 
 database. Perhaps more importantly, the different pattern-recognition methods 
 that underpin the different databases each have particular strengths and weakness, 
 and hence optimum areas of application. The profile-based methods, for example, 
 tend to perform well in the diagnosis of superfamilies; single-motif based approaches 
 work well in diagnosing short, functional sites; and multiple-motif approaches 
 work best in the diagnosis of families and subfamilies. The methods are thus 
 complementary, and it is therefore good practice to search them all to ensure 
 that one's analysis is as comprehensive and rigorous as possible. </p>
<p>To address these issues in a more 
 systematic way, the 
<?php $Url_id="193"; $Link_naam="PRINTS"; include ('get_link.php'); ?>, PROSITE, Profiles, 
<?php $Url_id="36"; $Link_naam="Pfam"; include ('get_link.php'); ?> and 
<?php $Url_id="56"; $Link_naam="ProDom"; include ('get_link.php'); ?> databases
joined forces to create an integrated resource of protein families, domains
and functional sites, termed 
<?php $Url_id="57"; $Link_naam="InterPro"; include ('get_link.php'); ?>. 
The original 
 consortium has since been joined by a number of other databases, including 
<?php $Url_id="58"; $Link_naam="SMART"; include ('get_link.php'); ?> and 
<?php $Url_id="59"; $Link_naam="TIGRFAM"; include ('get_link.php'); ?>  InterPro
is inevitably more comprehensive than its individual source databases (see Fig
3.12), but 
 the burden of maintenance means that it lags behind their current releases. </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch3/fig3-12.html','left')"><img src="ch3/thumbs/fig3-12.gif" width="150" height="57" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 3.12. Contents of InterPro (November 2001),
    compared with current release of its source databases (May 2002).</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<p>InterPro has two main strengths: 
  first, it pools annotation from its source databases (this means principally
 from PROSITE and PRINTS), providing a more coherent description of each of
 its
  constituent families; second, when searching the resource, it summarises
 the results graphically, allowing ready comparison of matches from each of
 its source
  databases&#8212;links are provided from each match back to the relevant source
  database or databases, (as shown in Fig 3.13). InterPro is thus a very powerful
  sequence
  analysis tool. </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch3/fig3-13.html','left')"><img src="ch3/thumbs/fig3-13.gif" width="150" height="42" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 3.13. Typical search output from InterPro,
    illustrating matches to each of its source databases.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table><br>
<div align="center"> 
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch3_info_4-2-4.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'>&nbsp;</p></td>
  </tr>
 </table>
 </div></td>
				 
        </tr>
       </table></td>
      <td valign=top width=1 bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
     <tr> 
      <td valign=top width="1" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="100%" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="1" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
    </table></td>
   <td width=15 valign="top">&nbsp;</td>
  </tr>
 </table></td>
 </tr>
</table>

 <map name="Map">
  <area shape="rect" coords="6,4,39,18" href="ch3_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch3_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch3_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch3_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch3_refs.php" alt="References" title="References">
 </map>
</div>

<p>&nbsp;</p><script>awmSelectedItem=6</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
