<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 6 - Fold classification: Instructions Step 4</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_f2.gif','Graphics/next_chapter_f2.gif')">
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
         <td valign=top width=1 bgcolor="#336633"> 
          <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
         <td valign=top background="Graphics/background_content.gif">
          <table border=0 cellspacing=0 cellpadding=10 width="100%">
           <tr> 
            <td valign=top> 
<?PHP
include "instr_header.php";
?>

<p>Here, 
 we will visualise the structure of your protein and become familiar with molecular 
 viewers and the PDB file format. </p>
<p>i) Follow 
 the link from PDBsum to the <em>RCSB PDB</em> entry. Use the embedded molecular viewers to explore the
 structure in 3D. <em>NOTE: Theoretical models are no longer available 
 from the main PDB directory. </em></p>
<p>ii) To 
 download the raw PDB file, return to the PDB entry and select the <em>Download 
 Structures</em> tab. Choose the uncompressed option. View the file in a text editor to get a feel for how the annotation 
 fields and atomic coordinates are encoded. </p>
<p>iii) There 
 are several PDB structure viewers and molecular visualisation packages available 
 for download. Some examples are listed below. </p>
<table border="0" cellpadding="1" cellspacing="10">
 <tr> 
  <td><p class="tableheader">Downloadable Molecular 
    Structure Viewers </p>
   <table width="100%" border="1" cellpadding="1" cellspacing="3">
    <tr valign="middle"> 
     <td> <center> 
        PDB 
        structure viewers
        </center></td>
     <td> <center> 
       <p>
<?php $Url_id="112"; $Link_naam="RasMol"; include ('get_link.php'); ?> and
<?php $Url_id="114"; $Link_naam="Deep View"; include ('get_link.php'); ?> </p>
      </center></td>
    </tr>
    <tr valign="middle"> 
     <td> <center> 
        <p>non-PDB 
         format viewer<br>
         (accepts files in an NCBI-specific format)</p>
      </center></td>
     <td> <center> 
       <p>
<?php $Url_id="115"; $Link_naam="Cn-3D"; include ('get_link.php'); ?> </p>
      </center></td>
    </tr>
   </table></td>
 </tr>
</table>
<p><em>Reflections...</em></p>
<ul>
 <li><em>How do the conserved motifs 
  relate to the structure? </em></li>
 <li><em>What functional inference, 
  if any, can you deduce from the relative positions of the conserved motifs 
  in 3D? E.g., do they congregate around an active site? (<a href="ch6_info_6.php">HINT</a>) 
  </em></li>
 <li><em>In the PDB file, what is the 
  name of the field used to store the 3D coordinates? (<a href="ch6_info.php">HINT</a>) 
  </em>
  </li>
</ul>



<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<div align="center"><form><input type="button" class="formbutton" name="goquiz" value="Go to quiz" onClick="goQuiz(6)" onMouseOver="this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.background='#D5E1ED'; this.style.color='#000060';"></form></div></td><td>
		<p align='right'><a href="JavaScript:goNextChapter()" onMouseOut="MM_swapImgRestore()" onClick="" onMouseOver="MM_swapImage('next_chapter','','Graphics/next_chapter_f2.gif',1);"><img name="next_chapter" src="Graphics/next_chapter.gif" width="68" height="49" border="0" alt=""></a></p></td></tr>
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
  <area shape="rect" coords="6,4,39,18" href="ch6_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch6_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch6_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch6_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch6_refs.php" alt="References" title="References">
 </map>

</div><script>awmSelectedItem=9</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
