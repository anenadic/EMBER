<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 6 - Fold classification: Instructions Step 3</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_f2.gif','Graphics/next_f2.gif')">
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
 <tr><td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch6.jpg); background-repeat: no-repeat"></td>
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

<p>PDBsum unites a number 
 of resources. We will now make use of this feature to explore some structure 
 classification databases and, where appropriate, an enzyme classification resource.</p>
<p>i) From PDBsum, follow 
 the <em>CATH</em> link. Follow the link(s) under the <em>Links</em> heading 
 to discover the position of your protein within the CATH hierarchy and view 
 its structural relatives. To navigate the hierarchy, click on the links next 
 to the hierarchy icons (<img src="ch6/files/ball_C.gif" width="20" height="15"><img src="ch6/files/ball_A.gif" width="20" height="15"><img src="ch6/files/ball_T.gif" width="20" height="15"><img src="ch6/files/ball_H.gif" width="20" height="15"><img src="ch6/files/ball_S.gif" width="20" height="15"><img src="ch6/files/ball_N.gif" width="20" height="15"><img src="ch6/files/ball_I.gif" width="20" height="15">). 
 </p>
<p>ii) From PDBsum, 
 follow the <em>SCOP</em> link to discover the position of your protein within 
 the SCOP hierarchy (under the heading <em>Quick Links</em>) and view its structural 
 relatives. For comparison, explore <a target=left href="http://scop.berkeley.edu">SCOPe</a> - follow links to the PDB entry. 
<p> <em>NOTE</em>:<em> For some proteins, there may be more than one polypeptide 
 chain - the CATH and SCOP hierarchies can be explored by following these links independently.</em></p>
<p>iii) Where applicable, 
 PDBsum also links to the Enzyme Commission (EC) classification. Follow the <em>E.C.</em> 
 link to view this, and the corresponding links to the ExPASy IntEnz and KEGG databases. </p>
<p><em>Reflections...</em></p>
<p><em>CATH</em>: 
</p>
<ul>
 <li><em>What is the 
  CATH number of your protein? </em></li>
 <li><em>What does this 
  number mean in terms of its Class, Architecture, Topology and Homology? (<a href="ch6_info_3.php">HINT</a>) </em></li>
 <li><em>How does the 
  structural hierarchy differ from the familial hierarchies used in PRINTS? 
  </em></li>
 <li><em>If your 
  structure belongs to more than one class, why might this be so?</em></em></li>
</ul>
<p><em>SCOP:</em></p>
<ul>
 <li><em>How is your 
  protein classified in SCOP in terms of its Class, Fold, Superfamily and Family? 
  </em></li>
 <li><em>How does the 
  structural hierarchy differ from the familial hierarchies used in PRINTS?</em></li>
 <li><em>Is the Pfam 
  link to the same entry found in <a href="ch3_aims.php">Chapter 3</a>? If not, how is it related? </em></li>
 <li><em>Does the classification 
  differ from that given by CATH. If so, why might this be so? (<a href="ch6_info_4.php">HINT</a>) 
  </em></li>
 <li><em>If your 
  structure belongs to more than one class, why might this be so?</em></em></li>
</ul>
<p><em>E.C.:</em></p>
<ul>
 <li><em>If there is 
  no E.C. link in your entry, why might this be so? </em></li>
 <li><em>If there is 
  a link, what is the E.C. number of the entry, and what catalytic role does this 
  number reflect? (<a href="ch6_info_5.php">HINT</a>)</em></li>
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
  <area shape="rect" coords="6,4,39,18" href="ch6_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch6_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch6_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch6_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch6_refs.php" alt="References" title="References">
 </map>

</div><script>awmSelectedItem=9</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
