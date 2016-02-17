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

function MM_openBrWindow(theURL,winName,features) { //v2.0
 window.open(theURL,winName,features);
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
 2.2&nbsp;&nbsp;<u>Similarity scoring matrices</u><br>
 2.3&nbsp;&nbsp;<a href="ch2_info_3.php">Heuristic algorithms</a><br>
 2.4&nbsp;&nbsp;<a href="ch2_info_4.php">Dynamic algorithms</a><br>
 2.5&nbsp;&nbsp;<a href="ch2_info_5.php">Similarity searching with BLAST</a><br>
 2.6&nbsp;&nbsp;<a href="ch2_info_6.php">PSI-BLAST</a>
</blockquote>
<p class="sectionheader">
 <a name="scoring"></a>2.2 Similarity Scoring Matrices</p>
<p> The <a href="ch1_aims.php">previous Chapter</a> dealt with an exact-matching method, where each 
 amino acid self-match was weighted equally. However, as Figure 2.1 illustrates, 
 amino acids can be grouped into different classes, based on their physicochemical 
 properties. Such amino acid classes can be said to contain 'similar' 
 amino acids. Analysis of mutation statistics in protein families allows the 
 likelihood of interchange between different amino acids to be quantified.
 As expected, amino acids that are physicochemically similar are 
 often more interchangeable than those that are not. Different scoring matrices 
 have been devised to describe, quantitatively, the 'similarity' of 
 each amino acid with respect to all others. Examples of such matrices include 
 the PAM and BLOSUM series. Such matrices may be used to help alignment/searching 
 algorithms score the overall similarity between two (or more) stretches of sequence. 
</p>
<p align="left"> Fig 2.2 depicts the log-odds form of the mutation data 
 matrix for PAM250. </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><p><a href="#"><img src="ch2/thumbs/fig2-2.gif" width="150" height="137" border="0" class="imgborder" onClick="MM_openBrWindow('ch2/fig2-2.html','','scrollbars=yes,resizable=yes,width=600,height=600')"></a></p></td>
  <td><p class="photocaption">Fig 2.2. Log-odds form of the mutation data matrix
    for PAM250.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<br><div align="center">
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch2_info.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'><a href="ch2_info_3.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
