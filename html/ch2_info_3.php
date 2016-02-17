<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 2 - Sequence similarity searches: Information</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch2.jpg); background-repeat: no-repeat"></td>
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
 2.1&nbsp;&nbsp;<a href="ch2_info.php">The amino acid codes and their properties</a><br>
 2.2&nbsp;&nbsp;<a href="ch2_info_2.php">Similarity scoring matrices</a><br>
 2.3&nbsp;&nbsp;<u>Heuristic algorithms</u><br>
 2.4&nbsp;&nbsp;<a href="ch2_info_4.php">Dynamic algorithms</a><br>
 2.5&nbsp;&nbsp;<a href="ch2_info_5.php">Similarity searching with BLAST</a><br>
 2.6&nbsp;&nbsp;<a href="ch2_info_6.php">PSI-BLAST</a>
</blockquote>
<p class="sectionheader">
 <a name="_Ref1382290"></a>2.3 Heuristic algorithms</p>
<p class=MsoNormal>Owing to the large amount of information stored in databases, 
 searching for the optimal alignment between a query sequence and target sequences 
 in a database can take a lot of time. As a result, heuristic algorithms have 
 been developed. Heuristic algorithms find a result quite close to the otimal match 
 in a much shorter period of time, by "ignoring" or "suppressing" 
 some, normally unlikely, possibilities. </p>
<p>For example, rather than doing a complete sequence alignment, the BLAST
alorithm narrows 
 down its search for similar regions in two sequences by focusing on high-scoring 
 "words" (see Fig 2.3), and then extending out from these. It uses 
 a more stringent threshold to find the high-scoring words, and then extends 
 out with a less stringent one.</p>
<p>Being heuristic doesn't mean that the algorithm won't find the best match -
this can 
 always be verified by using a more powerful non-heuristic method. The most 
 widely used database-search algorithms are FastA and BLAST, BLAST being the more popular
 of the two.</p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch2/fig2-3.html','left')"><img src="ch2/thumbs/fig2-3.gif" width="150" height="90" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 2.3. Schematic representation of how BLAST
    works.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<br><div align="center">
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch2_info_2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'><a href="ch2_info_4.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch2_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch2_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch2_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch2_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch2_refs.php" alt="References" title="References">
 </map> 
</div>
<script>awmSelectedItem=5</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
