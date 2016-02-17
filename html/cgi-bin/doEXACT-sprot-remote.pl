#!/usr/bin/perl -w

use CGI;

#initialises reading of posted parameters & reads in chapter number
$query = CGI::new();
$search = $query->param("search");


if ($search eq "") {
	print "Content-type: text/html

<header>
<title>EXACT MATCH SEARCH</title>
</header>
<BODY BGCOLOR=white LINK=\"brown\" VLINK=\"brown\" ALINK=\"brown\">
		<br> <font COLOR=\"#004F75\" SIZE=-1 face=\"Arial, Helvetica, sans-serif\">Please supply a search term. </font></body></html>";
	die;
}else {
	chomp $search;
	$search=~s/\s+//g;
}

#starts the html
print "Content-type: text/html

<body>
<BODY BGCOLOR=white LINK=\"brown\" VLINK=\"brown\" ALINK=\"brown\">
<font COLOR=\"#004F75\" SIZE=+1 face=\"Arial, Helvetica, sans-serif\"> Proteins in SWISSPROT matching the sequence $search: </font>
<hr align=left size=10 width=600 noshade>
<table width=600 border=0>
<tr valign=top>
<td width=80><font COLOR=\"brown\" SIZE=2 face=\"Arial, Helvetica, sans-serif\"><b>AccNo</b></font></td>
<td width=280><font COLOR=\"#004F75\" SIZE=2 face=\"Arial, Helvetica, sans-serif\"><b>Description</b></font></td>
<td width=80 align=right><font COLOR=\"blue\" SIZE=-1 face=\"Courier New, Courier, mono\"><b>-10 res</b></font></td>
<td width=80 align=center><font COLOR=\"red\" SIZE=-1 face=\"Courier New, Courier, mono\"><b>match</b></font></td>
<td width=80 align=left><font COLOR=\"blue\" SIZE=-1 face=\"Courier New, Courier, mono\"><b>+10 res</b></font></td>
</tr></table>";

print "$search";

open (FILEIN,"<sprot.fasta");

my @file = <FILEIN>;

$seqnum = 0;
$seq = "";
$httpLink="http://ca.expasy.org/cgi-bin/get-sprot-entry?ACCNO";
$size = 10;
$nummatches =0;

for ($i=0;$i<@file;$i++) {
	chomp $file[$i];
	#matches any fasta header
	if ($file[$i] =~ /\>/) {
		#if it finds fasta header, saves all the concatanated and buffered sequence into a cell in an array
		$seqarray[$seqnum] = $seq;
		#then looks to see if this sequence matches search string
		if ($seq =~ /$search/i) {
				$nummatches++;
				#if matched, determines the 10 residues to the left and right of the match
				$seqright = $';
				$seqleft =  $`;
				if (length($seqleft) > $size) {$seqleft = substr($seqleft,length($seqleft)-$size, $size); }
				if (length($seqright) > $size) {$seqright = substr($seqright, 0 , $size); }
				
				#and prints the results in a table
				print "<hr align=left size=2 width=600 noshade>
					<table width=600 border=0>
					<tr valign=top>
					<td width=80><font COLOR=\"#004F75\" SIZE=2 face=\"Arial, Helvetica, sans-serif\">
					<a href=\"$httpCurrent\">$accNo</a></font></td>
					<td width=280><font COLOR=\"#004F75\" SIZE=2 face=\"Arial, Helvetica, sans-serif\"> $right </font></td>
					<td width=80 align=right><font COLOR=\"blue\" SIZE=-1 face=\"Courier New, Courier, mono\">$seqleft</font></td>
					<td width=80 align=center><font COLOR=\"red\" SIZE=-1 face=\"Courier New, Courier, mono\">$search</font></td>
					<td width=80 align=left><font COLOR=\"blue\" SIZE=-1 face=\"Courier New, Courier, mono\">$seqright</font></td>
					</tr></table>";
		}
			#once this has been output, it then saves the accession of the new string and prepares an html link to swissprot	
			if ($file[$i] =~ /\|([A-Z0-9]+)\|/){
				$right = $';
				$accNo=$1;
				$httpCurrent=$httpLink;
				$httpCurrent=~s/ACCNO/$accNo/g;
			}		
		$seq ="";
		$seqnum++;
		$seqname[$seqnum] = $file[$i]; 
	}else {
		$seq = $seq . $file[$i];

	}
}

$seqarray[$seqnum] = $seq;
if ($seq =~ /$search/) {
			$nummatches++;
			#if matched, determines the 10 residues to the left and right of the match
			$seqright = $';
			$seqleft =  $`;
			$seqleft = substr($seqleft,length($seqleft)-$size, $size); 
			$seqright = substr($seqright, 0 , $size);
				
				#and prints the results in a table
			print "<hr align=left size=2 width=600 noshade>
				<table width=600 border=0>
				<tr valign=top>
				<td width=80><font COLOR=\"#004F75\" SIZE=2 face=\"Arial, Helvetica, sans-serif\">
				<a href=\"$httpCurrent\">$accNo</a></font></td>
				<td width=280><font COLOR=\"#004F75\" SIZE=2 face=\"Arial, Helvetica, sans-serif\"> $right </font></td>
				<td width=80 align=right><font COLOR=\"blue\" SIZE=-1 face=\"Courier New, Courier, mono\">$seqleft</font></td>
				<td width=80 align=center><font COLOR=\"red\" SIZE=-1 face=\"Courier New, Courier, mono\">$search</font></td>
				<td width=80 align=left><font COLOR=\"blue\" SIZE=-1 face=\"Courier New, Courier, mono\">$seqright</font></td>
				</tr><hr align=left size=2 width=610 noshade></table>";
}

#print "$seqname[$seqnum] \n$seqarray[$seqnum]";


print "<hr align=left size=10 width=600 noshade> 
	<font SIZE=2 face=\"Arial, Helvetica, sans-serif\">There are $nummatches matches found out of $seqnum sequences.</body></font></html>";
	


