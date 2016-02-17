<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 12 - Investigating phylogenetic relationships in ABC transporter domains: Instructions Step 3</title>
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
<p>Sequence similarity amongst 
 the NBDs, even between proteins of different function from distantly related 
 species, is relatively high. As ATP binding and hydrolysis is thought to be 
 central to the mechanisms of transport of all ABC transporters, despite the 
 large variety of substrates, it follows that conservation in this part of the 
 sequence must be important for ATPase activity. </p>
<p>Conversely, for the TMDs, 
 significant similarity is only seen between members of a family or subfamily. 
 It seems that the sequence is able to vary significantly without destroying 
 the potential for transport. Between families, it is thought that the variation 
 in TMDs alters substrate specificity (reviewed in Higgins, 1992). For members 
 of the same family, however, the reason for variation is less clear. It may 
 confer subtly different specificities (as is the case with the MDR family, where 
 mutations in certain helices affect the type of drug exported), or may be linked 
 to the environment that different organisms inhabit and/or to different cellular 
 conditions. </p>
<p>Here we will use T-COFFEE 
 to align the NBD and TMD sequences (see <a href="ch4_aims.php">Chapter 4</a> for further information on 
 T-COFFEE). </p>
<p>i) First, visit
 <?php $Url_id="77"; $Link_naam="T-COFFEE"; include ('get_link.php'); ?> and submit <span lang=EN-US>the NBD sequences.</span><span lang=EN-US></span> <span lang=EN-US>Save
the resulting alignment (.aln). Follow the <em>Scores</em> link to assess its
quality.</span> <span lang=EN-US><em>NOTE: 
 If you have already downloaded and installed another alignment editor, you
may wish to view these alignments with it (see <a href="ch4_aims.php">Chapter
4</a>). </em></span></p>
<p>ii) <span lang=EN-US>Repeat 
 this process for the TMD sequences. </span></p>
<p>iii) In preparation for 
 the next step, you need to obtain a gap-free region of the alignment. Retrieve 
 examples of these alignments here: <a href="ch12/files/tmd.aligned.aln" target="left">TMD</a> 
 &amp; <a href="ch12/files/nbd.aligned.aln" target="right">NBD</a> in .aln format; 
 or <a href="ch12/files/tmd.aligned.fasta" target="left">TMD</a> &amp; <a href="ch12/files/nbd.aligned.fasta" target="right">NBD</a> 
 in FASTA format. <em>NOTE: Alternatively, you may create one yourself using 
 an editor. </em></p>
<p><i>Reflections... </i></p>
<ul>
 <li><i>With the NBDs, did 
  T-COFFEE align the P-loop properly? </i></li>
 <li><i>Which appears to 
  be more conserved, the NBDs or the TMDs? (HINT: <span lang=EN-US>The </span> 
  &quot;Scores&quot; option may be useful here) </i></li>
 <li><i>Is it surprising to find that one domain is better conserved than the other? Can you suggest 
  reasons why this might be so?</i></ul>
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
  <area shape="rect" coords="6,4,39,18" href="ch12_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch12_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,3,199,18" href="ch12_refs.php" alt="References" title="References">
 </map> 

</div><script>awmSelectedItem=19</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
