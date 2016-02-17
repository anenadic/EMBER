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
           6.1&nbsp;&nbsp;<a href="ch6_info.php">PDB</a><br>
           6.2&nbsp;&nbsp;<a href="ch6_info_2.php">PDB Summary</a><br>
           6.3&nbsp;&nbsp;<u>CATH</u><br>
           6.4&nbsp;&nbsp;<a href="ch6_info_4.php">SCOP</a><br>
           6.5&nbsp;&nbsp;<a href="ch6_info_5.php">EC-&gt;PDB</a><br>
           6.6&nbsp;&nbsp;<a href="ch6_info_6.php">Visualisation of Protein Molecules</a>          </blockquote>
					
					
          <p class="sectionheader">
          <a name="_Ref82742"></a>6.3 CATH</p>
          <p>
           <?php $Url_id="104"; $Link_naam="CATH"; include ('get_link.php'); ?> is a
 <?php $Url_id="105"; $Link_naam="hierarchical classification"; include ('get_link.php'); ?> of protein structural relationships derived using a combination of automatic
 and manual methods. CATH identifies different classes by means of a unique
 number (by analogy with the E.C. system for enzymes), as well as a descriptive
 name. The acronymn denotes: </p>
          <ul>
           <li>Class - the highest level of the classification, derived
            from overall secondary structure content and packing</li>
           <li>Architecture - describes the gross arrangement or orientation
            of secondary structures, independent of their connectivities</li>
           <li>Topology - relates both to the overall shape and connectivity
            of the secondary structures</li>
           <li>Homologous superfamily - clusters protein domains that
            share both sequence and structural similarity (and are
            hence believed to be homologous) </li>
          </ul>
          <p>In addition, a Sequence (S-level) subset clusters H-level
           structures on the basis of sequence identity. Domains in
           the same S-level have sequence identities &gt;35% (with
           at least 60% of the larger domain equivalent to the smaller),
           indicating highly similar structures. Fig 6.3 depicts a
           few examples of architectures recognised in CATH.</p>
          <table width="80%" align="center" cellspacing="8">
           <tr valign="top">
            <td><a href="javascript:openxlink('ch6/fig6-3.html','left')"><img src="ch6/thumbs/fig6-3.gif" width="150" height="116" border="0" class="imgborder"></a></td>
            <td><p class="photocaption">Fig 6.3. Examples of different
              architectures recognised in CATH. Pictures obtained
              from PDBsum.</p>
              <p class="small">[click thumbnail for full size image]</p></td>
           </tr>
          </table>
          
          <br>
          <table width='100%' border=0 cellspacing=0 cellpadding=6>
           <tr>
            <td>
             <p align='left'><a href="ch6_info_2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
            <td>
             <p align='center'>&nbsp;</p></td>
            <td>
             <p align='right'><a href="ch6_info_4.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
