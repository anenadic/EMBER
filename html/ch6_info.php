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
           6.1&nbsp;&nbsp;<u>PDB</u><br>
&nbsp;&nbsp;&nbsp;&nbsp;6.1.1&nbsp;&nbsp;<a href="ch6_info_1-1.php">Growth of the PDB</a><br>
           6.2&nbsp;&nbsp;<a href="ch6_info_2.php">PDB Summary</a><br>
           6.3&nbsp;&nbsp;<a href="ch6_info_3.php">CATH</a><br>
           6.4&nbsp;&nbsp;<a href="ch6_info_4.php">SCOP</a><br>
           6.5&nbsp;&nbsp;<a href="ch6_info_5.php">EC-&gt;PDB</a><br>
           6.6&nbsp;&nbsp;<a href="ch6_info_6.php">Visualisation of Protein Molecules</a>          </blockquote>
					
					
          <p class="sectionheader">
          <a name="pdb"></a>6.1 PDB</p>
          <p>The
            <?php $Url_id="7"; $Link_naam="Protein Data Bank"; include ('get_link.php'); ?> (PDB) is the principal repository of biological macromolecule structures. These
 are derived from a number of different
 <?php $Url_id="98"; $Link_naam="experimental techniques"; include ('get_link.php'); ?> (under the Materials and Methods section))including electron, x-ray and neutron diffraction, and NMR. The PDB is maintained
 by a non-profit consortium, termed the
 <?php $Url_id="99"; $Link_naam="Research Collaboratory for Structural Bioinformatics"; include ('get_link.php'); ?> (RCSB). Several
 <?php $Url_id="100"; $Link_naam="mirrors"; include ('get_link.php'); ?> are available worldwide from which PDB entries may be viewed and downloaded.</p>
          <p>Stored in a text format
            PDB files contain a 'header' and a main body, which stores
            the atomic coordinates of all the resolved atoms
            in the structure. The header includes the following details:</p>
          <ul>
           <li>information on the protein, organism, <em>etc</em>. </li>
           <li>literature citations</li>
           <li>protein sequence (which may be different from those
            found in sequence databases, <em>e.g</em>., if the protein
            has been engineered to facilitate crystallisation)</li>
           <li>the method by which the structure was obtained</li>
           <li>crystal packing and refinement information </li>
           <li>secondary structure information (<em>e.g</em>., helix
            from residues 13-25, turn from residues 26-30, <em>etc</em>.)</li>
          </ul>
          <p>Sections of a typical PDB file are illustrated in Fig
           6.1. </p>
          <table width="80%" align="center" cellspacing="8">
           <tr valign="top">
            <td><a href="javascript:openxlink('ch6/fig6-1.html','left')"><img src="ch6/thumbs/fig6-1.gif" width="150" height="113" border="0" class="imgborder"></a></td>
            <td><p class="photocaption">Fig 6.1. Sections of a typical
              PDB file, 1ADB, illustrating (A) citation, (B) secondary
              structure and (C) atomic coordinate lines.</p>
              <p class="small">[click thumbnail for full size image]</p></td>
           </tr>
          </table>
          
          <br>
          <table width='100%' border=0 cellspacing=0 cellpadding=6>
           <tr>
            <td>
             <p align='left'>&nbsp;</p></td>
            <td>
             <p align='center'>&nbsp;</p></td>
            <td>
             <p align='right'><a href="ch6_info_1-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
