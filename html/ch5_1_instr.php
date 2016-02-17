<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 5: Sequence property profiles: Instructions Step 1</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_chapter_f2.gif')">
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
<td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch5.jpg); background-repeat: no-repeat"></td>
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

<p>In the following steps, we will calculate a range of physicochemical parameters
 and plot various physicochemical profiles.</p>
<p>i) To calculate a pre-defined set of physicochemical parameters for your protein
 (including, molecular weight, theoretical pI, amino acid and/or atomic composition,
 and so on), paste your sequence into the
  <?php $Url_id="88"; $Link_naam="ProtParam"; include ('get_link.php'); ?> <em>form</em>. </p>
<p>ii) To view physicochemical profiles for your protein, paste your sequence
 into the
  <?php $Url_id="90"; $Link_naam="ProtScale"; include ('get_link.php'); ?> <em>form</em>. Generate a variety of profiles using different options from
  the list, such as percentage of accessible residues, Kyte &amp; Doolittle
  hydrophobicity, average flexibility, and so on - note that only one calculation
  will be performed at a time. Adjust the window length and its weight <a href="ch5/window.htm" target="new">parameters</a> to
  see how this affects individual profiles. </p>
<p><em>Reflections...</em></p>
<p><em>ProtParam:</em></p>
<ul>
 <li><em>What is the calculated molecular 
  weight of your protein? How are glycosylation sites likely to influence this? 
  (<a href="ch5_info_1-1.php">HINT</a>)</em></li>
 <li><em>Is your protein charged, or 
  perhaps hydrophobic in nature? What is its calculated pI? What conclusions 
  can you draw about the likely subcellular environment of your protein?</em></li>
</ul>
<p><em>ProtScale:</em></p>
<ul>
 <li><em>Having plotted a variety of 
  physicochemical parameters, do related scales give similar results? How reliable 
  do you think they are likely to be? </em></li>
 <li><em>Does a change of window length and 
  weight parameters significantly alter your result? What is the use of these 
  features? (<a href="ch5_info_1-2.php">HINT</a>)</em></li>
 <li><em>Are potential transmembrane 
  regions predicted by the hydrophobicity scales? Is there a consensus between 
  different scales? Why is it important to have a consensus? (<a href="ch5_info_1-2.php#_Ref25000">HINT</a>) 
  Are the results consistent with what you already know about your protein? 
  </em></li>
 <li><em>What conclusion can you draw 
  about the locations of the most flexible parts of the sequence? </em></li>
</ul>

<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goStep('ch4_4')" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous_chapter','','Graphics/previous_chapter_f2.gif',1)"><img name="previous_chapter" src="Graphics/previous_chapter.gif" width="85" height="49" border="0" alt=""></a></p></td><td>
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
  <area shape="rect" coords="6,4,39,18" href="ch5_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch5_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch5_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch5_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch5_refs.php" alt="References" title="References">
 </map>
</div><script>awmSelectedItem=8</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
