<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 1 - Sequence translation & identification: Information</title>
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
 <tr>
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch1.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_info_aiir.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%"> 
          <p>&nbsp;</p></td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#993333"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
          <td valign=top> 
           <?PHP
include "info_header.php";
?>


<a name="TOC"></a>
<blockquote>
 1.1&nbsp;&nbsp;<a href="ch1_info.php">Translation</a><br>
 1.2&nbsp;&nbsp;<a href="ch1_info_2.php">Exact pattern matching</a><br>
 1.3&nbsp;&nbsp;<u>Sequence databases</u> <br>
1.4&nbsp;&nbsp;<a href="ch1_info_4.php">ID codes and description lines</a><br>
 1.5&nbsp;&nbsp;<a href="ch1_info_5.php">The Swiss-Prot entry format</a> <br>
 1.6&nbsp;&nbsp;<a href="ch1_info_6.php">The FastA sequence format</a>
</blockquote>
<p class="sectionheader"><a name="_Ref536591724"></a>1.3 Sequence databases</p>
             <p>There are many different sequence databases (both 
              protein and nucleic acid). These include: </p>
             
<p><strong>1. Protein sequence databases </strong></p>
             
                          <ul>
                            <b>Swiss-Prot</b>: a highly-annotated protein sequence database, now formally part of <a target=left href="http://www.uniprot.org">UniProtKB</a>;<br>
                            <b>PIR</b>: the protein sequence database originally derived 
                            from Margaret Dayhoff's Atlas of Protein Sequences 
                            and Structures - it is now integrated into UniProt, and its former entries are accessible via <a target=right
			    href="http://www.uniprot.org/uniparc">UniParc</a>; <br>
                            <b>TrEMBL</b>:
                            a computer-annotated supplement to Swiss-Prot that 
                            contains all the translations of EMBL nucleotide sequence 
                            entries not yet integrated in Swiss-Prot - like Swiss-Prot, it is now an integral component of <a target=left
			    href="http://www.uniprot.org">UniProtKB</a>. <br>
                          </ul>
             
<p><strong>2. Nucleic acid sequences </strong></p>
                          <ul>
                            <a target=right href="http://www.ncbi.nlm.nih.gov/genbank"><b>GenBank</b></a>: the nucleotide sequence database produced at the 
                            NCBI; <br>
                            <b>EMBL</b>: the nucleotide sequence database produced at the 
                            EBI, now released as a formal component of the European Nucleotide Archive, <a target=left href="http://www.ebi.ac.uk/ena">ENA</a>;<br>
                            <a target=right href="http://www.ddbj.nig.ac.jp/index-e.html"><b>DDBJ</b></a>:
                            the DNA database based in Japan.<br>
                          </ul>
             <p>These three databases cooperate under the auspices of the <a target=left href="http://www.insdc.org">International Nucleotide Sequence Database
	     Collaboration</a>
              (INSDC), and exchange data on a nightly basis. </p>
             
<p><strong>3. Composite databases </strong></p>
             <p>Composite databases combine a number of different 
              resources, allowing users to search more than 
              one data source at a time, but with the likely drawback of redundancy 
              (<em>i.e.</em>, the same sequence from different sources may 
              appear in search results). </p>
             
                          <ul>
                            <?php
$Url_id="11"; $Link_naam="";
 include ('get_link.php'); ?>, as mentioned above, 
                            a combination of Swiss-Prot, TrEMBL and PIR; <br>
                            <b>NRDB</b>: a so-called non-redundant composite of several data 
                            sources, including PDB sequences, Swiss-Prot, Swiss-Prot updates, 
                            PIR, GenPept and GenPeptupdate. NRDB is the default database of NCBI's BLAST service.<br>
                          </ul>
             <br>
             <div align="center">
              <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch1_info_2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'><a href="ch1_info_4.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
  </tr>
 </table>
</div></td>
        </tr>
       </table></td>
      <td valign=top width=1 bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
     <tr> 
      <td valign=top width="1" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="100%" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="1" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
    </table></td>
   <td width=15 valign="top">&nbsp;</td>
  </tr>
 </table></td>
 </tr>
</table>

 <map name="Map">
  <area shape="rect" coords="6,4,39,18" href="ch1_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch1_2_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch1_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,3,247,18" href="ch1_refs.php" alt="References" title="References">
 </map> 
 
<p> </p>
</div>

<script>awmSelectedItem=4</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>

