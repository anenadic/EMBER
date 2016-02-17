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
 3.1&nbsp;&nbsp;<u>Protein Families</u><br>
 3.2&nbsp;&nbsp;<a href="ch3_info_2.php">Single motif-based databases</a><br>
 3.3&nbsp;&nbsp;<a href="ch3_info_3.php">Domain-based databases</a><br>
  3.4&nbsp;&nbsp;<a href="ch3_info_4.php">Multiple-motif databases</a><br>
  3.5&nbsp;&nbsp;<a href="ch3_info_5.php">InterPro</a>
</blockquote>
<p class="sectionheader">
<a name="intro"></a>3.1 Protein 
 Families</p>
<p>To investigate relationships between 
 proteins, a variety of computational methods have been developed to detect patterns 
 of conservation in sets of aligned sequences, as illustrated in the following 
 <a target=left href="ch3/methods.htm">animation</a>. Multiple 
 alignments are a convenient starting point, as they tend to highlight conserved 
 regions, or motifs, that characterise particular families. If stored in a reference 
 database, these 'signatures' may be used to identify similar features in uncharacterised 
 sequences, such as those emerging from the many abundantly bountiful genome projects; 
 they are hence routinely employed as a first step towards deducing biological 
 function. </p>
<p>Understanding the relationships between 
 proteins is often not straightforward &#8212; when aligning increasingly divergent 
 sequences, the patterns of conservation change as the regions of similarity 
 become smaller and smaller. Ultimately, it can be difficult or impossible to 
 know if the alignment represents a single but highly divergent family with a 
 common function, or a superfamily composed of several closely-related but functionally 
 discrete families. This represents one of the major <a target=right href="ch3/challengeoffamilyanalysis.htm">challenges</a> 
 for function assignment <i>in silico</i>.</p>
<p>Broadly speaking, three main pattern-recognition 
 methods have been designed to tackle this problem: i) those that employ single 
 motifs (usually encoded as regular expressions); ii) those that exploit multiple 
 motifs (often encoded as fingerprints or blocks); and iii) those that use full 
 domain alignments (generally encoded as profiles or hidden Markov models). Each 
 of these methods has been used to create different types of reference database.</p>
 
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'>&nbsp;</p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'><a href="ch3_info_2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
