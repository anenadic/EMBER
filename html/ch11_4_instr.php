<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 11 - Investigating the inositol phosphatase family: Instructions Step 4</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_f2.gif')">
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
 <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch11.jpg); background-repeat: no-repeat"></td>
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
<p>Fructose 1,6-bisphosphatase
(
 <?php $Url_id="146"; $Link_naam="F16P1_HUMAN"; include ('get_link.php'); ?> ) is an enzyme in the gluconeogenic pathway. Like INPP/MYOP, it requires metal
 ions for catalysis and is inhibited by lithium. Furthermore, crystallographic
 studies show that F16P has a similar fold to INPP/MYOP. This similarity in
 activity and structure suggest the proteins diverged from a common ancestor. </p>
<p>Here we will align the sequences with CLUSTALW. </p>
<p>i) Make a multiple sequence alignment of F16P, INPP and MYOP using
. <i>NOTE: you can get the sequences in one file <a href="ch11/files/HUMAN.txt" target="new">here</a></i>. </p>
<p>ii) Scan the sequence of 
 human fructose 1,6-bisphosphatase for PROSITE patterns. <em>NOTE: </em><i> ScanProsite 
 also accepts SWISS-PROT sequence identifiers (e.g., F16P_HUMAN)</i></p>
<p>There is no PROSITE pattern 
 that can describe common sequence features of the three enzymes. If the regular 
 expressions for the INPP family were relaxed to also include the F16P family, 
 the patterns would pick up more false positives. The same holds for the F16P 
 family signature. This, of course, does not mean there is no pattern - the "signal" 
 is probably too weak because the sequences are too distantly related to be described 
 by a regular expression. </p>
<p><em>Reflections...</em></p>
	<ul>
 <li><em>Can you find a conserved 
  region in the multiple sequence alignment (i.e., common to all sequences)?</em></li>
</ul>

	

<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
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
  <area shape="rect" coords="6,4,39,18" href="ch11_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch11_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,199,17" href="ch11_refs.php" alt="References" title="References">
 </map> 

</div><script>awmSelectedItem=18</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
