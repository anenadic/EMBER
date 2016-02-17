<?php
include ("connect.inc");

$result = mysql_query("select * from tblember_id where Url_id=($Url_id)") or die (mysql_error());

while ($row = mysql_fetch_array($result))
{
echo "<a ";
//if($row["internal"] == 'Y')
if(strncmp($row["Url_Url"], "http", 4) == 0)
	echo "class=\"external_link\" ";
echo "href=\"javascript:openxlink('";
echo $row["Url_Url"];
echo "','";
echo $row["leftorright"];
echo "')\">";
if ($Link_naam == '') { echo $row["Url_naam"]; }
else { echo $Link_naam; }
echo "</a>";
}
mysql_free_result($result);
?>
