<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 2 - Sequence similarity searches: Instructions Step 1</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch2.jpg); background-repeat: no-repeat"></td>
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
             <p>To discover if your sequence has relatives, we are
              going to use BLAST.</p>
             <p>i) If you still have the UniProtKB/Swiss-Prot entry from the
              <a href="ch1_aims.php">previous chapter</a>, you will find a &quot;BLAST&quot; tab towards the top
              of the page. Click on this and run the search - if you have the option, select
	      only <i>~60
 residues</i> of your sequence (this is to reduce the load on the server - you
 can do this by simply deleting a section of the sequence within the BLAST
 search form).</p>
             <p>ii) Alternatively, if your UniProtKB/Swiss-Prot window has
              been closed, use
		<a target=left href="http://blast.ncbi.nlm.nih.gov/Blast.cgi">
NCBI BLAST</a>. Paste part of the sequence <i>(~60 residues)</i>
 into the <em>input box</em>. Also try using
 <a target=right href="http://www.ebi.ac.uk/Tools/sss/ncbiblast/"> BLAST at the EBI</a>. If the servers are busy, please be patient. When the search is complete,
 note the high-scoring matches. <i>NOTE: In some BLAST forms, remember to switch the program to BLASTp 
 and the database to nr before proceeding.</i> </p>
             <p><i> Reflections... </i> </p>
             <ul>
              <li><i>Does your protein belong to an extended family,
                or is the family quite small? </i></li>
              <li><i>Were any results difficult to diagnose, perhaps because they had poor scores or e-values? </i></li>
              <li><i>Did you see any differences upon changing
                the scoring matrix?</i></li>
              <li><i>How did the e-value help you decide which
                hits are important? (<a href="ch2_info_5.php">HINT</a>)</i></li>
              <li><i>Were there differences between the BLAST results from NCBI
                and EBI? </i></li>
              <li><i>If yes, why do you think this might be so? </i></li>
             </ul>
             <table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goStep('ch1_3')" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous_chapter','','Graphics/previous_chapter_f2.gif',1)"><img name="previous_chapter" src="Graphics/previous_chapter.gif" width="85" height="49" border="0" alt=""></a></p></td><td>
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
  <area shape="rect" coords="6,4,39,18" href="ch2_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch2_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch2_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch2_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch2_refs.php" alt="References" title="References">
 </map> 
</div>
<script>awmSelectedItem=5</script>

<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
