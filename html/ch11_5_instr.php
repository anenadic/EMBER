<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 11 - Investigating the inositol phosphatase family: Instructions Step 5</title>
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
?><p>Here we will search the PRINTS database for relevant entries. 
 </p>
<p>i) Go to the
 <?php $Url_id="147"; $Link_naam="PRINTS"; include ('get_link.php'); ?> homepage and search the database <em>By text </em>for phosphatase.</p>
<p> Apparently, PRINTS contains a fingerprint for the inositol 
 phosphatase/fructose-1,6-bisphosphatase family (ID: INFBPHPHTASE, Accession: 
 PR00377). Click on INFBPHPHTASE, the identifier for the INPP/F16P family to 
 obtain the data file, which contains database and literature references, documentation 
 and the motifs. Study these. There are also separate fingerprints for the INPP 
 family (INOSPHPHTASE, PR00378) and the fructose-1,6-bisphosphatase family (FBPHPHTASE, 
 PR00115). Examine these. </p>
                                <p>ii) Go back to the PRINTS homepage and scan 
                                  the sequence of F16P_HUMAN by following the 
                                  link to the <em>NEW FingerPRINTScan</em> package 
                                  (under <i>PRINTS search</i>) and then <em>FPScan</em>. 
                                  Write down the e-values of the highest scoring 
                                  fingerprints. <i>NOTE: the program accepts SWISS-PROT 
                                  sequence identifiers</i>. </p>
                                <p>When viewing the highest scoring fingerprints, 
                                  click on <em> relations.</em> This shows that 
                                  F16P and INPP are subfamilies of the INPP/F16P 
                                  family. </p>
                                <p>iii) Repeat ii for MYOP_HUMAN. Compare the e-value of the INFBPHPHTASE 
 fingerprint with that obtained by F16P_HUMAN. <i>NOTE: look at the final motifs 
 of this fingerprint</i>. </p>
<p>iv) Repeat ii for INPP_HUMAN. Compare the e-values of the INOSPHPHTASE 
 fingerprint with that obtained by MYOP_HUMAN. </p>
<p><em>Reflections...</em></p>
<ul>
 <li><em>For the three family 
  signatures (FBPHPHTASE, INFBPHPHTASE, INOSPHPHTASE), how many motifs do each 
  contain? How long are these motifs on average?</em></li>
 <li><em>From the annotation 
  and Summary Information, what can you tell about the relative diagnostic performance 
  of the INPP/F16P family signature?</em></li>
 <li><em>What is the significance 
  of other fingerprints in the "ten top scoring fingerprints" listed by FPScan?</em></li>
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

