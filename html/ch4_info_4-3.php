<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 4: Sequence aligmnent: Information</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_page_f2.gif')">
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch4.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%"> <tr> 
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
       <table border=0 cellspacing=0 cellpadding=0 width="100%">
        <tr> 
          <td valign=top>
					
					<table width="100%" border=0 cellpadding=10 cellspacing=0>
        <tr> 
          <td valign=top> 
           <?PHP
include "info_header.php";
?>


<blockquote>
 4.1&nbsp;&nbsp;<a href="ch4_info.php">Multiple sequence alignment</a><br>
 4.2&nbsp;&nbsp;<a href="ch4_info_2-1.php">Alignment databases</a><br>
 4.3&nbsp;&nbsp;<a href="ch4_info_3.php">Manual sequence alignment tools</a><br>
 4.4&nbsp;&nbsp;<u>Automated sequence alignment tools</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;4.4.1&nbsp;&nbsp;<a href="ch4_info_4-1.php">CLUSTALW</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;4.4.2&nbsp;&nbsp;<a href="ch4_info_4-2.php">T-COFFEE</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;4.4.3&nbsp;&nbsp;<u>DIALIGN</u>
</blockquote>




<p class="sectionheader">
 <a name="_Ref151999"></a>4.4.3 DIALIGN</p>
<p> 
<?php $Url_id="72"; $Link_naam="DIALIGN"; include ('get_link.php'); ?> is an automatic alignment tool that neither compares single residues nor imposes 
 gap penalties, but instead constructs pairwise and multiple alignments by comparing 
 whole segments of the sequences. DIALIGN's strength is in the comparison of 
 sequences that share only local similarities. An alignment output from a DIALIGN 
 server is shown in Fig 4.9. Again, note the slightly different way in which 
 gaps have been inserted by comparison with CLUSTALW and T-COFFEE. </p>
 <table width="80%" align="center" cellspacing="8">
  <tr valign="top">
   <td><a href="javascript:openxlink('ch4/fig4-9.html','left')"><img src="ch4/thumbs/fig4-9.gif" width="150" height="139" border="0" class="imgborder"></a></td>
   <td><p class="photocaption">Fig 4.9. Results of a DIALIGN alignment (again,
     of the same sequences used in the CLUSTALW and T-COFFEE) result.</p>
     <p class="small">[click thumbnail for full size image]</p></td>
  </tr>
 </table>
 
 <br>
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch4_info_4-2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'>&nbsp;</p></td>
  </tr>
 </table></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch4_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch4_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch4_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch4_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch4_refs.php" alt="References" title="References">
 </map>
 
</div>
<script>awmSelectedItem=7</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
