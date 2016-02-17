<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 8 - Fold recognition/threading: Information</title>
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch8.jpg); background-repeat: no-repeat"></td>
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
<blockquote>
 8.1&nbsp;&nbsp;<a href="ch8_info.php">Fold recognition</a><br>
 8.2&nbsp;&nbsp;<a href="ch8_info_2.php">GenTHREADER</a><br>
 8.3&nbsp;&nbsp;<u>3D-PSSM</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;8.3.1&nbsp;&nbsp;<a href="ch8_info_3-1.php">Searching the fold library</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;8.3.2&nbsp;&nbsp;<a href="ch8_info_3-2.php">3D-PSSM output</a><br>
 8.4&nbsp;&nbsp;<a href="ch8_info_4.php">Applications of fold recognition</a>
</blockquote>
<p class="sectionheader">
<a name="3d"></a>8.3 3D-PSSM</p>
<p>
<?php $Url_id="136"; $Link_naam="3D-PSSM"; include ('get_link.php'); ?> exploits a list of &quot;Master Proteins&quot; of known structure within superfamilies 
 to create libraries of 1D- and 3D-profiles. It does this, first, by iteratively 
 PSI-BLASTing each Master Protein 
 against NRPROT (a non-redundant composite database comprising 
 GenBank translations, PDB sequences, SWISS-PROT and PIR, derived from source 
 data at the NCBI) and aligning 
 relevant hits to create a 1D-PSSM (Position Specific Scoring Matrix). Next, 
 3D alignments between each Master Protein and all others in the same superfamily 
 are created using the SAP algorithm. These alignments are built in a hierarchical fashion, progressively 
 adding structures that are closest (lowest RMS) to an existing member of the 
 alignment. Residue equivalences from the SAP alignments are then used to reconcile 
 the 1D-profiles of each superfamily member, ultimately producing a self-consistent 
 extended sequence profile or &quot;3D-profile&quot; (in other words, a 1D-PSSM 
 assembled from multiple individual 1D-profiles and augmented with 3D data).
</p>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch8_info_2-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch8_info_3-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch8_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch8_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch8_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch8_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch8_refs.php" alt="Refces" title="References">
 </map>
</div>
<script>awmSelectedItem=13</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
