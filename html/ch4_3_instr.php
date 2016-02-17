<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 4 - Sequence alignment: Instructions Step 3</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch4.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%">
     <tr> 
      <td valign=top height=21> 
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_instr_aiiqr.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
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
         <td valign=top width=1 bgcolor="#336633"></td>
         <td valign=top background="Graphics/background_content.gif">
          <table border=0 cellspacing=0 cellpadding=10 width="100%">
           <tr> 
            <td valign=top> 
						<?php
include ('instr_header.php');
?>

<p>We will 
 now align some sequences using automatic programs from the table below. We recommend 
 you use the Web-based forms, but you may wish to download the applications. 
 </p>
<p>i) Choose 
 your input <a href="ch4/sequencespopup.htm" target="left">sequences</a> again.</p>
                                <p>ii) Load your sequences into an alignment program, 
                                  selecting different 
                                  options from the table below.</p>
<p>iii) Use the selected program to align the sequences, and compare your results 
 with those you generated manually. Save your alignment for future reference. 
 You could also explore, for example, T-COFFEE's further options, which include a feature to produce alignments by combining several different algorithms.</p>
<table border="1" cellpadding="1" cellspacing="3" >
 <tr>
  <td></td>
  <td>
   <center>
    <span class="tableheader"><b>automatic alignment tools</b></span>
   </center></td>
  <td>
   <center>
    <span class="tableheader"><b>platform requirements</b></span>
   </center></td>
 </tr>
 <tr>
  <td>
   <center>
    <span class="tableheader"><b>Web-based forms</b></span>
   </center></td>
  <td>
   <p align="center">CLUSTALW @
     <?php $Url_id="75"; $Link_naam="EBI"; include ('get_link.php'); ?> </p>
   <p align="center">T-COFFEE @
     <a target=right href="http://tcoffee.vital-it.ch/apps/tcoffee/index.html">SIB</a></p>
   <p align="center">DIALIGN @
     <?php $Url_id="79"; $Link_naam="Genomatrix"; include ('get_link.php'); ?> or
    <?php $Url_id="80"; $Link_naam="Pasteur"; include ('get_link.php'); ?>  </p></td>
  <td valign="middle">
   <p align="center">all browsers</p></td>
 </tr>
 <tr>
  <td>
   <center>
    <span class="tableheader"><b>applications</b></span>
   </center></td>
  <td>
   <p align="center">CLUSTALW (command line) or CLUSTALX (in a window) @
     <?php $Url_id="82"; $Link_naam="EBI"; include ('get_link.php'); ?>  </p>
   <p align="center">T-COFFEE @
     <?php $Url_id="71"; $Link_naam="CNRS"; include ('get_link.php'); ?> </p>
   <p align="center">DIALIGN @
     <?php $Url_id="84"; $Link_naam="Bielefeld"; include ('get_link.php'); ?> </p></td>
  <td>
   <p align="center">Windows/MacOS/UNIX</p>
   <p align="center">Windows/MacOS/UNIX</p>
   <p align="center">different UNIX systems only </p></td>
 </tr>
</table>
<p><br>
 <em>Reflections...</em></p>
<ul>
 <li><em>Do the alignments generated by the different packages differ? If so, 
  how and why? (<a href="ch4_info_4-1.php">HINT</a>) </em></li>
 <li><em>Do the automatically and manually-generated alignments differ? For example, 
  what features might indicate that one of them has been generated automatically? 
  (<a href="ch4_info_4.php">HINT</a>) </em></li>
 <li><em>What effect, if any, did T-COFFEE's option to include several different alignment algorithms have?</em></li>
</ul>



<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<p align='center'>&nbsp;</p></td><td>
		<p align='right'><a href="JavaScript:goNextStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_f2.gif',1)"><img name='next' src='Graphics/next.gif' width=49 height=49 border=0 alt=''></a></p></td></tr>
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
 </table></td>
   <td width="15" valign="top"><img src="Graphics/spacer.gif" width=15 height=1 align=bottom></td>
  </tr>
 </table>
 <p>&nbsp;</p></td>
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

