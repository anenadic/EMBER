#! /usr/bin/perl
## Perl
#%cgi = &ParseInput();
#print "Content-type: text/html\n\n";
#print "IN:\n$greq\n";

return(1);

#foreach $i (keys(%cgi)) {
#    print "OUT: $i = $cgi{$i}\n";
#}
#print "<hr>\n";

sub ParseInput {                # 
    local($req,@data,$i,$key,$val,%output);
    $req = "";			# 

    if($ENV{'REQUEST_METHOD'} eq "GET") {
	$req = $ENV{"QUERY_STRING"};
    }
    elsif($ENV{'REQUEST_METHOD'} eq "POST") {
	read(STDIN,$req,$ENV{'CONTENT_LENGTH'}); # 
    }
#    $req = "code=GPCRRHODOPSN";   # 
#    $req = "motif_id=GPCRRHODOPSN1&query_seq=+MNGT++EGPNFY%0D%0AVPFSNKT&hypath_id=Eisenberg&window=6";
    $greq = $req;                                # 
#filter +ses to spaces
    $req =~ s/\++/ /g;          # 
#split into var=value
    @data = split(/&/,$req);    # 
    foreach $i (0..$#data) {    # 
#strip leading/trailing spaces
        $data[$i] =~ s/ +$//;   # 
        $data[$i] =~ s/= +/=/;  # 
                                # 
#filter hex to something sensible
        $data[$i] =~ s/%(..)/pack("c",hex($1))/ge; # 
                                # 
#dump into assoc array for return
       $data[$i] =~ s/[\n\r]/ /g;
	$data[$i] =~ /^(.+)=(.+)/; # 
        $key = $1;              # 
        $val = $2;              # 
        $output{$key} = $val;   # 
    }                           # 
    return(%output);            # 
}                               # 
