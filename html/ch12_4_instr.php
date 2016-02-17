<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 12 - Investigating phylogenetic relationships in ABC transporter domains: Instructions Step 4</title>
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
<p>The aim here is to perform a <a href="ch12/phylogeny-defined.htm" target="new">phylogenetic
  analysis</a> on the Nod family. Though T-COFFEE has already produced a guide
  tree, you will now construct more robust trees from the alignment itself
  using
 <?php $Url_id="184"; $Link_naam="PHYLIP"; include ('get_link.php'); ?> (more information on PHYLIP is <a href="ch12/info-phylip.htm" target="new">available</a>). </p>
<p>i) On the Institut Pasteur's
  <?php $Url_id="184"; $Link_naam="PHYLIP"; include ('get_link.php'); ?> page, click on the sub-menu link: <em>Programs for molecular sequence data</em> -&gt; <em>Proteins </em>-&gt; <em>protdist
 advanced form</em>. Paste in the NBD alignment (or upload the <i>.aln</i> file)
 and insert your email address. Choose the <em>Jones-Taylor-Thornton </em><i> Model</i>,
 and run the job. Examine the output file (&quot;outfile&quot;), which contains
 the distance matrix produced from the alignment. </p>
<p><em>NOTE: at any stage, you can have results emailed to you by clicking on
  Job Summary -&gt;Save Job Files as MIME attachments. </em></p>
<p>ii) Return to the start and repeat (i) but this time, at the <em>protdist
  form</em>, under the <em>Bootstrap options</em>, choose 100 <em> data sets</em>,
  3 as <em>Random number seed </em>and check the <em>Perform a bootstrap before analysis</em> option.
  Results will be emailed to you. One of the emails will have the subject heading <em>access
  all protdist results URL</em>. Follow this link to proceed. </p>
<p>Copies of the <a href="ch12/protdist-results.htm" target="new">protdist results</a> are
 available to inspect (they can take up to an hour to run). <em>NOTE: If your
 results don't appear in your available time, proceed to (iii) by using the
 protdist outfile provided. </em></p>
<p>iii) Choose <em>Neighbour-Joining </em>on the drop down menu and <em>run the
  selected program on outfile</em>. At the <em>Neighbor-Joining</em> form under
  the <em>Bootstrap options</em>, choose 100 <em> data sets</em>, 3 as <em>Random
  number seed </em>and check the <em>Compute a consensus tree </em> and <em>Analyze multiple data sets (M)</em> options.
  Then <em>Run Neighbour</em>. Look at the output file (outfile) and the tree
  (outree) for both the normal results and the consensus. Be sure to save and
  examine them. </p>
<p>iv) Now repeat (ii) &amp; (iii) for the TMD alignment. </p>
<p><em>NOTE: At each of these steps, there were several options that we did not
  explore. Further details on these options can be found on the PHYLIP <?php $Url_id="185"; $Link_naam="information"; include ('get_link.php'); ?> page. </em></p>
<table width="75%" border="1">
 <tr>
  <td><strong>Alternatives...</strong> <br>
   Try
    <?php $Url_id="186"; $Link_naam="WebPHYLIP"; include ('get_link.php'); ?>.
    Here you must use the sequence conversion options to transform the CLUSTAL/FASTA
    ungapped alignments to PHYLIP-compatible ones (some CLUSTAL
    alignments may be problematic - so it is best to use FASTA format). <em><br>
   NOTE:WebPHYLIP has a different user interface from the Institut Pasteur
   service. </em>
<BR>
For offline work, try downloading <?php $Url_id="221"; $Link_naam="MEGA"; include ('get_link.php'); ?>.
</td>
 </tr>
</table>
<br>
<p><em>Reflections...</em></p>
<ul>
 <li><em>After distance matrix calculation, 
  in what way is the outfile from the bootstrapped-protdist different from the 
  original?</em></li>
 <li><em>After neighbour 
  joining, in the TMD consensus outfile, how many sets were included in the 
  consensus tree? How many were not? How confident are you in this tree?</em></li>
 <li><em>After neighbour 
  joining, in the NBD consensus outfile, how many sets were included in the 
  consensus tree? How many were not? How confident are you in this tree?</em></li>
 <li><em>After neighbour joining, in 
  the consensus outfiles, what do the numbers on the branch nodes indicate?</em></li>
 <li><em>With which alignment 
  has the phylogenetic analysis performed better? Is this surprising?</em></li></ul>
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

