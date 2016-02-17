<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 11 - Investigating the inositol phosphatase family: Instructions Step 2</title>
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch11.jpg); background-repeat: no-repeat"></td>
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
<p>Inositol polyphosphate 
 1-phosphatase (INPP) and inositol monophosphate phosphatase (MYOP) are enzymes 
 in the inositol signalling pathway that share similar catalytic activity. The 
 enzymes require metal ions for catalysis (Mg<sup>2+</sup> 
 is preferred) and are inhibited by Li<sup>+</sup>. This 
 small cation has been used in the treatment of bipolar disorders (manic depression) 
 for half a century. The INPP and MYOP enzymes have been postulated as targets 
 for the therapeutic action of lithium. 
	<p>Despite having similar 
 enzymatic properties, their sequence similarity is low. Here we will focus on 
 aligning the two sequences. 
	<p>i) Retrieve the sequences of both human enzymes
(
	 <?php $Url_id="150"; $Link_naam="MYOP_HUMAN"; include ('get_link.php'); ?> and
<?php $Url_id="151"; $Link_naam="INPP_HUMAN"; include ('get_link.php'); ?> ) in FASTA format and save them to a file. Visit the
<?php $Url_id="18"; $Link_naam="BLAST page"; include ('get_link.php'); ?> at NCBI and run a <em>Pairwise BLAST </em>of the two sequences. 
	<p>An alignment of human INPP and MYOP using the Needleman-Wunsch global alignment
	 algorithm, rather than BLAST's heuristic approach (see Chapter 2), is <a href="ch11/alignment-popup.htm" target="new">available</a> for
	 comparison. As can be seen, the alignment is not very good. Nevertheless,
	 from biological experimentation, it is known that the proteins are functionally
	 related.
  <p>ii) Go to the
    <?php $Url_id="144"; $Link_naam="PROSITE"; include ('get_link.php'); ?> homepage and, under <i>Tools for PROSITE</i>, click <i>ScanProsite</i> and
 then <i>Scan a sequence for the occurrence of PROSITE patterns.</i> Don't forget
 to <em>Exclude patterns with a high probability of occurrence. </em>Enter the
 INPP sequence in the box and scan the sequence for patterns. Repeat this for
 MYOP.</p>
  You will find the inositol 
monophosphatase signatures. Examine the family's documentation file by following 
its links. 
<p><i>Reflections...</i></p>
<ul>
	<li><i>Is BLAST able to identify any region of similarity between the two sequences?</i>
	<li><i>Looking at the pairwise 
  alignment, if one of them was a newly determined sequence, could you infer 
  homology based on this level of similarity?</i>
	<li><i><i><i>According to their Numerical Results, how reliable are the patterns obtained from PROSITE?</i> 
	</i></i>
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
