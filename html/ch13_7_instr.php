<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 13 - Investigating sickle cell haemoglobin: Instructions Step 7</title>
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch13.jpg); background-repeat: no-repeat"></td>
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
<p>The aim here is to ascertain how the Glu6 -&gt; Val6 mutation might cause the 
 mutant molecules to oligomerise into fibers, hence deforming erythrocytes. This 
 will require you to examine the structural context of the mutation in the &beta; 
 globin chains. </p>
<p>i) Download the files <a href="ch13/files/hbs/hbs1.txt" target="left">hbs1.txt</a>, 
 <a href="ch13/files/hbs/hbs2.txt" target="left">hbs2.txt</a> and <a href="ch13/files/hbs/hbs3.txt" target="left">hbs3.txt</a> 
 to the same directory as your 2hbs.pdb. These are scripting files that automate 
 lists of RasMol commands. RasMol should already be installed (<a href="ch6_aims.php">Chapter
 6</a>); if 
 not, you can get it from 
<?php $Url_id="112"; $Link_naam="here"; include ('get_link.php'); ?>. 
</p>
<p>ii) Start RasMol, and load the 2hbs.pdb file. The graphical window should display 
 an oligomer, representing a unit cell of the crystal from which the structure 
 was derived. This comprises several hemoglobin &beta; and &alpha; chains. To better 
 visualise this, run the first script by typing in the text window:</p>
<p align="center"><font color="#FF0000">\path\</font>script hbs1.txt</p>
<p>Where<font color="#FF0000"> \path\ </font>means the directory path to which 
 you downloaded the PDB and script files: <em>e.g.</em>, C:\downloads\ in a Windows 
 environment or /home/username/downloads/ in a UNIX environment. </p> 
<p>The &alpha; chains have now been rendered as brown wireframes, and the &beta; chains 
 as grey wireframes. Both the porphyrin prosthetic groups (blue) and the mutant 
 Val6 residues (red) are represented as space filling models. Note how, at the 
 centre of the oligomeric structure, one Val6 and one porphyrin are in close 
 proximity. A <a href="ch13/hbs1.htm" target="new">screenshot</a> is available.</p>
<p>iii) To visualise the interaction between mutant &beta; chains in the RasMol 
 text window, type:</p>
<p align="center">script hbs2.txt</p>
<p>In this representation, the two central mutant &beta; chains are highlighted 
 as white and orange wireframes. Also highlighted are the side chains of the 
 central Val6 mutation and porphyrin prosthetic group (in <a href="ch13/CPKColours.htm" target="new">CPK</a> 
 coloured space-filling models). See <a href="ch13/hbs2.htm" target="new">screenshot</a>. 
</p>
<p>iv) Finally, to visualise further amino acid side chains in the vicinity of 
 Val6, type:</p>
<p align="center">script hbs3.txt</p>
<p>Highlighted in yellow are the side-chains in the vicinity of Val6 at the interface 
 of the two haemoglobin molecules. By clicking on the atoms, the text window 
 will display the identity of the amino acid. See <a href="ch13/hbs3.htm" target="new">screenshot</a>. 
</p>
<p>The 
<?php $Url_id="199"; $Link_naam="original paper"; include ('get_link.php'); ?> discussing this crystal structure is available online. In this article, 
 Figure 3 demonstrates how the Glu6-&gt;Val6 mutation could result in the characteristic 
 &quot;sickle&quot; phenotype. The charged Glu6 mutating to Val6 creates a superficial hydrophobic patch on one HbS molecule that interacts with hydrophobic surface residues 
 of another. The molecules thus polymerise, creating extended fibres that distort 
 the shape of the red blood cell.</p>
<p>Assessment of the disparate biochemical properties of normal and sickle haemgolobin, 
 together with microscopy studies showing long crystal fibres inside sickle cells, 
 led Linus Pauling (1949) to (correctly) <a href="ch13/Paulingpopup.htm" target="new">predict</a> 
 the morphological effects of these changes. The abnormal sickle form causes 
 the cells to clump together, hampering their passage through blood vessels, 
 as nicely illustrated in this <a href="ch13/files/1block2.mov">animation</a> (in 
<?php $Url_id="192"; $Link_naam="Quicktime"; include ('get_link.php'); ?> format, by Joseph Wilmhoff), depriving tissues of oxygen. The sickled blood 
 cells have a short lifetime and cannot be replaced fast enough, leading to chronic 
 anaemia. </p>
<p>Sickle cell anemia was one of the first diseases to be linked to a defect at 
 the molecular level, providing a clear demonstration that a single base mutation 
 can change a single amino acid, which in turn can result in a defective protein. 
</p>
<p><em>Reflections...</em></p>
<ul>
 <li><em>What do you notice about the 
  location of the Val6 side chains when looking at a single molecule?</em></li>
	<li><em>What do you notice 
  about the location of the Val6 side chains when looking at two sickle cell 
  molecules?</em></li>
</ul>



<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<p align='center'>&nbsp;</p></td><td>
		<p align='right'><a href="final.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('quiz_button','','Graphics/quiz_button_f2.gif',1)"><img name="quiz_button" src='Graphics/quiz_button.gif' alt="" width=68 height=49 border=0></a></p></td></tr>
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

