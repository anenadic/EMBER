<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 7 - Homology modelling: Information</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_page_f2.gif','Graphics/next_page_f2.gif')">
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
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_info_aiir.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
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

<blockquote>
 7.1&nbsp;&nbsp;<a href="ch7_info.php">Homology modelling</a><br>
 7.2&nbsp;&nbsp;<u>SWISS-MODEL </u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;7.2.1&nbsp;&nbsp;<u>Reliability of SWISS-MODEL</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;7.2.2&nbsp;&nbsp;<a href="ch7_info_2-2.php">PDB checking with WHAT CHECK</a><br>
 7.3&nbsp;&nbsp;<a href="ch7_info_3.php">Geno3D</a><br>
 7.4&nbsp;&nbsp;<a href="ch7_info_4.php">Application of homology models</a>
</blockquote>

<p class="sectionheader">
<a name="_Ref439213"></a>7.2.1 Reliability of SWISS-MODEL</p>
<p> The reliability of a model depends on the degree of 
 similarity between the query and template sequences. An attempt has been made 
 to derive reliability estimates was made in the 
<?php $Url_id="119"; $Link_naam="3DCrunch"; include ('get_link.php'); ?> project.</p>
<p>In 3DCrunch, models were 
 generated for proteins of known 3D-structure using templates sharing 25-95% 
 sequence identity with the query, yielding over 1200 model-control structure 
 pairs. The degree of identity between target and template sequences was calculated, 
 together with the Root Mean Square Deviation (RMSD) 
 of the models from their control structures (a low RMSD indicates little deviation). 
 As can be seen in Fig 7.3, the reliability of models is highly dependent on 
 the level of sequence identity - to achieve &quot;good&quot; models (RMSD less 
 than 1A) requires 60-70% identity. </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch7/fig7-3.php','left')"><img src="ch7/thumbs/fig7-3.gif" width="150" height="57" border="0" class="imgborder"></a></td>
  <td><p class="photocaption"><b>Fig 7.3. SWISS-MODEL accuracy for target-template
     identity classes. </b></p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>

<br>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch7_info_2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch7_info_2-2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
 </tr>
</table></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch7_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch7_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch7_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,3,247,18" href="ch7_refs.php" alt="References" title="References">
 </map> </div>
<script>awmSelectedItem=12</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
