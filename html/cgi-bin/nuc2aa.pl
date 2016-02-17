#!/usr/bin/perl -w
#Nucleic Acid to Amino Acid Perl Subroutines

#Test routine
#print "Input: \U$ARGV[0]","\n";
#print &rna2aa1f(&dna2rna("\U$ARGV[0]")),"\n";

#print "Okay: Now for the real job:\n";

#foreach $sequence (&onef2sixf(&dna2rna("\U$ARGV[0]"))) {
#   print "RNA: $sequence\n";
#   print &rna2aa1f($sequence), "\n";
#}
return(1);

sub seq2html {
    local($in_str) = $_[0];
    local($offset,$out_str);
    $out_str = "<pre>" . " " x 5  ;#"123456789 " x 5 . "<br>" ;
    for($offset=0; $offset < length($in_str) && $offset < 50; $offset+=10){
	$out_str .= sprintf("%11d",$offset+10);
    }
    $out_str .= "<br>";
    for($offset=0; $offset < length($in_str); $offset+=10){
	if (("0" . $offset) =~ /[50]0$/) {
	    $out_str .= sprintf("%5d ",$offset) ;
	}
	#printf " %d ",$offset ;
	$out_str .= substr($in_str,$offset,10) . " " ;
    }
    $out_str .= "</pre>" ;
    return($out_str);
}

sub naseq2txt {
    local($in_str) = $_[0];
    local($i,$out_str);
    for($i=0;$i<length($in_str);$i++){
	if ( substr($in_str,$i,1) =~ /[AUCTG]/i ) {
	    $out_str = $out_str . substr($in_str,$i,1);
	}
    }
#    $in_str =~ tr/ATUCG/ATUCG/d ;
    return($out_str);
}

sub aaseq2txt {
    local($in_str) = $_[0];
    local($i,$out_str);
    for($i=0;$i<length($in_str);$i++){
	if ( substr($in_str,$i,1) =~ /[ABCDEFGHIJKLMNOPQRSTUVWXYZ]/i ) {
	    $out_str = $out_str . substr($in_str,$i,1);
	}
    }
#    $in_str =~ tr/ATUCG/ATUCG/d ;
    return($out_str);
}

sub onef2sixf {			# In: One RNA Sequence, Out: Array of six frames.
    local($in_seq, $offset, @out_seq)=();
    $in_seq = $_[0];
    $rev_seq = &revrna($in_seq);
    
    foreach $arrow (0,1) {
	for($offset=0;$offset<3;$offset++){
#	    print "Arrow $arrow, Offset $offset\n";
	    @out_seq = (@out_seq, scalar(substr(($arrow)?$rev_seq:$in_seq,$offset)) );

	}
    }				# 
    return (@out_seq);
}

sub revrna {		# In: RNA Out: Reversed RNA
	local($in_seq) = $_[0];
	local($out_seq) = "";
	$out_seq = reverse($in_seq);
	$out_seq =~ tr/UACG/AUGC/;
	return($out_seq);
}

sub dna2rna {			# In: DNA, Out: RNA
#    print "Input: $_[0]\n";
    $_[0] =~ s/T/U/g ;
    return($_[0]);
}

sub rna2aa1f {			# Translate one RNA sequence
    local($in_seq) = $_[0];
    local($out_seq, $codon);
#    print "Nucleic Acid Sequence: $in_seq\n";
    for(;length($in_seq)>=3;){
#	print '(l($in_seq)=',length($in_seq),' ',$in_seq,')';
	$codon = substr($in_seq,0,3);
	$in_seq = substr($in_seq,3);
#	print $codon," ",&codon($codon),"\n";
	$out_seq = $out_seq . &codon($codon) ;
    }
    return($out_seq);
}

sub codon {			# Translate one RNA codon
    local($codon) = $_[0];
    if ($codon =~ /[^AUCTG]/ || length($codon) != 3) {
	$codon = "\nOdd codon: $codon\n";
    }
    else 
    {
    $codon =~ s/UU[UC]/F/;	#Phe
    $codon =~ s/UU[AG]/L/;	#Leu
    $codon =~ s/UC./S/;		#Ser
    $codon =~ s/UA[UC]/Y/;	#Tyr
    $codon =~ s/UA[AG]/\!/;	#Stop
    $codon =~ s/UG[UC]/C/;	#Cys
    $codon =~ s/UGA/\!/;	#Stop
    $codon =~ s/UGG/W/;		#Trp
    $codon =~ s/CU./L/;		#Leu (again)
    $codon =~ s/CC./P/;		#Pro
    $codon =~ s/CA[UC]/H/;	#His
    $codon =~ s/CA[AG]/Q/;	#Glutamine
    $codon =~ s/CG./R/;		#Arg
    $codon =~ s/AU[UCA]/I/;	#Ile
    $codon =~ s/AUG/M/;		#Methionine
    $codon =~ s/AC./T/;		#Threonine
    $codon =~ s/AA[UC]/N/;	#Asn
    $codon =~ s/AA[AG]/K/;	#Lys
    $codon =~ s/AG[UC]/S/;	#Ser
    $codon =~ s/AG[AG]/R/;	#Arg
    $codon =~ s/GU./V/;		#Val
    $codon =~ s/GC./A/;		#Ala
    $codon =~ s/GA[UC]/D/;	#Asp
    $codon =~ s/GA[AG]/E/;	#Glu
    $codon =~ s/GG./G/;		#Gly
};
    return($codon);
}
