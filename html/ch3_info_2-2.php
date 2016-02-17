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
 3.1&nbsp;&nbsp;<a href="ch3_info.php">Protein Families</a><br>
 3.2&nbsp;&nbsp;<u>Single motif-based Databases</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;3.2.1&nbsp;&nbsp;<a href="ch3_info_2-1.php">PROSITE</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2.1.1&nbsp;&nbsp;<a href="ch3_info_2-1-1.php">Database format</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2.1.2&nbsp;&nbsp;<a href="ch3_info_2-1-2.php">Database
 documentation</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;3.2.2&nbsp;&nbsp;<u>eMotif</u><br>

 3.3&nbsp;&nbsp;<a href="ch3_info_3.php">Domain-based databases</a><br>
  3.4&nbsp;&nbsp;<a href="ch3_info_4.php">Multiple-motif databases</a><br>
  3.5&nbsp;&nbsp;<a href="ch3_info_5.php">InterPro</a>
</blockquote>
<p class="sectionheader">
 3.2.2 eMOTIF </p>
eMotif is an automatically generated database of 'permissive' regexs (see below), derived 
 from motifs stored in Blocks and PRINTS. It does not provide annotation itself, 
 but links are provided back to the parent database entries. </p>
<p>Permissive regexs are those 
 in which alternative residues (<i>i.e</i>., residues not observed in the original 
 alignment) are tolerated at each position in a motif according to a set of prescribed 
 groupings (see Fig 3.5). </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch3/fig3-5.html','left')"><img src="ch3/thumbs/fig3-5.gif" width="150" height="59" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 3.5. eMOTIF substitution groups.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<p>These groups correspond to various 
  biochemical properties (<i>e.g</i>., charge, size), theoretically ensuring that 
  the resulting motifs have sensible biochemical interpretations (see Fig 3.6). 
  With this approach, families of regexs may be generated from the same motif, 
  depending on the nature of the groups used.</p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch3/fig3-6.html','left')"><img src="ch3/thumbs/fig3-6.gif" width="150" height="111" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 3.6. A Venn diagram representing amino acid
    groupings. </p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<p>This 
  technique was designed to be more flexible than the exact regex matching approach 
  encountered in PROSITE, but its inherent permissiveness brings with it a signal-to-noise 
  trade-off. In other words, the regexs have the potential to make more true matches, 
  but consequently also make more false ones. To address this problem, when searching 
  eMOTIF, different levels of stringency are provided from which to infer the 
  significance of matches. To this end, two <a href="ch3/emotifpopup.htm" target="new">statistics</a> are
  provided: an E-value and an associated random-hit probability. Matches are
  listed in descending order of significance&#8212;a threshold option allows users
  to filter results according to a given cut-off value.
</p>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch3_info_2-1-2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch3_info_3.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
