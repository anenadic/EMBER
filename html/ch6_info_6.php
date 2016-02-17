<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 6 - Fold classification: Information</title>
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch6.jpg); background-repeat: no-repeat"></td>
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
           6.1&nbsp;&nbsp;<a href="ch6_info.php">PDB</a><br>
           6.2&nbsp;&nbsp;<a href="ch6_info_2.php">PDB Summary</a><br>
           6.3&nbsp;&nbsp;<a href="ch6_info_3.php">CATH</a><br>
           6.4&nbsp;&nbsp;<a href="ch6_info_4.php">SCOP</a><br>
           6.5&nbsp;&nbsp;<a href="ch6_info_5.php">EC-&gt;PDB</a><br>
           6.6&nbsp;&nbsp;<u>Visualisation of Protein Molecules</u> </blockquote>
					
					
          <p class="sectionheader">
          <a name="vis"></a>6.6 Visualisation of Protein Molecules</p>
          <p>Many protein structure viewers use atomic coordinates
           and secondary structure information directly from the PDB
           (these include <?php $Url_id="112"; $Link_naam="RasMol"; include ('get_link.php'); ?>,
  <?php $Url_id="113"; $Link_naam="QuickPDB"; include ('get_link.php'); ?> and
 <?php $Url_id="114"; $Link_naam="Deep View"; include ('get_link.php'); ?>).
 Others use their own format (<em>e.g</em>.,
  <?php $Url_id="115"; $Link_naam="Cn-3D"; include ('get_link.php'); ?>).
  Each has various display options, to highlight different residues or residue
  types, display the atoms in different styles, <em>etc</em>., as shown in
  Fig 6.4. Programs such as Cn-3D and QuickPDB allow users to highlight areas
  of interest, which can be useful for mapping known motifs to 3D space (<em>e.g</em>.,
  conserved regions in some families surround the active site, even if they
  are not close together in sequence).</p>
          <table width="80%" align="center" cellspacing="8">
           <tr valign="top">
            <td><a href="javascript:openxlink('ch6/fig6-4.html','left')"><img src="ch6/thumbs/fig6-4.gif" width="150" height="102" border="0" class="imgborder"></a></td>
            <td><p class="photocaption">Fig 6.4. Different protein
              structure viewers displaying the ubiquitin-like signalling
              protein, Nedd8 (PDB ID: 1NND).</p>
              <p class="small">[click thumbnail for full size image]</p></td>
           </tr>
          </table>
<p>Some programs are more than just viewers. For example, Deep View has functions
 for superposition of different structures, virtual amino acid mutations, interfacing
 with Swiss-Model, and so on (see <a href="ch7_aims.php">Chapter 7</a>). There are several advanced features
 for structural biologists, including importing electron density maps to build
 structures, and various integrated modelling tools for energy minimisation.
</p>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch6_info_5.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'>&nbsp;</p></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch6_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch6_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch6_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch6_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch6_refs.php" alt="References" title="References">
 </map>
</div>
<script>awmSelectedItem=9</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
