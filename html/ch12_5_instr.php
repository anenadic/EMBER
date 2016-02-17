<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 12 - Investigating phylogenetic relationships in ABC transporter domains: Instructions Step 5</title>
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
 <tr> <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch12.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%">
     <tr> 
      <td valign=top height=21> 
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_instr_air.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
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
<p>Having constructed a tree 
 in plain text (dnd) format, the aim is to visualise it. Several <a href="ch12/info-draw.htm" target="new">programs</a> 
 are available for this purpose. </p>
<p>i) In PHYLIP, having made 
 the tree, <span lang=EN-US>the results page should give the <i>Drawgram</i> 
 option in the dropdown menu - choose it and follow the link. </span></p>
<p><span lang=EN-US> If you 
 have lost the tree results page and if you have saved the files in the previous 
 step, go back to the PHYLIP starting menu and click on: <em>Other programs -&gt; 
 Drawgram advanced form</em>. Then upload the .dnd file and input your email 
 address. </span></p>
<p><span lang=EN-US>ii) Go to the <em>Tree style</em> drop-down menu and choose <em>phenogram</em>. </span><span lang=EN-US>Go
  to the <em>Which plotter or printer will the tree be drawn on</em> drop-down
  menu to choose a compatible format for your computer system (<em>e.g.,</em> for
  Windows, use MS-windows Bitmap, or if
 <?php $Url_id="187"; $Link_naam="Ghostview"; include ('get_link.php'); ?> is installed, use any of the PostScript options). Then <em>Run Drawgram</em>. </span></p>
<p><span lang=EN-US>iii) To draw an unrooted tree, use the PHYLIP program <i>drawtree</i> instead
  of drawgram, also accessible from the starting menu.</span> </p>
<table width="75%" border="1">
 <tr>
  <td><strong>Alternatives...</strong> <br>
   Try the following web services
     <li>
      <?php $Url_id="188"; $Link_naam="Phylodendron"; include ('get_link.php')?>;</li>
     <li><span lang=EN-US>CMBI's PHYLIP tree-drawing
        <?php $Url_id="190"; $Link_naam="program"; include ('get_link.php'); ?> </span></li>
<br>Or, for offline work, try downloading
	<li>
	<?php $Url_id="222"; $Link_naam="TreeView"; include ('get_link.php'); ?></li>
		<li>
		<?php $Url_id="223"; $Link_naam="TreeExplorer"; include ('get_link.php'); ?></li>	
    </td>
 </tr>
</table>
<p><i><span lang=EN-US>Reflections... 
 </span></i></p>
<ul>
 <li><i><span lang=EN-US>How 
  do different types of tree compare? What is the main difference between rooted 
  and unrooted trees? </span></i></li>
 <li><i><span lang=EN-US>How many clusters 
  are observed within the trees? What do the clusters indicate about the associated 
  sequences? </span></i></li>
 <li><i><span
lang=EN-US>Which two sequences are sepearated by the greatest evolutionary distance? 
  </span></i></li>
</ul>
<p><em>General Questions: </em></p>
	<ul>
 <li><i>Do the trees of the 
  TMD and NBD domains appear similar? Whether they do or not, why might this 
  be so? </i></li>
 <li><i>What can you deduce 
  about evolutionary relationships in this family of ABC transporters? </i></li>
 <li><i>What conclusions 
  can you draw on the nature of evolution in domain-based families? </i></li>
</ul>

	
<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<p align='center'>&nbsp;</p></td><td>
		<p align='right'><a href="JavaScript:goNextChapter()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next_chapter','','Graphics/next_chapter_f2.gif',1)"><img name="next_chapter" src="Graphics/next_chapter.gif" width="68" height="49" border="0" alt=""></a></p></td></tr>
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
  <area shape="rect" coords="6,4,39,18" href="ch12_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch12_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,3,199,18" href="ch12_refs.php" alt="References" title="References">
 </map> 

</div><script>awmSelectedItem=19</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>

