<?PHP
 
$theFileName = basename($_SERVER['PHP_SELF']);
$theUnderScoreOffset = strpos($theFileName,"_");
$theChapterName = substr($theFileName,0,$theUnderScoreOffset);
$theFileToInclude = $theChapterName . "/" . $theChapterName . "_info_cont.php";
echo "<p><img src='Graphics/" . $theChapterName . "_header.gif' vspace=6 border=0></p>";

?>
