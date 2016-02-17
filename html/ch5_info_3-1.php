<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 5: Sequence property profiles: Information</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch5.jpg); background-repeat: no-repeat"></td>
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
 5.1&nbsp;&nbsp;<a href="ch5_info.php">Physicochemical parameters and profiles</a><br>
 5.2&nbsp;&nbsp;<a href="ch5_info_2.php">Transmembrane helix prediction</a><br>
 5.3&nbsp;&nbsp;<u>Secondary structure profiles</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.1&nbsp;&nbsp;<u>Statistical and machine learning methods</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.2&nbsp;&nbsp;<a href="ch5_info_3-2.php">Jpred</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.3&nbsp;&nbsp;<a href="ch5_info_3-3.php">NNPREDICT</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.4&nbsp;&nbsp;<a href="ch5_info_3-4.php">NPS@PBIL consensus secondary structure prediction</a><br>
 5.4&nbsp;&nbsp;<a href="ch5_info_4.php">Tertiary structure prediction</a>

</blockquote>

<p class="sectionheader">
 <a name="rstat"></a>5.3.1 Statistical and machine
  learning methods </p>
<p><a name="nn"></a>Standard 
 methods include Chou-Fasman and GOR, which are based on observed amino acid 
 conformational preferences in non-homologous proteins. For example, GOR uses 
 all possible pair frequencies within a 17-residue window and cross-validates 
 on a database of 267 proteins, with a mean accuracy of 64.4% for a three state 
 prediction (<em>i.e</em>., helix, strand, turn/coil). Accuracy 
 is low because the database of non-homologous structures is orders of magnitude 
 too small to provide robust statistics. Machine learning techniques (such as 
 neural nets) use a different approach, whereby programs are &quot;trained&quot; 
 to recognise patterns in known structures; accuracy of these methods is ~70-75%. 
</p>
<p><a name="percent"></a>However, even 
 a method that might be claimed to be 70% reliable is of limited practical value 
 if, in a blind prediction, we do not know which 70% is correct. Thus, secondary 
 structure prediction tools are best used in conjunction with other approaches, 
 including other prediction methods, hydropathy profiles, accessibility plots, 
 and so on. If several algorithms trained on different datasets using different 
 methods agree, their consensus offers greater confidence in the result. Nevertheless, 
 the more methods used, the harder it can be, on occasion, to interpret the results. 
 For example, if 70% of methods predict a helical conformation and 30% predict 
 strand conformation, and all predictions are of slightly different length, it 
 is harder to draw firm conclusions, as illustrated in Fig 5.5 - is this a 
 helix or a strand, and how long is it? </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch5/fig5-5.html','left')"><img src="ch5/thumbs/fig5-5.gif" width="150" height="65" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 5.5. <font color="#0000FF">H</font>elical
    or <font color="#FF0000">e</font>xtended conformation?</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>

<br>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch5_info_3.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch5_info_3-2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch5_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch5_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch5_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch5_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch5_refs.php" alt="References" title="References">
 </map>
</div>
<script>awmSelectedItem=8</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
