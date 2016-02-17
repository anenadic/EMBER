<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 13 - Investigating sickle cell haemoglobin: Instructions Step 4</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch13.jpg); background-repeat: no-repeat"></td>
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
<p>Here we will predict where various restriction enzymes would cut the sequences 
 you have compared in the region of their vital difference. If restriction enzymes 
 can be identified that cut the normal beta globin gene differently from the 
 sickle cell sequence, this could offer a method of detecting the sickle cell 
 mutation in a patient.</p>
<p>i) Return to the list of EMBL &beta; globin entries, by clicking on the <em>RESULTS</em> 
 tab at the top of the SRS page and selecting the corresponding search that generated 
 the list of sequences in STEP 2. Then click on the <em>Rerun Query</em> button to retrieve 
 the list of haplotypes plus the sickle cell mRNA.</p>
<p>ii) From the pull down menu just below the <em>Launch</em> button, select the 
 <em>Restrictionmap</em> option. Select the HSBETGLOA sequence by clicking on 
 the button next to the link to its EMBL entry. Invoke the restriction mapping 
 program by clicking on the <em>Launch</em> button. SRS offers to generate a 
 restriction map of the whole of HSBETGLOA. Instead, ask for the first 20 codons 
 of the first exon - you may need to refer to the HSBETGLOA annotation to find 
 out where this region is. Set the <em>begin</em> and <em>end </em>values accordingly. 
 Start the program by clicking on the <em>Launch</em> button, which will eventually 
 offer a list of its results. Open this link to a <em>new </em>window (right 
 click and save target as, or middle click, depending on your browser). </p>
<p>iii) To compute the restriction map for the equivalent 20 codons of the sickle 
 cell sequence, HSBETGLA, move back to your original window and return to the 
 Restrictionmap launch page (click on the browser's <em>back </em>button). The 
 simplest way to do this is to edit the relevant part of HSBETGLOA (a single 
 base pair) so that it looks like a non-ambiguous version of the sickle cell 
 sequence and to map that. </p>
<table align="center" cellpadding="0" cellspacing="0" bordercolor="cccccc">
 <tr> 
  <td><pre><p><span class="code">tcactagcaacctcaaacagacaccatggtgcatctgactcctg<font color="#FF0000"><strong>a</strong></font>ggagaagtctgccgt<br>841    851    861    871    881    891</span></p></pre></td>
 </tr>
 <tr> 
  <td><div align="center"> 
    <pre class="dnasequence">|
|
V</pre>
   </div></td>
 </tr>
 <tr> 
  <td><pre><p><span class="code">tcactagcaacctcaaacagacaccatggtgcatctgactcctg<font color="#0000FF"><strong>t</strong></font>ggagaagtctgccgt<br>841    851    861    871    881    891</span></p></pre></td>
 </tr>
</table>
<p>As before, change the begin and end values to stipulate only the first 20 coding 
 codons be mapped. Scroll down to the appropriate codon and make the required 
 edit. Now click on the <em>Launch</em> button. </p>

<p>Examine the two restriction maps you've generated. <em>NOTE: Start by looking 
 at the &quot;Linear maps of the sequence&quot;, which are at the bottom of the 
 outputs. The differences between the two maps are the important things to spot 
 and understand.</em><br>
</p>
<p><em>Reflections...</em></p>
<ul>
 <li><em>What single difference is 
  there between the amino acid translations of the two maps?</em></li>
 <li><em>Are there enzymes that will 
  cut the sickle cell sequence but will not cut the haplotype sequence?</em></li>
 <li><em>Are there enzymes that will 
  cut the haplotype sequence but will not cut the sickle cell sequence?</em></li>
 <li><em>How might you use the fact 
  that an enzyme cuts one version of the sequence but not the other to test 
  for sickle cell anaemia?</em><br>
	
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
  <area shape="rect" coords="6,4,39,18" href="ch13_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch13_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="138,3,200,18" href="ch13_refs.php" alt="References" title="References">
 </map> 
</div><script>awmSelectedItem=20</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>

