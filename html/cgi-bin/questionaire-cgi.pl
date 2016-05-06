#!/usr/bin/perl -w
# Perl

use CGI;

#initialises reading of posted parameters & reads in chapter number
$query = CGI::new();




#starts the html
print "Content-type: text/html

<header>
<title>THANK YOU!</title>
</header>
<body>

<BODY background=\"http://www.bioinf.man.ac.uk/ember/prototype/background.png\" BGCOLOR=white LINK=\"brown\" VLINK=\"brown\" ALINK=\"brown\">
<FONT face=\"arial, helvetica\" COLOR=\"#000066\" SIZE=+1><B> Thank you. Your feedback is appreciated. </B></FONT>
<pre><p> <FONT face=\"arial, helvetica\" COLOR=\"#000066\" SIZE=+1>                The EMBER Team </font></p></pre>";


$comments = $query->param("comments");
$email = $query->param("email");

#opens the log file and starts LOGGING
open (LOG, ">>questionaire-log.log");

if (!defined(LOG)) {
	die "can't open file >>questionaire-log.log";
}

print LOG "start LOGGING!\n,";
print LOG `date`;
print LOG ",\nADDRESS, $ENV{'REMOTE_ADDR'}, HOSTNAME, $ENV{'REMOTE_HOST'}, USER, $ENV{'REMOTE_USER'},\n";
print LOG ",email,$email\n";
print LOG ",comments,$comments\n";



$qnum = 21;
for ($i=1;$i<=$qnum;$i++) {
	@answer[$i] = $query->param("$i");
	print  LOG "$i @answer[$i] \n";
}

#print LOG ",answers,@answer\n";




print LOG ",end LOGGING!\n\n...........................\n";

print "</body>";


close LOG;
