<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 10 - Investigating the human genome: Instructions Step 2</title>
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch10.jpg); background-repeat: no-repeat"></td>
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

<p>Here, you will seek potential genes within your sequence using gene prediction algorithms that search for possible ORFs.</p>
<p>i) Visit the
 <?php $Url_id="139"; $Link_naam="GeneMark"; include ('get_link.php'); ?> submission page. Under <em>Species Matrix Selection</em> select <em>Human 49(4)</em>.
For <em>Selecting ORF's, Selecting Regions</em> and <em>Selecting Exons, </em>select <em>protein
translations</em>. Upload the genomic sequence and Run GeneMark. </p>
<p>ii) When results are returned, click on <em>region output</em> and save the
 predicted ORFs as a text file. </p>
<p>iii) Now visit the
  <?php $Url_id="140"; $Link_naam="GENSCAN"; include ('get_link.php'); ?> submission page. Paste your sequence into the input box and supply your email
 address. Make sure you choose <em> HumanIso </em> as parameter file. Examine your results and save them in a text file. </p>
<p>iv) Examine and compare the two sets of results.</p>
<table width="75%" border="1">
 <tr>
  <td><strong>Alternatives...</strong> <br>
   <?php $Url_id="201"; $Link_naam="MetaGene"; include ('get_link.php'); ?>, a package that exploits different parameters from a variety of gene prediction programs and combines them to obtain optimum results, may be useful for shorter sequences.
</td>
 </tr>
</table>
<br>
<p><em>Reflections...</em></p>
<ul>
 <li><em>How 
  does the average length of predicted ORFs compare in both sets of results? 
  </em></li>
 <li><em>Which 
  is longer, and why?</em></li>
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
  <area shape="rect" coords="6,4,39,18" href="ch10_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch10_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="138,3,200,18" href="ch10_refs.php" alt="References" title="References">
 </map> 

</div><script>awmSelectedItem=17</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>

