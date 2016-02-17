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
 3.2&nbsp;&nbsp;<a href="ch3_info_2.php">Single motif-based Databases</a><br>
 3.3&nbsp;&nbsp;<u>Domain-based databases</u><br>
  &nbsp;&nbsp;&nbsp;&nbsp;3.3.1&nbsp;&nbsp;<a href="ch3_info_3-1.php">The Profile library</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;3.3.2&nbsp;&nbsp;<u>Pfam</u><br>

 3.4&nbsp;&nbsp;<a href="ch3_info_4.php">Multiple-motif databases</a><br>
  3.5&nbsp;&nbsp;<a href="ch3_info_5.php">InterPro</a>
</blockquote>
<p class="sectionheader">
 <a name="pfam"></a>3.3.2 Pfam</p>
<p><?php $Url_id="50"; $Link_naam="Pfam"; include ('get_link.php'); ?> is a database in which domain families are stored in the form of Hidden Markov 
 Models (HMMs). These are conceptually very similar to profiles; they are statistically-based 
 probabilistic mathematical models, consisting of linear chains of match (M), 
 delete (D) or insert (I) states, that attempt to encode both the conserved regions 
 within sequence alignments and the gapped regions between them, as illustrated 
 in Fig 3.7.</p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch3/fig3-7.html','left')"><img src="ch3/thumbs/fig3-7.gif" width="150" height="86" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 3.7. Typical form of a hidden Markov model:
    M denotes a match state, <br>
    I an insertion and D a deletion.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<p><a name="annotationPfam"></a>Pfam 
 has two components, termed Pfam-A and Pfam-B. In Pfam-A, the HMMs are derived 
 from seed alignments that may have been produced automatically, but have been 
 manually checked; by contrast, Pfam-B is created fully automatically. All final 
 alignments are also generated fully automatically from the HMMs. The largely 
 automated methods used to create Pfam-A mean that the database offers little 
 annotation of its own. However, where possible, extensive use is made of the 
 hand-crafted <a href="ch3/pfampopup.htm" target="new">annotation</a> in InterPro 
 (which is mostly derived from PROSITE and PRINTS). Pfam-B only offers annotation 
 in the form of links to other databases. </p>
<p><a name=Pfamahit></a><a href="ch3/pfampopup2.htm" target="new">Results</a> 
 of searching Pfam are summarised in tabular form, and are followed by alignments
   of the query with the domain's consensus sequence. The significance of matches
  
 is denoted by means of
  <?php $Url_id="51"; $Link_naam="E-values"; include ('get_link.php'); ?>. <br>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch3_info_3-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch3_info_4.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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

