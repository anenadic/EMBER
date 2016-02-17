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
 &nbsp;&nbsp;&nbsp;&nbsp;7.2.1&nbsp;&nbsp;<a href="ch7_info_2-1.php">Reliability of SWISS-MODEL</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;7.2.2&nbsp;&nbsp;<a href="ch7_info_2-2.php">PDB checking with WHAT CHECK</a><br>
 7.3&nbsp;&nbsp;<a href="ch7_info_3.php">Geno3D</a><br>
 7.4&nbsp;&nbsp;<a href="ch7_info_4.php">Application of homology models</a>
</blockquote>
<p class="sectionheader">
 <a name="_Ref439405"></a>7.2 SWISS-MODEL</p>
<p>
<?php $Url_id="118"; $Link_naam="SWISS-MODEL"; include ('get_link.php'); ?> is an automated protein-modelling server. The 
  structure database (ExPDB) used by this facility is derived from the PDB; the 
  sequence database used is ExNRL-3D (derived from NRL-3D). The modelling procedure 
  consists of several steps:</p>
<ul>
 <li> Search 
  for suitable templates </li>
 <li> Generate 
  model with ProModII</li>
 <ul>
  <li>create a multiple alignment of query and template sequences (rejecting 
   sequences with low similarity)</li>
  <li>construct a core backbone based on alignment of query with core regions</li>
  <li>in 
   regions of sequence similarity, corresponding residues match in 3D</li>
  <li>use 
   atoms occupying similar regions of space to compute model framework coordinates 
   (averaged positions)</li>
  <li>remove 
   side chains that do not fit </li>
  <li>reconstruct missing loops using a database of structural fragments</li>
 </ul>
 <ul>
  <li>complete and correct backbone and side chains</li>
 </ul>
 <li>Refine structure by Energy Minimisation and Molecular Dynamics</li>
 <li>Verify model structure quality and check packing</li>
</ul>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch7_info.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch7_info_2-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
