#!/usr/bin/perl -w
# Perl
#Web interface for nuc2aa;

require("ParseInput.pl");
require("nuc2aa.pl");
#sub onef2sixf          # In: One RNA Sequence, Out: Array of six frames.
#sub revrna             # In: RNA Out: Reversed RNA
#sub dna2rna            # In: DNA, Out: RNA
#sub rna2aa1f           # Translate one RNA sequence
#sub codon              # Translate one RNA codon

%cgi = &ParseInput();

print "Content-type: text/html

<header>
<title>Nucleic Acid to Amino Acid Translation</title>
</header>
<body>
<BODY  bgcolor=\"#9dafd1\"  background=\"../Graphics/background_left.jpg\" LINK=\"brown\" VLINK=\"brown\" ALINK=\"brown\">
<FONT COLOR=\"#004F75\" SIZE=+1><B>Nucleic Acid Translator</B></FONT>
<p>
";

if ($cgi{"sequence"}) {
    print "
<p>
<FONT COLOR=\"red\"><B>Your DNA sequence:</B></FONT>
<blockquote>
"
. &seq2html(&naseq2txt("\U$cgi{sequence}\E")) .
"</blockquote>
<p>
<FONT COLOR=\"red\">Six-frame translation:</FONT>
<p>
<blockquote>
";

    foreach $framedsequence ( &onef2sixf (&dna2rna (&naseq2txt( "\U$cgi{sequence}")))){
#	print "Doing $framedsequence\n";
	@results = (@results, &seq2html(&rna2aa1f($framedsequence))) ;
    }
#    print join("\n<p>\n",@results);
    for($frame = 0;$frame < 6; $frame ++){
	print "<IMG SRC=\"../Graphics/ball1.gif\">" . ("Forward 0","Forward 1", "Forward 2", "Reverse 0", "Reverse 1", "Reverse 2")[$frame] ;
	print $results[$frame];
    }
	print "\n</blockquote><p><hr>\n";
}
else
{

print "
<FONT COLOR=\"red\"><B>Input your nucleic acid sequence here:</FONT>
<form method = \"post\" >
<TEXTAREA NAME=\"sequence\" ROWS=10 COLS=35></TEXTAREA>
<INPUT TYPE=\"submit\" VALUE=\"Send Query\"><INPUT TYPE=\"reset\" VALUE=\"Reset\">
</form>





</body>";
}
