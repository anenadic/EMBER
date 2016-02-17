<?php

// This code is more compatible than html_entity_decode (Rob)
// For users prior to PHP 4.3.0 you may do this:
//function unhtmlentities($string)
//{
//   $trans_tbl = get_html_translation_table(HTML_ENTITIES);
//   $trans_tbl = array_flip($trans_tbl);
//   return strtr($string, $trans_tbl);
//}

include ("connect.inc");

//echo htmlspecialchars($zoeknaam);
//$zoeknaam = unhtmlentities($zoeknaam);
//echo "Looking for $zoeknaam";

if(isset($glossary) && $glossary == 'definitie')
{
	$result = mysql_query("SELECT glossary_term as term, glossary_abbrev as abbrev, glossary_synonym as syn, glossary_definition as def, glossary_see_also as see_also FROM tblember_gloss WHERE glossary_definition like '%$zoeknaam%' ORDER BY glossary_term") or die (mysql_error());
}
else if(isset($glossary) && $glossary == 'abbrev')
{
	$result = mysql_query("SELECT glossary_term as term, glossary_abbrev as abbrev, glossary_synonym as syn, glossary_definition as def, glossary_see_also as see_also FROM tblember_gloss WHERE glossary_abbrev like '%$zoeknaam%' ORDER BY glossary_abbrev") or die (mysql_error());
}
else if(isset($glossary) && $glossary == 'synonym')
{
	$result = mysql_query("SELECT glossary_term as term, glossary_abbrev as abbrev, glossary_synonym as syn, glossary_definition as def, glossary_see_also as see_also FROM tblember_gloss WHERE glossary_synonym like '%$zoeknaam%' ORDER BY glossary_synonym") or die (mysql_error());
}
else
{
	if(strlen($zoeknaam) == 1)
	{
		// search for alpha/beta
		if($zoeknaam == "A")
			$zoeknaam = "A|&#945;";
		else if($zoeknaam == "B")
			$zoeknaam = "B|&#946;";
		$result = mysql_query("SELECT glossary_term as term, glossary_abbrev as abbrev, glossary_synonym as syn, glossary_definition as def, glossary_see_also as see_also FROM tblember_gloss WHERE glossary_term REGEXP '^$zoeknaam' OR glossary_term REGEXP '^<i>$zoeknaam' OR glossary_abbrev REGEXP '^$zoeknaam' OR glossary_abbrev REGEXP '^<i>$zoeknaam' OR glossary_synonym like '$zoeknaam' OR glossary_synonym like '<i>$zoeknaam' ORDER BY glossary_term") or die (mysql_error());
	}
	else
	{
		if(!isset($exact))
			$zoeknaam = $zoeknaam."%";
		$result = mysql_query("SELECT glossary_term as term, glossary_abbrev as abbrev, glossary_synonym as syn, glossary_definition as def, glossary_see_also as see_also FROM tblember_gloss WHERE glossary_term like '$zoeknaam' OR glossary_term like '<i>$zoeknaam' OR glossary_abbrev like '$zoeknaam' OR glossary_abbrev like '<i>$zoeknaam' OR glossary_synonym like '$zoeknaam' OR glossary_synonym like '<i>$zoeknaam' ORDER BY glossary_term") or die (mysql_error());
	}
}

if(mysql_num_rows($result) == 0)
{
	echo "No match.<br><br>";
}
else while($row = mysql_fetch_array($result))
{
	$ab = $row["abbrev"];
	$term = $row["term"];
	$syn = $row["syn"];
	$def = $row["def"];
	$see_also = $row["see_also"];
	if($ab == '' && $syn == '')
		print("<b>$term</b><br>");
	else if($ab != '' && $syn == '')
		print("<b>$term</b> (abbreviation: $ab)<br>");
	else if($ab == '' && $syn != '')
		print("<b>$term</b> (synonym: $syn)<br>");
	else
		print("<b>$term</b> (abbreviation: $ab; synonym: $syn)<br>");
	if($def != '')	
		print("$def<br>");
	if($see_also != '')
	{
		$arr = split('[\|]', $see_also);
		$also = "<i>See also</i>: ";
		for($i = 0;$i < count($arr);$i++)
		{
			$temp = trim($arr[$i]);
			$temp2 = urlencode($temp);
			$extra = ($i + 1 == count($arr)) ? "<br>" : ", ";
			$also = $also."<a href=\"glossary.php?zoeknaam=$temp2&exact=true\">$temp</a>$extra";
		}
		echo $also;
		//print("<i>See also</i>: <a href=\"glossary.php?zoeknaam=$see_also&exact=true\">$see_also</a><br>");
	}
	print("<br>");
}
?>
