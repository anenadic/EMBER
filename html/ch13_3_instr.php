<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 13 - Investigating sickle cell haemoglobin: Instructions Step 3</title>
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
<p>Here we will compare the retrieved sequences by creating a multiple alignment. 
 This will make the difference between the sickle cell sequence and the others 
 easy to spot.</p>
<p>i) To generate the alignment, use NCLUSTALW. Select a set of 3 sequences, including 
 the sickle cell sequence (HSBETGLA) and the first haplotype (HSBETGLOA), by 
 clicking on the button next to the link to its EMBL entry. Ensure that the program 
 NCLUSTALW is selected (just next to the Launch button) and then click on the Launch 
 button.</p>
<p>ii) From the NCLUSTALW launch page, with the 3 sequences in view, click on 
 the <em>Launch </em>button. This will return a connecting <em>results </em>link, 
 taking you to the<em> List of Batch Jobs page. </em></p>
<p>iii) If your alignment is incomplete, refresh the page. Once complete, 
 click on the status icon to view the alignment. </p>
<p><em>NOTE: The job may appear to be in an undefined state, in which case again refresh the page until a result is returned.</em></p>
<p>iv) The 3 sequences should now be aligned. Where the aligned sequences are 
 identical, an * is placed under the alignment. Examine the results and note 
 that your haplotypes are nearly identical. Where the sickle cell sequence matches 
 the others, it matches well (as indicated by the *s). However, being much shorter, 
 the sickle cell sequence has many padding characters (-----) to bring equivalent 
 regions into the correct register.</p>
<p><em>Reflections...</em></p> 
<ul>
 <li><em>Into how many sections 
  is the mRNA sickle cell sequence split in order to align with the haplotype 
  sequences? How might you have guessed this number from information you read 
  in the EMBL annotation? (see STEP2, second Reflection)</em></li>
 <li><em>Ignoring ambiguity 
  codes (Y and N), what is the single difference between the sickle cell sequence 
  and the others?</em></li>
 <li><em>Which codon position 
  (from the start of the sequence) of the sickle cell sequence would this difference 
  affect? What amino acid would the codon encode in the haplotype sequences 
  and in the sickle cell sequence?</em></ul>
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

