<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 12 - Investigating phylogenetic relationships in ABC transporter domains: Instructions Step 1</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_chapter_f2.gif')">
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


<p>Here we will retrieve the sequences necessary for this analysis, and browse 
 some of the annotation.</p>
<p>i) Retrieve the sequences 
 from the 
<?php $Url_id="5"; $Link_naam="SWISS-PROT/TrEMBL"; include ('get_link.php'); ?> links below, or from our server 
(<a href="ch12/files/tmd.fasta.txt" target="left">TMD</a> &amp;
<a href="ch12/files/nbd.fasta.txt" target="right">NBD</a>). </p>
<p>
ii) Inspect some of their annotations (especially the feature tables) 
 to learn about some of the family characteristics. </p>

<table border=1 cellspacing=3 cellpadding=1 align="center" width="75%">
 <tr valign="middle"> 
  <td width=93 height="35" class="Normal"> <p align="center" class="tableheader"><b>DOMAIN</b></p></td>
  <td width=658 height="35" align="center" class="Normal"> <p class="tableheader"><b>SWISS-PROT/TrEMBL 
    entries</b></p></td>
 </tr>
 <tr valign="top"> 
  <td class="Normal"> 
   <p align="center" class="tableheader"><b>TMD</b></p></td>
  <td width=658 class="Normal"> <ul>
    <li>NODJ: 
<?php $Url_id="152"; $Link_naam="NODJ_AZOCA"; include ('get_link.php'); ?>,
<?php $Url_id="153"; $Link_naam="NODJ_BRAJA"; include ('get_link.php'); ?>,
<?php $Url_id="154"; $Link_naam="NODJ_RHIGA"; include ('get_link.php'); ?>,
<?php $Url_id="155"; $Link_naam="NODJ_RHILV"; include ('get_link.php'); ?>,
<?php $Url_id="156"; $Link_naam="NODJ_RHIME"; include ('get_link.php'); ?>,
<?php $Url_id="157"; $Link_naam="NODJ_RHIS3"; include ('get_link.php'); ?> </li>
    <li>KpsM:
<?php $Url_id="158"; $Link_naam="KPMS1_ECOLIX"; include ('get_link.php'); ?>,		
<?php $Url_id="159"; $Link_naam="KPMS5_ECOLIX"; include ('get_link.php'); ?>,
<?php $Url_id="160"; $Link_naam="O51864"; include ('get_link.php'); ?>,
<?php $Url_id="161"; $Link_naam="P73974"; include ('get_link.php'); ?>,
<?php $Url_id="162"; $Link_naam="Q93PP3"; include ('get_link.php'); ?> </li>
    <li>BexB&amp;C:
<?php $Url_id="163"; $Link_naam="BEXC_HAEIN"; include ('get_link.php'); ?>,		
<?php $Url_id="164"; $Link_naam="BEXB1_HAEIN"; include ('get_link.php'); ?>,
<?php $Url_id="165"; $Link_naam="BEXB2_HAEIN"; include ('get_link.php'); ?> </li>
    <li>CtrB&amp;C: 
     
<?php $Url_id="166"; $Link_naam="CTRB_NEIMA"; include ('get_link.php'); ?>,		 
<?php $Url_id="167"; $Link_naam="CTRB_NEIMB"; include ('get_link.php'); ?>, 
<?php $Url_id="168"; $Link_naam="CTRC_NEIMA"; include ('get_link.php'); ?>, 
<?php $Url_id="169"; $Link_naam="CTRC_NEIMB"; include ('get_link.php'); ?> </li>
   </ul></td>
 </tr>
 <tr valign="top"> 
  <td class="Normal"> 
   <p align="center" class="tableheader"><b>NBD</b></p></td>
  <td width=658 class="Normal"> <ul>
    <li>NODI: 
<?php $Url_id="170"; $Link_naam="NODI_AZOCA"; include ('get_link.php'); ?>,		
<?php $Url_id="171"; $Link_naam="NODI_BRAJA"; include ('get_link.php'); ?>,
<?php $Url_id="172"; $Link_naam="NODI_RHIGA"; include ('get_link.php'); ?>,
<?php $Url_id="173"; $Link_naam="NODI_RHILV"; include ('get_link.php'); ?>,
<?php $Url_id="174"; $Link_naam="NODI1_RHIME"; include ('get_link.php'); ?>,
<?php $Url_id="175"; $Link_naam="NODI_RHIS3"; include ('get_link.php'); ?> </li>
    <li>KST:
<?php $Url_id="176"; $Link_naam="KST1_ECOLI"; include ('get_link.php'); ?>,
<?php $Url_id="177"; $Link_naam="KST5_ECOLI"; include ('get_link.php'); ?>,
<?php $Url_id="178"; $Link_naam="P73975"; include ('get_link.php'); ?>,
<?php $Url_id="179"; $Link_naam="Q93PP2"; include ('get_link.php'); ?>,
    </li>
    <li>BEXA: 
<?php $Url_id="180"; $Link_naam="BEXA_HAEIN"; include ('get_link.php'); ?> </li>
    <li>CTRD: 
<?php $Url_id="181"; $Link_naam="CTRD_NEIMA"; include ('get_link.php'); ?>,		
<?php $Url_id="182"; $Link_naam="CTRD_NEIMB"; include ('get_link.php'); ?> </li>
   </ul></td>
 </tr>
</table>
<p><em>Reflections... </em></p>
<ul>
 <li><em>From the annotation and feature table information, what are the differences 
  between the two domains?</em></li>
</ul>

<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goStep('ch11_7')" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous_chapter','','Graphics/previous_chapter_f2.gif',1)"><img name="previous_chapter" src="Graphics/previous_chapter.gif" width="85" height="49" border="0" alt=""></a></p></td><td>
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
