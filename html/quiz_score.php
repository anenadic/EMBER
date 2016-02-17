<?php

function getPlural($num)
{
	return ($num != 1) ? "s" : "";
}

if(isset($_POST["answers"]))	// there are answers, so calc score
{
	$answers = split(",", $_POST["answers"]);
	$nrquestions = $_POST["nrquestions"];
	$answered = count($answers);
	$unanswered = $nrquestions - $answered;
	echo $answered;
	$correct = $unanswered;

	echo "<P><TABLE CELLSPACING=0 CELLPADDING=5 BORDER=0 WIDTH='400px'><TR><TD>";
	echo "<TABLE CELLSPACING=0 CELLPADDING=1 BORDER=0 BGCOLOR='#000000'><TR><TD>";
	echo "<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0 BGCOLOR='#FFFFFF'><TR><TD>";
	echo "<TABLE BORDER=0 BGCOLOR='#000099' CELLSPACING=0 CELLPADDING=0 WIDTH='100%' HEIGHT=20px><TR><TD VALIGN=MIDDLE><P>";
	echo "<FONT COLOR='#FFFFFF' STYLE='font-size:9; margin-left:10px'><B>Quiz score</B></FONT></P></TABLE>";
	echo "<TABLE CELLSPACING=0 CELLPADDING=10 BORDER=0><TR><TD>";

		if($nrquestions == $correct)
			echo "<P><FONT COLOR='#006600'><B>Congratulations, you answered all $allQuestions questions correctly!</B></FONT></P>";
		else if($nrquestions == $unanswered)
			echo "<P>You left all $unanswered questions unanswered.";
		else 
		{
			echo "<P>You correctly answered <FONT COLOR='#000099'><B> $correct";
			echo "</B></FONT> out of <FONT COLOR='#000099'><B>$answered</B></FONT> question".getPlural($answered);
			if(count($unanswered) != 0)
				echo ", and you left <FONT COLOR='#000099'><B>$unanswered</B></FONT> question".getPlural($unanswered)." unanswered";

			echo ".</P>";
		}
		if($nrquestions != $correct)
			echo "<P>Please try the quiz again!</P>";
		echo "</TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></P><br>";
}

?>