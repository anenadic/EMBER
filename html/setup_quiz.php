<?php

if(isset($_POST["answers"]))	// there are answers, so calc score
{
	$answers = split(",", $_POST["answers"]);
}
else{ //added by Wouter -1-9-03
	$answers[]="";
}

include ("connect.inc");

// check whether initial/final quiz is already performed
$quiz_answered = false;
if($chapter == "14")
{
	if(isset($initial))
		$result = mysql_query("select t1.user_initial_score as InitialScore, t2.user_firstname as FirstName, t1.user_nr_questions as NrQuestions from tblember_user_results t1, tblember_user t2 where t1.user_name = '$username' AND t2.user_name = t1.user_name AND t1.user_initial_answers <> ''") or die (mysql_error());
	else
		$result = mysql_query("select t1.user_final_answers as FinalAnswers, t1.user_final_score as Score, t1.user_initial_score as InitialScore, t2.user_firstname as FirstName, t1.user_nr_questions as NrQuestions from tblember_user_results t1, tblember_user t2 where t1.user_name = '$username' AND t2.user_name = t1.user_name") or die (mysql_error());
	$row = mysql_fetch_array($result);
	$initialscore = $row["InitialScore"];
	//echo "bla".$initialscore;
	$score = $row["Score"];
	//echo "bla".$score;
	$finalanswers = $row["FinalAnswers"];
	if($finalanswers != '')
	{
		$firstname = $row["FirstName"];
		$nrquestions = $row["NrQuestions"];
		echo "You have already completed the final quiz, $firstname. You correctly answered $score out of $nrquestions questions.";
		return;
	} else if($initial && mysql_num_rows($result) > 0)
	{
		$firstname = $row["FirstName"];
		$nrquestions = $row["NrQuestions"];
		echo "You have already completed the quiz, $firstname. You correctly answered $initialscore out of $nrquestions questions.<br>";
		echo "<p>Please click <a href=\"intro.php\"><b>here</b></a> to proceed to the Introduction.</P>";
		return;
	}
}

if($chapter == "14" && !isset($initial) && !isset($answers))
	echo "<p>You should only attempt this assessment when you have completed the practical.</p>";

// access db to get the right answers

$result = mysql_query("select t2.quiz_caption as Caption, t1.quiz_answer_value as ok, t1.quiz_question_id as Id, t1.quiz_answer as Answer, t1.quiz_answer_explanation as Explanation, t2.quiz_question as Question from tblember_quiz t1, tblember_quiz_question t2 where t1.quiz_chapter='$chapter' AND t2.quiz_chapter='$chapter' AND t1.quiz_question_id = t2.quiz_question_id ORDER BY t1.quiz_question_id") or die (mysql_error());

$questionnr = 1;
$i = 0;
$answer = 1;
$nrcorrect = 0;
$quiz = "";
while ($row = mysql_fetch_array($result))
{
	$id = $row["Id"];
	if($i == 0)
	{
		$caption = $row["Caption"];
		if($caption != "")
			$quiz = $quiz."<p class=\"sectionheader\">$caption</p>";
		$quiz = $quiz."$questionnr.&nbsp;".$row["Question"];
		$quiz = $quiz."<table border=\"0\" cellspacing=\"0\" cellpadding=\"1\">";
	}
	$quiz = $quiz."<tr>";
	$quiz = $quiz."<td valign=middle>";
	// see whether the answer is checked
	$marked = in_array("$answer", $answers, FALSE) ? true : false;
	$extra = $marked ? "CHECKED" : "";
	$quiz = $quiz."<input type=\"radio\" $extra name=\"Q$questionnr\">";
	$quiz = $quiz."</td>";
	//  is this answer correct?
	$correct = $row["ok"];
	if($correct && $marked)
		$nrcorrect++;
	$explanation = $row["Explanation"];
	if($marked && $explanation != '')
		$extra = $correct ? "style=\"font-weight:bold;color:#006600;\"" : "style=\"font-weight:bold;color:#990000;\"";
	$quiz = $quiz."<td valign=middle> <div $extra id=\"A$answer\">";
	$quiz = $quiz.$row["Answer"];
	if($marked)
	{
		$extra = $correct ? "style=\"font-weight:bold;color:#000000;\"" : "style=\"font-weight:bold;color:#000000;\"";
		$temp = $correct ? "Correct: " : "Incorrect: ";
		$temp2 = getAnswer($i);
		$allanswers = $allanswers.$temp2;
		//mysql_query("insert into tblember_user_results VALUES('', 1, '$temp2', '$correct');") or die (mysql_error());
		// add an explanation
		if($explanation != '')
			$quiz = $quiz."</td></tr><tr><td></td><td><span $extra>".$temp.$explanation."</span></td>";
	}
	$quiz = $quiz."</div></td>";
	$quiz = $quiz."</tr>";
	if($i == 3)
	{
		$quiz = $quiz."</table><br>";
		$i = 0;
		$questionnr++;
	}
	else
		$i++;
	$answer++;
}

function getAnswer($num)
{
	if($num == 0)
		return "A";
	else if($num == 1)
		return "B";
	else if($num == 2)
		return "C";
	else if($num == 3)
		return "D";
	else
		return "?";
}

// used for 1 -> question, 2 -> questions, 3 -> questions etc.
function getPlural($num)
{
	return ($num != 1) ? "s" : "";
}

// calculate the score

if(isset($_POST["answers"]))	// there are answers, so calc score
{
	$nrquestions = $_POST["nrquestions"];
	$answered = $answers[0] == '' ? 0 : count($answers);
	$unanswered = $nrquestions - $answered;
	$perc = ($nrcorrect / $nrquestions) * 100.0;
	//echo $answered;

	echo "<TABLE CELLSPACING=0 CELLPADDING=5 BORDER=0 WIDTH='400px'><TR><TD>";
	echo "<TABLE CELLSPACING=0 CELLPADDING=1 BORDER=0 BGCOLOR='#000000'><TR><TD>";
	echo "<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0 BGCOLOR='#FFFFFF'><TR><TD>";
	echo "<TABLE BORDER=0 BGCOLOR='#000099' CELLSPACING=0 CELLPADDING=0 WIDTH='100%' HEIGHT=20px><TR><TD VALIGN=MIDDLE><P>";
	echo "<FONT COLOR='#FFFFFF' STYLE='font-size:9; margin-left:10px'><B>Quiz score</B></FONT></P></TABLE>";
	echo "<TABLE CELLSPACING=0 CELLPADDING=10 BORDER=0><TR><TD>";

		if($chapter == 14)
		{
			if(!isset($initial))
			{
				$initialperc = ($initialscore / $nrquestions) * 100.0;
				$diff = $nrcorrect - $initialscore;
			}
			$today = getdate(); 
			$month = $today['mon'];
			$mday = $today['mday'];
			$year = $today['year'];
			$hours= $today['hours'];
			$minutes=$today['minutes'];
			$seconds=$today['seconds'];
			$date = sprintf("%4d-%02d-%02d %02d:%02d:%02d", $year, $month, $mday, $hours, $minutes, $seconds);
			//echo $date;
			if(isset($initial))
				mysql_query("insert into tblember_user_results VALUES('', '$username', '$allanswers', '$nrcorrect', '$date', '$nrquestions', NULL, '', '');") or die (mysql_error());
			else
				mysql_query("update tblember_user_results set user_final_datetimestamp = '$date', user_final_score = '$nrcorrect', user_final_answers = '$allanswers' where user_name = '$username'") or die (mysql_error());
			$finished = true;
			if(isset($initial))
			{
				if($nrquestions == $nrcorrect)
					echo "<P>You have achieved a perfect score! Well done! You should find our practical straightforward.</P>";
				else if($perc > 50)
					echo "<P>You have scored <FONT COLOR='#000099'><B>$nrcorrect</B></FONT> out of <FONT COLOR='#000099'><B>$nrquestions</B></FONT>. Well done! Let's see if you can improve.</P>";
				else
					echo "<P>You have scored <FONT COLOR='#000099'><B>$nrcorrect</B></FONT> out of <FONT COLOR='#000099'><B>$nrquestions</B></FONT>. Nevermind. The purpose of this practical is to help to improve your bioinformatics knowledge. Let's see how it goes.</P>";
				echo "<P>Please proceed to the <a href=\"intro.php\"><b>Introduction</b></a>.</P>";
			}
			else
			{
				if($nrquestions == $nrcorrect)
					echo "<P>You have achieved a perfect score! Initially you scored <FONT COLOR='#000099'><B>$initialscore</B></FONT>. Well done!</P>";
				else if($perc > $initialperc)
					echo "<P>You have scored <FONT COLOR='#000099'><B>$nrcorrect</B></FONT> out of <FONT COLOR='#000099'><B>$nrquestions</B></FONT>. Your score has improved by <FONT COLOR='#000099'><B>$diff</B></FONT> points. Well done!</P>";
				else
					echo "<P>You have scored <FONT COLOR='#000099'><B>$nrcorrect</B></FONT> out of <FONT COLOR='#000099'><B>$nrquestions</B></FONT>. Initially, you scored<FONT COLOR='#000099'><B>$initialscore</B></FONT> out of <FONT COLOR='#000099'><b>$nrquestions</B></FONT>. It looks like there's still room for improvement.</P>";
			}
			$finished = true;
		}
		else
		{
			if($nrquestions == $nrcorrect)
				echo "<P><FONT COLOR='#006600'><B>Congratulations, you answered all $allQuestions questions correctly!</B></FONT></P>";
			else if($nrquestions == $unanswered)
				echo "<P>You left all $unanswered questions unanswered. Please try the quiz again!";
			else 
			{
				echo "<P>You correctly answered <FONT COLOR='#000099'><B> $nrcorrect";
				echo "</B></FONT> out of <FONT COLOR='#000099'><B>$answered</B></FONT> question".getPlural($answered);
				if($unanswered != 0)
					echo ", and you left <FONT COLOR='#000099'><B>$unanswered</B></FONT> question".getPlural($unanswered)." unanswered";

				echo ".</P><P>If you got less than 50%, you might want to try the quiz again! Otherwise, proceed to the next chapter.</P>";

			}
			//if($nrquestions != $nrcorrect)
			//	echo "<P>Please try the quiz again!</P>";
		}
		echo "</TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE><br>";
		if(isset($finished))
			return;
}
?>

<form name="quizform" method="post" action="<?php global $chapter;if($chapter == 14) echo (isset($initial)) ? "initial.php" : "final.php"; else echo "ch".$chapter."_quiz.php"; ?>">

<?php
echo $quiz;

mysql_free_result($result);

echo "<input type=\"hidden\" name=\"answers\" />";
echo "<input type=\"hidden\" name=\"nrquestions\" />";

if(isset($finished))
	return;
?>
 &nbsp; 
 <table border="0" cellspacing="0" cellpadding="3">
  <tr> 
   <td valign=top><input type="submit" class="formbutton" name=quizsubmit value=" Show results " onClick="var res = getQuizChoices();<?php global $chapter;if($chapter != 14) echo "return true;"; ?>if(res < 24) { alert('You can only submit your answers when all questions are answered.'); return false };" onMouseOver="this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.background='#D5E1ED'; this.style.color='#000060';"> 
   </td>
   <td valign=top><div id="ResetQuiz" style="visibility: hidden;"> 
     <input type=button class="formbutton" name=resetquiz value=" Reset quiz " onClick="resetQuiz();" onMouseOver="this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.background='#D5E1ED'; this.style.color='#000060';"> 
   </div></td>
  </tr>
 </table>
 <script language="JavaScript" type="text/JavaScript"> 
<?php global $answers; if(count($answers) > 0) echo "displayResetQuizButton();" ?>
</script>
</form>
