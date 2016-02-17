<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 3 - Protein family analysis: Instructions Step 3</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch3.jpg); background-repeat: no-repeat">
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
         <td valign=top width=1 bgcolor="#336633"> 
          <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
         <td valign=top background="Graphics/background_content.gif">
          <table border=0 cellspacing=0 cellpadding=10 width="100%">
           <tr> 
            <td valign=top> 
<?PHP
include "instr_header.php";
?>



<p>i) To locate known signatures
  (groups of motifs), paste your full sequence into the 
	<?php $Url_id="40"; $Link_naam="Blocks"; include ('get_link.php'); ?> search
  form. Examine the summary table and match details/statistics - note which
  are multiple- and which are single-block matches. Follow the links to view
  database entries (including the blocks, block maps, logos, <em>etc.</em>) of significant
  hits. Repeat the process by switching the <i>Select database to search </i>menu
  to &quot;PRINTS database in Blocks format&quot;. </p>
<p>ii) Alternatively, paste
  your ID code (or full sequence) into the PRINTS 
	<?php $Url_id="41"; $Link_naam="FPScan"; include ('get_link.php'); ?> <em>search
  form</em>. Examine the match details and their statistics - follow the links
  to the fingerprint IDs to view the full database entries (including bibliographic
  information, family annotation, full and partial matches, <i>etc.</i>). Explore
  the links to the family relations.</p>
<p><i>NOTE: Record the PRINTS
   ID code(s) of significant matches.</i></p>
<p><i>Reflections...</i></p>
<p><i>Blocks:</i></p>
<ul>
 <li><i>How many matches
    did you retrieve? </i></li>
 <li><i>Are the matches
    significant? How do you judge this? (<a href="ch3_info_4-1.php#3">HINT</a>)</i></li>
 <li><i>How can you assess
    the degree of conservation of each position in a block? (<a href="ch3_info_4-1-1.php#log">HINT</a>)</i></li>
 <li><i>How do the results
    of the Blocks-format PRINTS and Blocks+ searches compare?</i></li>
</ul>
<p><i>PRINTS:</i></p>
<ul>
 <li><i>How many matches
    did you retrieve?</i></li>
 <li><i>Are the matches
    significant? How do you judge this? <i><i>(<a href="ch3_info_4-2-2.php#6">HINT</a>)</i></i></i></li>
 <li><i>Where does the matched
    fingerprint lie in the family hierarchy, (e.g., in </i>relation <i>to
    other family/superfamily/sub-family members)? Within extended hierarchies,
    how do the motifs differ between parent and child(ren)? (<a href="ch3_info.php">HINT</a>)</i></li>
 <li><i> How many complete
    and partial matches are recorded in the database? Where on your sequence
    are these motifs found? Where motifs are missing, do they have functional
    significance? (<a href="ch3_info_4-2-1.php">HINT</a>) </i></li>
 <li><i>In the database
    entry, are any false matches reported? How &quot;good&quot; do you think the
    fingerprint is?</i></li>
</ul>
<p><i>Overall:</i></p>
<ul>
 <li><i>Is there a difference
    between the locations of the matched signatures from PRINTS and Blocks?
    If so, why might this be? Does Blocks report the same number of conserved
    regions as PRINTS?</i></li>
 <li><i><i>How does <i>judging
      the significance of </i>single-motif methods differ from multiple-motif
      methods? (<a href="ch3_info_4-2.php">HINT</a>)</i></i></li>
 <li><i>Again, are the results
    building a consistent picture?</i> </li>
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
 </table>
 <p>&nbsp;</p></td>
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
<script>awmSelectedItem=6</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
