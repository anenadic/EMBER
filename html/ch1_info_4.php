<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 1 - Sequence translation & identification: Information</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_f2.gif','Graphics/next_f2.gif')">
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch1.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_info_aiir.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
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
 1.1&nbsp;&nbsp;<a href="ch1_info.php">Translation</a><br>
 1.2&nbsp;&nbsp;<a href="ch1_info_2.php">Exact pattern matching</a><br>
 1.3&nbsp;&nbsp;<a href="ch1_info_3.php">Sequence databases</a> <br>
 1.4&nbsp;&nbsp;<u>ID codes and description lines</u><br>
 1.5&nbsp;&nbsp;<a href="ch1_info_5.php">The Swiss-Prot entry format</a> <br>
 1.6&nbsp;&nbsp;<a href="ch1_info_6.php">The FastA sequence format</a>
</blockquote>
<p class="sectionheader">
<a name="last"></a>1.4 ID codes 
             and description lines</p>
             <p>The Swiss-Prot and TrEMBL databases have entries structured in such a way 
 that they include an ID line (containing the protein identifier (ID), its status and sequence length) and a DE line (containing a description 
 of the protein), as seen in the image below. It is possible to distinguish 
 database entries from search results by the types of ID code returned. 
</p>
             
                          <p>Each database has its own unique form of ID. ID codes 
                            in Swiss-Prot take the form 'protein_source' (where source 
                            refers to the organism) - <em>e.g.</em>, the human blue-sensitive 
                            opsin entry has ID code OPSB_HUMAN, where 'OPSB' is an acronym referring to blue-sensitive opsin, and 'HUMAN' clearly identifies the
			    species; see Fig. 1.2). Originally, the ID 
                            codes and accession numbers of TrEMBL entries were the same, and only gained new 'people-friendly' ID codes 
                            when promoted to Swiss-Prot. Now, however, 
                            TrEMBL IDs also include the organism source - 
                            <em>e.g.</em>, G7PIM7_MACFA, where 'G7PIM7' is the acccession number, and 'MACFA' is short-hand code that identifies the species as <em>Macaca
			    fascicularis</em>, the crab-eating macaque. </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch1/fig1-2.html','left')"><img src="ch1/thumbs/fig1-2.gif" width="150" height="31" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 1.2. The top of a Swiss-Prot entry, with
    the ID and DE lines highlighted in green.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
             
<br><div align="center">
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch1_info_3.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'><a href="ch1_info_5.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch1_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch1_2_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch1_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,3,247,18" href="ch1_refs.php" alt="References" title="References">
 </map> 
 
<p> </p>
</div>

<script>awmSelectedItem=4</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>

