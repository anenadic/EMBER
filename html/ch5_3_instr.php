\<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 5: Sequence property profiles: Instructions Step 3</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_f2.gif','Graphics/next_chapter_f2.gif')">
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

<p>In this 
 step, we will use a variety of packages to generate secondary structure prediction 
 profiles for your protein.</p>
<p>i) Paste 
 your sequence into the 
<?php $Url_id="218"; $Link_naam="Jpredform"; include ('get_link.php'); ?> <em>input box</em>, making sure that the<b> </b><em>Skip searching PDB
before prediction</em><b> </b>option 
 is checked - you will find this under <em>Advanced options</em>. <em>NOTE: the calculation may take some time</em>. </p>
<p>ii) 
 Finally, explore the 
<?php $Url_id="95"; $Link_naam="NPS@PBIL"; include ('get_link.php'); ?> service. Paste your sequence into the <em>input form</em>, and examine the results 
 - these will offer a consensus prediction. Scroll to the bottom of the page 
 to view a schematic illustration of the result. </p>
<p>Keep the 
 results for comparison with those from later Chapters. </p>
<p><em>Reflections...</em></p>
<p2><em>Jpred:</em><p></p>
<ul>
 <li><em>Are there any obvious &alpha; 
  or &beta; regions predicted? </em></li>
 <li><em>W<em>hy is an alignment performed? 
  <em>(<a href="ch5_info_3-2.php">HINT</a>)</em> 
  </em></em></li>
 <li><em><em>What is the value of consensus 
  predictions? <em>(<a href="ch5_info_3-1.php#percent">HINT</a>)</em></em></em></li>
</ul>
<p><em>NPS@PBIL consensus:</em></p>
<ul>
 <li><em>What relative content of 
  &alpha;-helix and &beta;-sheet is predicted for your protein? </em></li>
 <li><em>How do the results compare 
  with those of Jpred?</em></li>
</ul>
<p><em>All:</em></p>
<ul>
 <li><em>From examination of the different 
  predictions, how accurate do you think they are, and why?</em></li>
 <li><em>Are there advantages of machine-learning 
  algorithms over statistically-based ones?If so, what are they? (<a href="ch5_info_3-1.php">HINT</a>) 
  </em></li>
 <li><em>Is there a consensus between 
  the results? </em></li>
 <li><em>If not, what are the differences 
  and why?</em></li>
</ul>



<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<div align="center"><form><input type="button" class="formbutton" name="goquiz" value="Go to quiz" onClick="goQuiz(5)" onMouseOver="this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.background='#D5E1ED'; this.style.color='#000060';"></form></div></td><td>
		<p align='right'><a href="JavaScript:goNextChapter()" onMouseOut="MM_swapImgRestore()" onClick="" onMouseOver="MM_swapImage('next_chapter','','Graphics/next_chapter_f2.gif',1);"><img name="next_chapter" src="Graphics/next_chapter.gif" width="68" height="49" border="0" alt=""></a></p></td></tr>
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
