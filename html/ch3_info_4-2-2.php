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
<a name="TOC"></a>
<blockquote>
 3.1&nbsp;&nbsp;<a href="ch3_info.php">Protein Families</a><br>
 3.2&nbsp;&nbsp;<a href="ch3_info_2.php">Single motif-based Databases</a><br>
 3.3&nbsp;&nbsp;<a href="ch3_info_3.php">Domain-based databases</a><br>
  3.4&nbsp;&nbsp;<u>Multiple-motif databases</u><br>
  &nbsp;&nbsp;&nbsp;&nbsp;3.4.1&nbsp;&nbsp;<a href="ch3_info_4-1.php">Blocks</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4.1.1&nbsp;&nbsp;<a href="ch3_info_4-1-1.php">Sequence logos</a><br>

	&nbsp;&nbsp;&nbsp;&nbsp;3.4.2&nbsp;&nbsp;<a href="ch3_info_4-2.php">PRINTS</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4.2.1&nbsp;&nbsp;<a href="ch3_info_4-2-1.php">Challenges for protein family analysis</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4.2.2&nbsp;&nbsp;<u>Database format</u><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4.2.3&nbsp;&nbsp;<a href="ch3_info_4-2-3.php">Fingerprint profiles</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4.2.4&nbsp;&nbsp;<a href="ch3_info_4-2-4.php">Interrogating PRINTS</a><br>
 3.5&nbsp;&nbsp;<a href="ch3_info_5.php">InterPro</a>
</blockquote>
<p class="sectionheader">
 <a name="fingerentry"></a>3.4.2.2 Database format</p>
<p>Within PRINTS, all fingerprints, 
 their match statistics, their family annotations and technical details of how 
 they were derived are stored in a <a href="ch3/printsentrypopup.htm" target="new">single 
 file</a>. For each entry, summaries (and full lists) of both complete and partial 
 fingerprint matches in the given version of SWISS-PROT/TrEMBL are provided. 
</p>
<p><a name=6></a>Query 
 sequences can by searched against the whole of PRINTS, or against individual
  fingerprints by means of the <?php $Url_id="54"; $Link_naam="fingerPRINTScan"; include ('get_link.php'); ?> When
 searching PRINTS, <a href="ch3/ffplots.htm" target="new">results</a> 
 are returned on different levels: the first offers the program's &quot;best
  guess&quot;, based on the highest-scoring full or partial fingerprint match;
  the next level offers the ten top-scoring hits, which of course will include
  
 the best guess (this allows users to judge if the program has missed anything
  significant); and a further level provides the full raw search results, rank-ordered
  
 according to score. To gain a better appreciation of what these results might
  mean, it is helpful to plot the motifs in the form of a fingerprint 'profile',
  
 which provides an at-a-glance view of a result and a ready means of judging
  if a result is likely to be real&#8212;<i>i.e</i>., if several motifs from
  a single fingerprint match strongly (above the level of noise) and in the
  correct order, 
 with appropriate distances between them, this is likely to be a positive diagnosis.
   E-values provide the measure of significance of multiple motif matches (follow
  
 the link for further information on the fingerPRINTScan <?php $Url_id="55"; $Link_naam="statistics"; include ('get_link.php'); ?>.</p>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch3_info_4-2-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch3_info_4-2-3.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
